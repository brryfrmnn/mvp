<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Http\Requests;

class KelasController extends Controller
{
    //
    public function tambah()
    {
        //tampilkan semua menggunakan method all() atau get() atau paginate()
        /*
        $pengumuman = Pengumuman::all();
        return redirect('/admin/create')->with('message','Success .. ')
                                        ->with('alert','success');
                                        */
        //atau

        return view('admin.tambahkelas');
    }

    public function index()
   	{
   		$kelas = Kelas::all();
   		$no=1;
   		return view ('admin.datakelas')->with('kelas', $kelas)->with('no', $no);
   	}

   	public function simpan(Request $request)
   	{
   		$kelas = new Kelas; //deklarasikan objek pengumuman dari Class/odel Pengumuman
        //gunakan Model Sentinel agar dapat id dari orang yang login
        $jurusan->nama   	= $request->input('nama'); //$request->input mirip $_POST['']
        $jurusan->kode      = $request->input('kode');

        if ($kelas->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/data/kelas')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/data/kelas/tambah')->with('message','Gagal .. ')
                                        ->with('alert','danger');

        }

   	}

   	public function detail($id)
    {
        /*$role = Sentinel::findRoleBySlug('administrator');
        $admins = $role->users()->with('roles')->get();*/
        
    }
}