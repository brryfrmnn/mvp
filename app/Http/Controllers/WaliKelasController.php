<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;

class WaliKelasController extends Controller
{
    //Controller Buat Wali Kelaswali
      public function index()
      {
            $role = Sentinel::findRoleBySlug('wali_kelas');
            $users = $role->users()->with('roles')->paginate(8);

            return view('walikelas.index', ['users' => $users]);
      }
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
