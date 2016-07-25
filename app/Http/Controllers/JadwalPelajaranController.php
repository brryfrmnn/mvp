<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\KelasJurusan;
use App\Mapel;
use App\JadwalPelajaran;
use Sentinel;

class JadwalPelajaranController extends Controller
{
    public function index()
    {
    	$jadwal_pelajaran = JadwalPelajaran::with('guru')->orderBy('id','asc')->paginate(4);
        $no=1;
        // dd($jadwal_pelajaran);
        return view('admin.jadwal_pelajaran', compact('jadwal_pelajaran', 'no'));
    }

    public function tambah()
    {
    	$mapel = Mapel::orderBy('nama','asc')->get();
    	$kelas_jurusan = KelasJurusan::orderBy('id','asc')->get();
    	$role = Sentinel::findRoleBySlug('guru');// cari dulu user dengan role guru
    	$guru = $role->users()->with('roles')->get(); //tampilkan semua user yg rolenya guru
    	return view('admin.tambahjadwal', compact('mapel','kelas_jurusan', 'guru'));
    }

    public function edit($id)
    {
    	$jadwal_pelajaran = JadwalPelajaran::find($id);
    	$mapel = Mapel::orderBy('nama','asc')->get();
    	$kelas_jurusan = KelasJurusan::orderBy('id','asc')->get();
    	$role = Sentinel::findRoleBySlug('guru');// cari dulu user dengan role guru
    	$guru = $role->users()->with('roles')->get(); //tampilkan semua user yg rolenya guru
    	return view('admin.editjadwalpelajaran', compact('jadwal_pelajaran','mapel','kelas_jurusan', 'guru')); 
    }

    public function update(Request $request,$id)
    {
    	$jadwal_pelajaran = JadwalPelajaran::find($id);
    	$jadwal_pelajaran->admin_id = \Sentinel::getUser()->id;
    	$jadwal_pelajaran->guru_id = $request->input('nip');
   		$jadwal_pelajaran->kelasjurusan_id = $request->input('kelasjurusan_id');
   		$jadwal_pelajaran->mapel_id = $request->input('mapel_id');
   		$jadwal_pelajaran->semester = $request->input('semester');
   		$jadwal_pelajaran->tahun_ajaran = $request->input('tahun_ajaran');
   		if ($jadwal_pelajaran->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/jadwal')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/jadwal/tambah')->with('message','Gagal .. ')
                                        ->with('alert','danger');

        }
    }
    public function tampil($id)
    {
    	
    }

    public function simpan(Request $request)
    {
    	$jadwal_pelajaran = new JadwalPelajaran;
    	$jadwal_pelajaran->admin_id = \Sentinel::getUser()->id;
    	$jadwal_pelajaran->guru_id = $request->input('nip');
   		$jadwal_pelajaran->kelasjurusan_id = $request->input('kelasjurusan_id');
   		$jadwal_pelajaran->mapel_id = $request->input('mapel_id');
   		$jadwal_pelajaran->semester = $request->input('semester');
   		$jadwal_pelajaran->tahun_ajaran = $request->input('tahun_ajaran');
   		if ($jadwal_pelajaran->save()) { //jika save berhasil
            //jika berhasil arahkan ke halaman admin/pengumuman
            return redirect('/admin/jadwal')->with('message','Success .. ')
                                        ->with('alert','success');

        } else {
            //jika berhasil arahkan ke halaman admin/pengumuman/tambah
            return redirect('/admin/jadwal/tambah')->with('message','Gagal .. ')
                                        ->with('alert','danger');

        }

    }

    public function hapus($id)
    {
    	# code...
    }

    public function tampilJadwalKelas($id)
    {
    	$guru_id = \Sentinel::getUser()->id;
    	// bagaimana kita bisa tahu id kelasjurusan yang memiliki kelas x?
    	//  bisa pake iner join kalo di native ?
    	// kalo di Eloquen pake where function
    	// $kelasjurusan = KelasJurusan::where('kelas',function($query){
    	// 	$query->where('kode','=','1');
    	// })->get();

    	// $kelasjurusan_id = $kelasjurusan_id;
    	$tahun_ajaran = '2016';

    	$jadwal_pelajaran = JadwalPelajaran::where('guru_id', '=', $guru_id)
    										->whereHas('kelasjurusan',function($query) use ($id){
    											$query->whereHas('kelas',function($query2) use ($id){
    												$query2->where('kode','=',$id);
    											});
    										})
    										->where('tahun_ajaran', '=', $tahun_ajaran)
    										->orderBy('id', 'asc')
    										->paginate(5);
    	$no=1;
    	return view('guru.kelasx',  compact('jadwal_pelajaran', 'no'));  	
    }
}
