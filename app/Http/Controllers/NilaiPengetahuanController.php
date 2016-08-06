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
            $guru_id = \Sentinel::getUser()->id;

            $checkIfExists = NilaiPengetahuan::where('guru_id',$guru_id)
                                                ->where('siswa_id',$siswa_id)
                                                ->where('mapel_id',$mapel_id);
            if ($checkIfExists->count() > 0) {
                $nilai_pengetahuan = $checkIfExists->first();
                return view ('guru.inputnilaipengetahuan', compact('mapel_id','siswa_id','nilai_pengetahuan'));
            } else {
                return view ('guru.inputnilaipengetahuan', compact('mapel_id','siswa_id'));    
            }
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
        $validator = \Validator::make($request->all(), [
                'siswa_id' => 'required|integer',
                'mapel_id' => 'required|integer',
            ]);
        if ($validator->passes()) {
            $guru_id = \Sentinel::getUser()->id;
            $siswa_id = $request->siswa_id;
            $mapel_id = $request->mapel_id;

            $checkIfExists = NilaiPengetahuan::where('guru_id',$guru_id)
                                                ->where('siswa_id',$siswa_id)
                                                ->where('mapel_id',$mapel_id);
            if ($checkIfExists->count() > 0) {
                $nilai = $checkIfExists->first();
                $nilai_pengetahuan = NilaiPengetahuan::find($nilai->id); 
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
                    return redirect('guru/nilai/input/pengetahuan/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Success Nilai berhasil diubah.. ')
                                                ->with('alert','success');
                } else {
                    //jika berhasil arahkan ke halaman admin/pengumuman/tambah                
                   return redirect('guru/nilai/input/pengetahuan/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Gagal .. ')
                                                ->with('alert','danger');
                }
                return redirect('guru/nilai/input/pengetahuan/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Berhasil diubah.. ')
                                                ->with('alert','success');
            } else {
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
                   return redirect('guru/nilai/input/pengetahuan/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Gagal .. ')
                                                ->with('alert','danger');
                }
            }
        }
        else
        {         
            return 'Maaf terjadi kesalahan. '.$validator->errors();
        }
       
        	
    }
}
