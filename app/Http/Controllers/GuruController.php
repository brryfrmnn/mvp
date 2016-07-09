<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;

class GuruController extends Controller
{
    //Controller Buat Guru
      public function index()
      {
            $role = Sentinel::findRoleBySlug('guru');
            $users = $role->users()->with('roles')->paginate(8);

            return view('guru.index', ['users' => $users]);
      }
    	public function guruProfil()
      {
       return view('guru.profile');
      }
      public function KelasX()
      {
       return view('guru.kelasx');
      }
      public function inputNilai()
      {
       return view('guru.inputnilai');
      }
      public function editNilai()
      {
       return view('guru.editnilai');
      }
      public function inputNilaiPengetahuan()
      {
       return view('guru.inputnilaipengetahuan');
      }
      public function inputNilaiKeterampilan()
      {
       return view('guru.inputnilaiketerampilan');
      }
      public function inputNilaiSikap()
      {
        return view('guru.inputnilaisikap');
      }
      public function editNilaiPengetahuan()
      {
       return view('guru.editnilaipengetahuan');
      }
      public function editNilaiKeterampilan()
      {
       return view('guru.editnilaiketerampilan');
      }
      public function editNilaiSikap()
      {
       return view('guru.editnilaisikap');
      }
      public function editProfil()
      {
       return view('guru.editprofil');
      }
      
}
