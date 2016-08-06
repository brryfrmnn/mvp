<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests;
use App\NilaiKeterampilan;

class NilaiKeterampilanController extends Controller
{
    //

    public function input($siswa_id,$mapel_id)
    {
    	
    	if (Sentinel::inRole('administrator')) 
    	{
    		return view ('guru.inputnilaiketerampilan', compact('mapel_id','siswa_id'));
    	} 
    	else if (Sentinel::inRole('guru') )
    	{
        $guru_id = \Sentinel::getUser()->id;
        $checkIfExists = NilaiKeterampilan::where('guru_id',$guru_id)
                                            ->where('siswa_id',$siswa_id)
                                            ->where('mapel_id',$mapel_id);
        if ($checkIfExists->count() > 0) {
            $nilai_keterampilan = $checkIfExists->first();
            return view ('guru.inputnilaiketerampilan', compact('mapel_id','siswa_id','nilai_keterampilan'));
        } else {
            return view ('guru.inputnilaiketerampilan', compact('mapel_id','siswa_id'));
        }
    	}
    	else if (Sentinel::inRole('wali_kelas') )
    	{
    		return view ('wali_kelas.inputnilaiketerampilan', compact('mapel_id','siswa_id'));
    	}
    	else{
    		return view ('guru.inputnilaiketerampilan', compact('mapel_id','siswa_id'));
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

            $checkIfExists = NilaiKeterampilan::where('guru_id',$guru_id)
                                                ->where('siswa_id',$siswa_id)
                                                ->where('mapel_id',$mapel_id);
            if ($checkIfExists->count() > 0) {
                $nilai = $checkIfExists->first();
                $nilai_keterampilan = NilaiKeterampilan::find($nilai->id); 
                $nilai_keterampilan->guru_id = \Sentinel::getUser()->id;
                $nilai_keterampilan->siswa_id = $request->input('siswa_id');
                $nilai_keterampilan->mapel_id = $request->input('mapel_id');
                $nilai_keterampilan->npra1 =$request->input('npra1');
                $nilai_keterampilan->npra2 =$request->input('npra2');
                $nilai_keterampilan->npra3 =$request->input('npra3');
                $nilai_keterampilan->npra4 =$request->input('npra4');
                $nilai_keterampilan->npra5 =$request->input('npra5');
                $nilai_keterampilan->npra6 =$request->input('npra6');
                $nilai_keterampilan->npra7 =$request->input('npra7');
                $nilai_keterampilan->npra8 =$request->input('npra8');
                $nilai_keterampilan->nproy =$request->input('nproy');
                $nilai_keterampilan->nport =$request->input('nport');
                if ($nilai_keterampilan->save()) { //jika save berhasil
                    //jika berhasil arahkan ke halaman admin/pengumuman
                    return redirect('guru/nilai/input/keterampilan/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Success Nilai berhasil diubah.. ')
                                                ->with('alert','success');
                } else {
                    //jika berhasil arahkan ke halaman admin/pengumuman/tambah                
                   return redirect('guru/nilai/input/keterampilan/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Gagal .. ')
                                                ->with('alert','danger');
                }
                return redirect('guru/nilai/input/keterampilan/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Berhasil diubah.. ')
                                                ->with('alert','success');
            } else {
                $nilai_keterampilan = new NilaiKeterampilan; 
                $nilai_keterampilan->guru_id = \Sentinel::getUser()->id;
                $nilai_keterampilan->siswa_id = $request->input('siswa_id');
                $nilai_keterampilan->mapel_id = $request->input('mapel_id');
                $nilai_keterampilan->npra1 =$request->input('npra1');
                $nilai_keterampilan->npra2 =$request->input('npra2');
                $nilai_keterampilan->npra3 =$request->input('npra3');
                $nilai_keterampilan->npra4 =$request->input('npra4');
                $nilai_keterampilan->npra5 =$request->input('npra5');
                $nilai_keterampilan->npra6 =$request->input('npra6');
                $nilai_keterampilan->npra7 =$request->input('npra7');
                $nilai_keterampilan->npra8 =$request->input('npra8');
                $nilai_keterampilan->nproy =$request->input('nproy');
                $nilai_keterampilan->nport =$request->input('nport');
                if ($nilai_keterampilan->save()) { //jika save berhasil
                    //jika berhasil arahkan ke halaman admin/pengumuman
                    return redirect('guru/nilai/input/keterampilan/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Success .. ')
                                                ->with('alert','success');
                } else {
                    //jika berhasil arahkan ke halaman admin/pengumuman/tambah                
                   return redirect('guru/nilai/input/keterampilan/'.$request->input('siswa_id').'/'.$request->input('mapel_id'))->with('message','Gagal .. ')
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
