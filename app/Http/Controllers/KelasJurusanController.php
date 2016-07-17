<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kelas;
use App\Jurusan;
use App\KelasJurusan;
class KelasJurusanController extends Controller
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

        $kelas = Kelas::orderBy('id','asc')->get();
        $jurusan = Jurusan::orderBy('id','asc')->get();
        return view('admin.tambahkelasjurusan')->with('kelas',$kelas)->with('jurusan',$jurusan);
    }

    public function index()
   	{
   		$kelasjurusan = KelasJurusan::all();
   		$no=1;
   		return view ('admin.datakelasjurusan')->with('kelasjurusan', $kelasjurusan)->with('no', $no);
   	}

   	public function simpan(Request $request)
   	{
   		$kelasjurusan = new KelasJurusan;
   		$kelasjurusan->kelas_id = $request->input('kelas_id');
   		$kelasjurusan->jurusan_id = $request->input('jurusan_id');
   		if ($kelasjurusan->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/data/kelasjurusan')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/data/kelasjurusan/tambah')->with('message','Gagal .. ')
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