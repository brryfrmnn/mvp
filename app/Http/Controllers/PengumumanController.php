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
    // public function store(Request $request)
    // {
    //     //memasukan semua inputan 
    //     /*
    //         ada 2 cara.. menggunakan cara manual menggunakan Eloquent ORM (lebih disarankan)
    //         atau menggunakan cara Query Builder mnggunakan method insert berbentuk array

    //         contoh A
    //     */
    //     $input = $request->all() //ambil semua data yang dari post / request
    //     $input['admin_id'] = \Sentinel::getUser()->id; //karena butuh admin_id jadi dibuat array pada var input
    //     $save = Pengumuman::insert($input);
    //     //jika berhasil arahkan ke halaman admin/create
    //     return redirect('/admin/create')->with('message','Success .. ')
    //                                     ->with('alert','success');

    // }

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
