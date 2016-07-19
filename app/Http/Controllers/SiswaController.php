<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;
use App\KelasJurusan;

class SiswaController extends Controller
{
    //Controller Untuk Siswa
      public function index()
      {
            $role = Sentinel::findRoleBySlug('siswa');
            $users = $role->users()->with('roles')->paginate(8);

            return view('siswa.index', ['users' => $users]);
      }
      public function tambah()
      {
            $kelasjurusan = KelasJurusan::all();
            return view('admin.tambahsiswa', compact('kelasjurusan'));
      }
     Public function siswaProfil()
      {
       return view ('siswa.profil');
      }
      Public function profilEdit()
      {
       return view ('siswa.profil_edit');
      }
      Public function NilaiSemester1()
      {
       return view ('siswa.Semester1');
      }
      Public function NilaiSemester2()
      {
       return view ('siswa.Semester2');
      }
      Public function NilaiSemester3()
      {
       return view ('siswa.Semester3');
      }
      Public function NilaiSemester4()
      {
       return view ('siswa.Semester4');
      }
      Public function NilaiSemester5()
      {
       return view ('siswa.Semester5');
      }
      Public function NilaiSemester6()
      {
       return view ('siswa.Semester6');
      }
}
