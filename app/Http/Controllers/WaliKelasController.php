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
      public function cek(Request $request)
      {
            $siswa_id = $request->input('siswa_id');
            $semester = $request->input('semester');
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
            return view('walikelas.ceknilai', compact('jadwal','no'));
                
        
      }   

      public function cekpengetahuan()
     {
         return view('walikelas.ceknilaipengetahuan');
     } 
    public function cekketerampilan()
     {
         return view('walikelas.ceknilaiketerampilan');
     } 
    public function ceksikap()
     {
         return view('walikelas.ceknilaisikap');
     } 
      public function lihatrapor()
     {
         return view('walikelas.nilai_rapor');
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
