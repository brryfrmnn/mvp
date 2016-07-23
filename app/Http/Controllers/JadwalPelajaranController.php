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
    	$jadwal_pelajaran = JadwalPelajaran::orderBy('id','asc')->paginate(4);
        $no=1;
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
}
