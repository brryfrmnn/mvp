<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel; 
use App\Pengumuman;
use Sentinel;
use App\Http\Requests;

class AdminController extends Controller
{
   	//membuat method index untuk ambil data semua siswa
   	

/*================================= Awal Controller ADMIN=========================================*/
  
    public function index()
    {
          $role = Sentinel::findRoleBySlug('administrator');
          $users = $role->users()->with('roles')->paginate(8);

          return view('admin.index', ['users' => $users]);
    }
   	public function dataGuru()
   	{
   		$role = Sentinel::findRoleBySlug('guru');
         $guru = $role->users()->with('roles')->paginate(8);
         $no=1;
        return view('admin.dataguru', ['guru' => $guru, 'no' =>$no]);
   	}
      public function dataSiswa()
      {
         $role = Sentinel::findRoleBySlug('siswa');
         $siswa = $role->users()->with('roles')->paginate(8);
         $no=1;
        return view('admin.datasiswa', ['siswa' => $siswa, 'no' =>$no]);
         
      }
   	public function dataKelas()
   	{
   		return view ('admin.datakelas');
   	}
   	public function dataMapel()
   	{
      $mapel = Mapel::orderBy('id','desc')->paginate(3);
      $no=1;
      return view('admin.datamapel')->with('mapel',$mapel)->with('no',$no);
   		
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
    public function pengumuman()
    {
      $pengumuman = Pengumuman::orderBy('id','desc')->paginate(3);
      $no=1;
      return view('admin.pengumuman')->with('pengumuman',$pengumuman)->with('no',$no);
      //$role = Sentinel::findRoleBySlug('administrator');
      //$users = $role->users()->with('roles')->paginate(8);
      //$no=1;
      //return view('admin.pengumuman', ['users' => $users, 'no' =>$no]);
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
      public function tambahPengumuman()
      {
       return view('admin.tambahpengumuman');
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
      public function editPengumuman()
      {
       return view('admin.editpengumuman');
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
}
