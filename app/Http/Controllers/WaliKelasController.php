<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;
use App\KelasJurusan;
use App\Kelas;
use App\Jurusan;
use App\User;
use App\Mapel;
use App\JadwalPelajaran;
use DB;
use App\NilaiPengetahuan;
use App\NilaiKeterampilan;
use App\NilaiSikap;
use App\NilaiRapor;

class WaliKelasController extends Controller
{
    //Controller Buat Wali Kelaswali
      public function index()
      {
            $role = Sentinel::findRoleBySlug('wali_kelas');
            $users = $role->users()->with('roles')->paginate(8);

            return view('walikelas.index', ['users' => $users]);
      }

    	public function kelola()
      {
            //ambil data guru dari table user dan guru berdasarkan guru yg login menggunakan sentinel
            $guru = User::with('guru')->find(Sentinel::getUser()->id);
            //masukan data kelasjurusan_id yg di tabel guru ke variable kelas jurusan.id
            $kelasjurusan_id = $guru->guru->kelas_jurusan_id;
            // dd($kelasjurusan_id);
            //cari user berdasarkan role siswa
            $role = Sentinel::findRoleBySlug('siswa');
            //ambil data siswa dari tabel user dan tabel siswa beserta kelas jurusan where kelasjurusan.id sama dengan $kelasjurusan_id
            $user = $role->users()->with('roles','siswa.kelasJurusan')
                                  ->whereHas('siswa.kelasJurusan',function($query) use ($kelasjurusan_id){
                                      $query->where('id',$kelasjurusan_id);
                                  })                               
                                  ->paginate(20);

            // dd($user);

            $kelas_jurusan = KelasJurusan::find($kelasjurusan_id);  //kalo ini nampilin semua kelasjurusan

              // mau nyoab cek data siswa apa ada relasinya.. tuh kan ada
            $no=1;
            return view('walikelas.kelolanilai', compact('user','no', 'kelas_jurusan', 'mapel_id'));
                
        
      }   

      public function list(Request $request)
      {
            //ambil data guru dari table user dan guru berdasarkan guru yg login menggunakan sentinel
            $guru = User::with('guru')->find(Sentinel::getUser()->id);
            //masukan data kelasjurusan_id yg di tabel guru ke variable kelas jurusan.id
            $kelasjurusan_id = $guru->guru->kelas_jurusan_id;
            // dd($kelasjurusan_id);
            //cari user berdasarkan role siswa
            $role = Sentinel::findRoleBySlug('siswa');
            //ambil data siswa dari tabel user dan tabel siswa beserta kelas jurusan where kelasjurusan.id sama dengan $kelasjurusan_id
            $user = $role->users()->with('roles','siswa.kelasJurusan')
                                  ->whereHas('siswa.kelasJurusan',function($query) use ($kelasjurusan_id){
                                      $query->where('id',$kelasjurusan_id);
                                  })                               
                                  ->paginate(20);

            // dd($user);

            $kelas_jurusan = KelasJurusan::find($kelasjurusan_id);  //kalo ini nampilin semua kelasjurusan

              // mau nyoab cek data siswa apa ada relasinya.. tuh kan ada
            $no=1;
            return view('walikelas.list', compact('user','no', 'kelas_jurusan', 'mapel_id')); 
      }

