<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;
use App\KelasJurusan;
use App\Kelas;
use App\Jurusan;

class WaliKelasController extends Controller
{
    //Controller Buat Wali Kelaswali
      public function index()
      {
            $role = Sentinel::findRoleBySlug('wali_kelas');
            $users = $role->users()->with('roles')->paginate(8);

            return view('walikelas.index', ['users' => $users]);
      }
    	public function halamanKelolaNilai($kelasjurusan_id,$mapel_id)
      {

            $role = Sentinel::findRoleBySlug('siswa');
            $user = $role->users()->with('roles','siswa.kelasJurusan')->paginate(20);
              

            $kelas_jurusan = KelasJurusan::find($kelasjurusan_id);  //kalo ini nampilin semua kelasjurusan

              // mau nyoab cek data siswa apa ada relasinya.. tuh kan ada
            $no=1;
            return view('walikelas.kelolanilai', compact('user','no', 'kelas_jurusan', 'mapel_id'));
                
        
      }   
      /*public function cek()
      {
       	return view('walikelas.ceknilai');
      }*/
      public function kelola()
      {
        return view ('walikelas.kelolanilai');
      }
}
