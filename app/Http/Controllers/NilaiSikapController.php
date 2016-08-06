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
        $guru_id = \Sentinel::getUser()->id;

        $checkIfExists = NilaiSikap::where('guru_id',$guru_id)
                                            ->where('siswa_id',$siswa_id)
                                            ->where('mapel_id',$mapel_id);
        if ($checkIfExists->count() > 0) {
            $nilai_sikap = $checkIfExists->first();
            return view ('guru.inputnilaisikap', compact('mapel_id','siswa_id','nilai_sikap'));
        } else {
            return view ('guru.inputnilaisikap', compact('mapel_id','siswa_id'));
        }
    		
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
    	
       $validator = \Validator::make($request->all(), [
                'siswa_id' => 'required|integer',
                'mapel_id' => 'required|integer',
            ]);
        if ($validator->passes()) {
            $guru_id = \Sentinel::getUser()->id;
            $siswa_id = $request->siswa_id;
            $mapel_id = $request->mapel_id;

            $checkIfExists = NilaiSikap::where('guru_id',$guru_id)
                                                ->where('siswa_id',$siswa_id)
                                                ->where('mapel_id',$mapel_id);
            if ($checkIfExists->count() > 0) {
                $nilai = $checkIfExists->first();
                $nilai_sikap = NilaiSikap::find($nilai->id); 
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
                    return redirect('guru/nilai/input/sikap/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Success Nilai berhasil diubah.. ')
                                                ->with('alert','success');
                } else {
                    //jika berhasil arahkan ke halaman admin/pengumuman/tambah                
                   return redirect('guru/nilai/input/sikap/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Gagal .. ')
                                                ->with('alert','danger');
                }
                return redirect('guru/nilai/input/sikap/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Berhasil diubah.. ')
                                                ->with('alert','success');
            } else {
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
                   return redirect('guru/nilai/input/sikap/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Gagal .. ')
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
