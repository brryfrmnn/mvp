<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiswaController extends Controller
{
    //Controller Untuk Siswa
     
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
