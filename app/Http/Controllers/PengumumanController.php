<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//memasukan model pada controller
use App\Pengumuman; 
use App\Http\Requests;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tampilkan semua menggunakan method all() atau get() atau paginate()
        /*
        $pengumuman = Pengumuman::all();
        return redirect('/admin/create')->with('message','Success .. ')
                                        ->with('alert','success');
                                        */
        //atau

        $pengumuman = Pengumuman::orderBy('id','desc')->paginate(3);
         return view('index')->with('pengumuman',$pengumuman);
    }
    public function pengumuman()
    {
        //tampilkan semua menggunakan method all() atau get() atau paginate()
        /*
        $pengumuman = Pengumuman::all();
        return redirect('/admin/create')->with('message','Success .. ')
                                        ->with('alert','success');
                                        */
        //atau

        $pengumuman = Pengumuman::orderBy('id','desc')->paginate(3);
        $no=1;
        return view('admin.pengumuman')->with('pengumuman',$pengumuman)->with('no',$no);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //memasukan semua inputan 
        /*
            ada 2 cara.. menggunakan cara manual menggunakan Eloquent ORM (lebih disarankan)
            atau menggunakan cara Query Builder mnggunakan method insert berbentuk array

            contoh A
        */
        $pengumuman = new Pengumuman; //deklarasikan objek pengumuman dari Class/odel Pengumuman
        $pengumuman->admin_id = \Sentinel::getUser()->id; //gunakan Model Sentinel agar dapat id dari orang yang login
        $pengumuman->judul    = $request->input('judul'); //$request->input mirip $_POST['']
        $pengumuman->isi      = $request->input('isi');

        if ($pengumuman->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/pengumuman')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/pengumuman/tambah')->with('message','Success .. ')
                                        ->with('alert','success');

        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //menampilkan data gunakan method find
    //     $pengumuman = Pengumuman::find($id); //cari id dari model Pengumuman
    //     return redirect('/admin/create')->with('message','Success .. ')
    //                                     ->with('alert','success')
    //                                     ->with('pengumuman',$pengumuman) //kirim data yang sudah di cari dengan menggunakan with
    //                                     ;
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //gunakan method find utntuk mencari id
    //     $pengumuman = Pengumuman::find($id);
    //     $pengumuman->judul = $request->input('judul'); //masukan dari post ke field judul
    //     $pengumuman->isi   = $request->input('isi');
    //     $pengumuman->save(); //save perubahan 
    //     return redirect('/admin/')->with('message','Success .. ')
    //                               ->with('alert','success');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //method hapus .. jika menggunakan softDeletes() data tidak benar2 dihapus .. tapi tidak ditampilkan daja
    //     //cari dengan method find
    //     $pengumuman = Pengumuman::find($id);
    //     $pengumuman->delete();
    //     return redirect('/admin/create')->with('message','Success .. ')
    //                                     ->with('alert','success');
    // }
}
