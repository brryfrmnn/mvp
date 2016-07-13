<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Http\Requests;

class KelasController extends Controller
{
    //
    public function tampilKelas()
    {
        //tampilkan semua menggunakan method all() atau get() atau paginate()
        /*
        $pengumuman = Pengumuman::all();
        return redirect('/admin/create')->with('message','Success .. ')
                                        ->with('alert','success');
                                        */
        //atau

        $kelas = Kelas::orderBy('id','desc')->get();
        return view('admin.tambahkelas')->with('kelas',$kelas);
    }
}
