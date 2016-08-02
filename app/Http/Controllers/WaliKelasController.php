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
            $user = $role->users()->with(['roles','siswa.kelasJurusan' => function($query) use ($kelasjurusan_id){
                                      $query->where('id',$kelasjurusan_id);
                                  }])                               
                                  ->paginate(20);

            // dd($user);

            $kelas_jurusan = KelasJurusan::find($kelasjurusan_id);  //kalo ini nampilin semua kelasjurusan

              // mau nyoab cek data siswa apa ada relasinya.. tuh kan ada
            $no=1;
            return view('walikelas.kelolanilai', compact('user','no', 'kelas_jurusan', 'mapel_id'));
                
        
      }   
      public function cek(Request $request)
      {
            //ambil data guru dari table user dan guru berdasarkan guru yg login menggunakan sentinel
            $guru= User::with('guru')->find(Sentinel::getUser()->id);
            //masukan data kelasjurusan_id yg di tabel guru ke variable kelas jurusan.id
            $kelasjurusan_id = $guru->guru->kelas_jurusan_id;
            // dd($kelasjurusan_id);
            //cari user berdasarkan role siswa
            $role = Sentinel::findRoleBySlug('siswa');
            //ambil data siswa dari tabel user dan tabel siswa beserta kelas jurusan where kelasjurusan.id sama dengan $kelasjurusan_id
            $user = $role->users()->with(['roles','siswa.kelasJurusan' => function($query) use ($kelasjurusan_id){
                                      $query->where('id',$kelasjurusan_id);
                                  }])                               
                                  ->paginate(20);

            // dd($user);

            $kelas_jurusan = KelasJurusan::find($kelasjurusan_id);  //kalo ini nampilin semua kelasjurusan

            $mapel = Mapel::find($mapel_id);

              // mau nyoab cek data siswa apa ada relasinya.. tuh kan ada
            $no=1;
            return view('walikelas.ceknilai', compact('user','no', 'kelas_jurusan', 'mapel_id'));
                
        
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