      public function cek(Request $request)
      {
            $siswa_id = $request->input('siswa_id');
            $semester = $request->input('semester');
            $tahun_ajaran = $request->input('tahun_ajaran');
            $jadwal = DB::table('jadwal_pelajaran')
                        ->select(DB::raw('
                            mapel.id as mapel_id,
                            mapel.nama as nama_mapel,
                            user_guru.id as guru_id,
                            CONCAT_WS(
                              \' \',
                              user_guru.first_name,
                              user_guru.last_name
                            ) AS guru,
                            user_siswa.id AS siswa_id,
                            CONCAT_WS(
                              \' \',
                              user_siswa.first_name,
                              user_siswa.last_name
                            ) AS siswa
                        '))
                        ->join('kelas_jurusan','jadwal_pelajaran.kelasjurusan_id','=','kelas_jurusan.id')
                        ->join('mapel','mapel.id','=','jadwal_pelajaran.mapel_id')
                        ->join('users AS user_guru','user_guru.id','=','jadwal_pelajaran.guru_id')
                        ->join('siswa','siswa.kelas_jurusan_id','=','kelas_jurusan.id')
                        ->join('users AS user_siswa','user_siswa.id','=','siswa.user_id')
                        ->where('user_siswa.id',$siswa_id)
                        ->where('jadwal_pelajaran.semester',$semester)
                        ->get();
                // dd($jadwal);
            // $role = Sentinel::findRoleBySlug('siswa');
            //ambil data siswa dari tabel user dan tabel siswa beserta kelas jurusan where kelasjurusan.id sama dengan $kelasjurusan_id
            // $user = $role->users()->with(['roles','siswa.kelasJurusan' => function($query) use ($kelasjurusan_id){
            //                           $query->where('id',$kelasjurusan_id);
            //                       }])                               
            //                       ->paginate(20);
            // dd($user);

              // mau nyoab cek data siswa apa ada relasinya.. tuh kan ada
            $no=1;
            return view('walikelas.ceknilai', compact('jadwal','no','semester','tahun_ajaran'));
                
        
      }   

    public function cekpengetahuan(Request $request)
    {
          //masukan Request dari get di url
          $siswa_id = $request->siswa_id;
          $mapel_id = $request->mapel_id;
          $guru_id  = $request->guru_id;
          //ambil data nilai pengetahuan dari model nilai pengetahuan
          $nilai_pengetahuan = NilaiPengetahuan::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ;   
          if ($nilai_pengetahuan->count() > 0) {
            $nilai_pengetahuan = $nilai_pengetahuan->first();
            return view('walikelas.ceknilaipengetahuan',compact('nilai_pengetahuan'));
          } else {
              return redirect('walikelas/nilai/cek?siswa_id='.$siswa_id.'&semester='.$semester.'&tahun_ajaran='.$tahun_ajaran)->with('message','Gagal Nilai Pengetahuan belum diinput.. ')
                                          ->with('alert','danger');
          }                                                
         
    } 
    public function cekketerampilan(Request $request)
     {
         //masukan Request dari get di url
          $siswa_id = $request->siswa_id;
          $mapel_id = $request->mapel_id;
          $guru_id  = $request->guru_id;
          //ambil data nilai pengetahuan dari model nilai pengetahuan
          $nilai_keterampilan = NilaiKeterampilan::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ;   
          if ($nilai_keterampilan->count() > 0) {
            $nilai_keterampilan = $nilai_keterampilan->first();
            return view('walikelas.ceknilaiketerampilan',compact('nilai_keterampilan'));
          } else {
              return redirect('walikelas/nilai/cek?siswa_id='.$siswa_id.'&semester='.$semester.'&tahun_ajaran='.$tahun_ajaran)->with('message','Gagal Nilai keterampilan belum diinput.. ')
                                          ->with('alert','danger');
          }        
     } 
    public function ceksikap(Request $request)
     {
         //masukan Request dari get di url
          $siswa_id = $request->siswa_id;
          $mapel_id = $request->mapel_id;
          $guru_id  = $request->guru_id;
          //ambil data nilai pengetahuan dari model nilai pengetahuan
          $nilai_sikap = NilaiSikap::where('siswa_id','=',$siswa_id)
                                                ->where('mapel_id','=',$mapel_id)
                                                ->where('guru_id','=',$guru_id)
                                                ;   
          if ($nilai_sikap->count() > 0) {
            $nilai_sikap = $nilai_sikap->first();
            return view('walikelas.ceknilaisikap',compact('nilai_sikap'));
          } else {
              return redirect('walikelas/nilai/cek?siswa_id='.$siswa_id.'&semester='.$semester.'&tahun_ajaran='.$tahun_ajaran)->with('message','Gagal Nilai sikap belum diinput.. ')
                                          ->with('alert','danger');
          }        
     } 
      public function lihatrapor(Request $request)
     {
        $siswa_id = $request->siswa_id;
        $semester = $request->semester;
        $tahun_ajaran = $request->tahun_ajaran;
        $no =1;
        $rapor = NilaiRapor::with('guru','mapel')->where('siswa_id',$siswa_id)
                            ->where('semester',$semester)
                            ->where('tahun_ajaran',$tahun_ajaran)
                            ;
        if ($rapor->count()>0) {
            $rapor = $rapor->get(); 
            return view('walikelas.nilai_rapor',compact('rapor','no'));
        } else {
            return view('walikelas.nilai_rapor'); 
        }
     } 
      
      /*public function cek()
      {
       	return view('walikelas.ceknilai');
      }*/
      /*public function kelola()
      {
        return view ('walikelas.kelolanilai');
      }*/
}
