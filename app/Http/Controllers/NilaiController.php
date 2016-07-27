<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;
use App\KelasJurusan;
use App\Kelas;
use App\Jurusan;
use App\Siswa;

class NilaiController extends Controller
{
    //
    public function halamanInputNilai($kelasjurusan_id,$mapel_id)
    {

    		$role = Sentinel::findRoleBySlug('siswa');
            $user = $role->users()->with('roles','siswa.kelasJurusan')->paginate(20);
            //method with itu artinya dengan .. jadi ambil data user dengan data di model siswa
            //model siswa sendiri bisa ada karena ada relasinya .. siswa itu nama method relasi di Model User
            
            // dd($user);
            //kalo guru berarti with guru, admin -> with admin
            // sekarang gimana kalo kelas jurusan ? nah aku juga ga tau
            //where tergantung dari inputan di route.. kan beda kelas beda hasil

          $kelas_jurusan = KelasJurusan::find($kelasjurusan_id);  //kalo ini nampilin semua kelasjurusan

            // mau nyoab cek data siswa apa ada relasinya.. tuh kan ada
            $no=1;
            return view('guru.inputnilai', compact('user','no', 'kelas_jurusan', 'mapel_id'));
            
          	/*$siswa_id = \Sentinel::getUser()->id;*/
    	// bagaimana kita bisa tahu id kelasjurusan yang memiliki kelas x?
    	//  bisa pake iner join kalo di native ?
    	// kalo di Eloquen pake where function
    	// $kelasjurusan = KelasJurusan::where('kelas',function($query){
    	// 	$query->where('kode','=','1');
    	// })->get();

    	// $kelasjurusan_id = $kelasjurusan_id;
    	/*$inputnilai = Siswa::paginate(5);
    	$no=1;
    	return view('guru.inputnilai',  compact('inputnilai', 'no')); */
    	
    	
    }			

}
