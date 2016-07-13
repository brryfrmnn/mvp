<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\Http\Requests;

class JurusanController extends Controller
{
    //
    public function tambah()
    {
        return view('admin.tambahjurusan');
    }

    public function index()
   	{
   		$jurusan = Jurusan::all();
   		$no=1;
   		return view ('admin.datajurusan')->with('jurusan', $jurusan)->with('no', $no);
   	}

   	public function simpan(Request $request)
    {
        //memasukan semua inputan 
        /*
            ada 2 cara.. menggunakan cara manual menggunakan Eloquent ORM (lebih disarankan)
            atau menggunakan cara Query Builder mnggunakan method insert berbentuk array

            contoh A
        */
        $jurusan = new Jurusan; //deklarasikan objek pengumuman dari Class/odel Pengumuman
        //gunakan Model Sentinel agar dapat id dari orang yang login
        $jurusan->nama   	= $request->input('nama'); //$request->input mirip $_POST['']
        $jurusan->kode      = $request->input('kode');

        if ($jurusan->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/data/jurusan')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/data/jurusan/tambah')->with('message','Gagal .. ')
                                        ->with('alert','danger');

        }

        
    }

   	public function detail($id)
    {
        /*$role = Sentinel::findRoleBySlug('administrator');
        $admins = $role->users()->with('roles')->get();*/
        $kelasjurusan = KelasJurusan::find($id);
        return view('admin.detailkelasjurusan')->with('kelasjurusan',$kelasjurusan); 
    }
}
