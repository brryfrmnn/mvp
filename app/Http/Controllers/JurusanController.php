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
        $jurusan = new Jurusan; //deklarasikan objek jurusan dari Class/odel jurusan
        //gunakan Model Sentinel agar dapat id dari orang yang login
        $jurusan->nama   	= $request->input('nama'); //$request->input mirip $_POST['']
        $jurusan->kode      = $request->input('kode');

        if ($jurusan->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/jurusan
            return redirect('/admin/data/jurusan')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/jurusan/tambah
            return redirect('/admin/data/jurusan/tambah')->with('message','Gagal .. ')
                                        ->with('alert','danger');

        }

        
    }

    public function edit($id)
    {
        /*$role = Sentinel::findRoleBySlug('administrator');
        $admins = $role->users()->with('roles')->get();*/
        $jurusan = Jurusan::find($id);
        return view('admin.editjurusan')->with('jurusan',$jurusan); 
    }

    public function update(Request $request, $id)
    {
        //gunakan method find utntuk mencari id
        $jurusan = jurusan::find($id);
        $jurusan->admin_id = \Sentinel::getUser()->id; //gunakan Model Sentinel agar dapat id dari orang yang login
        $jurusan->kode    = $request->input('kode'); //$request->input mirip $_POST['']
        $jurusan->nama     = $request->input('nama');

        if ($jurusan->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/jurusan
            return redirect('/admin/data/jurusan')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/jurusan/tambah
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
