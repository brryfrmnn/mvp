<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;
use App\NilaiPengetahuan;

class NilaiPengetahuanController extends Controller
{
    //
    public function input($siswa_id,$mapel_id)
    {
    	
    	if (Sentinel::inRole('administrator')) 
    	{
    		return view ('guru.inputnilaipengetahuan', compact('mapel_id','siswa_id'));
    	} 
    	else if (Sentinel::inRole('guru') )
    	{
    		return view ('guru.inputnilaipengetahuan', compact('mapel_id','siswa_id'));
    	}
    	else if (Sentinel::inRole('wali_kelas') )
    	{
    		return view ('wali_kelas.inputnilaipengetahuan', compact('mapel_id','siswa_id'));
    	}
    	else{
    		return view ('guru.inputnilaipengetahuan', compact('mapel_id','siswa_id'));
    	}
    	
    }

    public function simpan(Request $request)
    {
    	$nilai_pengetahuan = new NilaiPengetahuan; 
    	$nilai_pengetahuan->guru_id = \Sentinel::getUser()->id;
    	$nilai_pengetahuan->siswa_id = $request->input('siswa_id');
    	$nilai_pengetahuan->mapel_id = $request->input('mapel_id');//$request->input mirip $_POST['']
   		$nilai_pengetahuan->nuh1 =$request->input('nuh1');
   		$nilai_pengetahuan->nuh2 =$request->input('nuh2');
   		$nilai_pengetahuan->nuh3 =$request->input('nuh3');
   		$nilai_pengetahuan->nuh4 =$request->input('nuh4');
   		$nilai_pengetahuan->nuts =$request->input('nuts');
   		$nilai_pengetahuan->nuas =$request->input('nuas');
   		$nilai_pengetahuan->ndes =$request->input('ndes');
        if ($nilai_pengetahuan->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            
            return redirect('guru/nilai/input/pengetahuan/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            
            return redirect('')->with('message','Gagal .. ')
                                        ->with('alert','danger');

        }
    }
}
