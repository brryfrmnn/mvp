<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WaliKelasController extends Controller
{
    //Controller Buat Wali Kelas
    	public function guruProfil()
      {
       	return view('guru.profil');
      }
      public function KelasX()
      {
       	return view('guru.kelasx');
      }
      public function kelolaNilai()
      {
        return view ('walikelas.kelolanilai');
      }
}
