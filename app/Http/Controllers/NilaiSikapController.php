<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;
use App\NilaiSikap;

class NilaiSikapController extends Controller
{
    //
    public function input($siswa_id,$mapel_id)
    {
    	
    	if (Sentinel::inRole('administrator')) 
    	{
    		return view ('guru.inputnilaisikap', compact('mapel_id','siswa_id'));
    	} 
    	else if (Sentinel::inRole('guru') )
    	{
    		return view ('guru.inputnilaisikap', compact('mapel_id','siswa_id'));
    	}
    	else if (Sentinel::inRole('wali_kelas') )
    	{
    		return view ('wali_kelas.inputnilaisikap', compact('mapel_id','siswa_id'));
    	}
    	else{
    		return view ('guru.inputnilaisikap', compact('mapel_id','siswa_id'));
    	}
    	
    }
    public function simpan(Request $request)
    {
    	$nilai_sikap = new NilaiSikap; 
        $nilai_sikap->guru_id = \Sentinel::getUser()->id;
    	$nilai_sikap->siswa_id = $request->input('siswa_id');
    	$nilai_sikap->mapel_id = $request->input('mapel_id');
   		$nilai_sikap->nob1 =$request->input('nob1');
   		$nilai_sikap->nob2 =$request->input('nob2');
   		$nilai_sikap->nob3 =$request->input('nob3');
   		$nilai_sikap->nob4 =$request->input('nob4');
   		$nilai_sikap->nob5 =$request->input('nob5');
   		$nilai_sikap->nob6 =$request->input('nob6');
   		$nilai_sikap->nob7 =$request->input('nob7');
   		$nilai_sikap->nob8 =$request->input('nob8');
   		$nilai_sikap->nob9 =$request->input('nob9');
   		$nilai_sikap->nob10 =$request->input('nob10');
   		$nilai_sikap->nob11 =$request->input('nob11');
   		$nilai_sikap->nob12 =$request->input('nob12');
   		$nilai_sikap->nds =$request->input('nds');
   		$nilai_sikap->nat =$request->input('nat');
   		$nilai_sikap->nj =$request->input('nj');
        if ($nilai_sikap->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            
            return redirect('guru/nilai/input/sikap/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            
            return redirect('')->with('message','Gagal .. ')
                                        ->with('alert','danger');

        }
    }
}
