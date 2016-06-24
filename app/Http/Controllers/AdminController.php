<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
   	//membuat method index untuk ambil data semua siswa
   	public function dataSiswa()
   	{
   		$data = [
   					'nama' => 'Sari Susanti',
   					'kelas' => 'X'
   				];
   		$data2 = [
   					'nama' => 'Sari Susanti',
   					'kelas' => 'X'
   				];
   		$nilai1 = 5;
   		$nilai2 = 10;
   		$hasil = $nilai2 + $nilai1;

   		return view('admin.datasiswa')->with('data',$data)
   									  ->with('data2',$data2)
   									  ->with('hasil',$hasil);
   	}

/*================================= Awal Controller ADMIN=========================================*/

   	public function dataGuru()
   	{
   		return view('admin.dataguru');
   	}
   	public function dataKelas()
   	{
   		return view ('admin.datakelas');
   	}
   	public function dataMapel()
   	{
   		return view ('admin.datamapel');
   	}

   	public function adminProfil()
   	{
   		$nama= 'Rikuchanjelek';
   		return view('admin.profile')->with('nama',$nama);
   	}

   	public function jadwalMengajar()
   	{
   		return view('admin.jadwal_mengajar');
   	}
      public function tambahSiswa()
      {
         return view('admin.tambahsiswa');
      }
      public function tambahGuru()
      {
         return view('admin.tambahguru');
      }
      public function tambahMapel()
      {
         return view('admin.tambahmapel');
      }
      public function tambahKelas()
      {
         return view('admin.tambahkelas');
      }
      public function tambahJadwal()
      {
       return view('admin.tambahjadwal');
      }
      public function editSiswa()
      {
       return view('admin.editsiswa');
      }
      public function editGuru()
      {
       return view('admin.editguru');
      }
      public function editMapel()
      {
        return view('admin.editmapel');
      }
      public function editProfil()
      {
       return view('admin.editprofil');
      }
      public function detailSiswa()
      {
       return view('admin.detailsiswa');
      }
      public function detailGuru()
      {
       return view('admin.detailguru');
      }
      public function detailKelas()
      {
       return view('admin.detailkelas');
      }

      public function ()
      {
       
      }
      public function ()
      {
       
      }
}
