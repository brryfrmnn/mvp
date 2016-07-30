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
         //cek jika guru tersebut memiliki role wali kelas
         foreach ($guru as $data) {
            foreach ($data->roles as $role) {
                if ($role->slug == 'wali_kelas') {
                    $data->wali_kelas = true;
                } else {
                    $data->wali_kelas = false;
                }
            }
          }

        
        return view('admin.dataguru', ['guru' => $guru, 'no' =>$no]);
   	}
      public function dataSiswa()
      {
         $role = Sentinel::findRoleBySlug('siswa');
         $siswa = $role->users()->with('roles')->paginate(8);
         $no=1;
        return view('admin.datasiswa', ['siswa' => $siswa, 'no' =>$no]);
         
      }
   	
   	public function tampilMapel()
    {
        //tampilkan semua menggunakan method all() atau get() atau paginate()
        /*
        $pengumuman = Pengumuman::all();
        return redirect('/admin/create')->with('message','Success .. ')
                                        ->with('alert','success');
                                        */
        //atau

        $mapel = Mapel::orderBy('id','desc')->paginate(5);
        $no=1;
        return view('admin.datamapel')->with('mapel',$mapel)->with('no',$no);
    }
    public function storeMapel(Request $request)
    {
        //memasukan semua inputan 
        /*
            ada 2 cara.. menggunakan cara manual menggunakan Eloquent ORM (lebih disarankan)
            atau menggunakan cara Query Builder mnggunakan method insert berbentuk array

            contoh A
        */
        $mapel = new Mapel; //deklarasikan objek pengumuman dari Class/odel Pengumuman
        $mapel->admin_id = \Sentinel::getUser()->id; //gunakan Model Sentinel agar dapat id dari orang yang login
        $mapel->nama   = $request->input('nama'); //$request->input mirip $_POST['']
        $mapel->kategori  = $request->input('kategori');

        if ($mapel->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/mapel/tampil')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/mapel/tambah')->with('message','Gagal .. ')
                                        ->with('alert','danger');

        } 
    }

    public function editMapel($id)
    {
        /*$role = Sentinel::findRoleBySlug('administrator');
        $admins = $role->users()->with('roles')->get();*/
        $mapel = Mapel::find($id);
        return view('admin.editmapel')->with('mapel',$mapel); 
    }

    public function updateMapel(Request $request, $id)
    {
        //gunakan method find utntuk mencari id
        $mapel = Mapel::find($id);
        $mapel->admin_id = \Sentinel::getUser()->id; //gunakan Model Sentinel agar dapat id dari orang yang login
        $mapel->nama    = $request->input('nama'); //$request->input mirip $_POST['']
        $mapel->kategori    = $request->input('kategori');

        if ($mapel->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/mapel/tampil')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/mapel/tambah')->with('message','Gagal .. ')
                                        ->with('alert','danger');

        }
    }

    public function hapusMapel($id)
    {
        //method hapus .. jika menggunakan softDeletes() data tidak benar2 dihapus .. tapi tidak ditampilkan daja
        //cari dengan method find
        $mapel = Mapel::find($id);
        // $pengumuman->delete();
       if ($mapel->delete()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/mapel/tampil')->with('message','Success .. berhasil di hapus')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/mapel/tambah')->with('message','Gagal ..dihapus ')
                                        ->with('alert','danger');

        }
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
      
      public function editSiswa()
      {
       return view('admin.editsiswa');
      }
      public function editGuru()
      {
       return view('admin.editguru');
      }
      public function editProfil()
      {
       return view('admin.editprofil');
      }
      public function editPengumuman()
      {
       $pengumuman = Pengumuman::orderBy('id','desc')->paginate(3);
       return view('admin.editpengumuman')->with('pengumuman',$pengumuman);
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

      public function indexWaliKelas()
      {
          $role = Sentinel::findRoleBySlug('guru');
          $guru = $role->users()->with('roles')->paginate(8);
          $no=1;
          
          return view('admin.dataguru', ['guru' => $guru, 'no' =>$no]);
      }
}
