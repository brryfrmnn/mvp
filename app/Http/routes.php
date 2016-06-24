<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('welcome', function () {
    return view('welcome');
});


Route::get('credit', function () {
    return view('credit');
});

Route::get('pesan', function () {
    return view('pesan');
});

Route::get('sapa', function () {
    return view('sapa');
});

Route::post('sapa/kirim', function () {
    return view('sapa_kirim');
});

Route::get('templating', function () {
});

Route::get('templating2', function () {
    return view('child');
});

Route::get('templating3', function () {
    return view('anak');
});




Route::get('down', function () {
    Artisan::call('down');
    return view('index');
});

Route::get('up', function () {
    Artisan::call('up');
    return view('index');
});

 Route::get('/', array('as' => 'home', function(){
    return view('index');
}));

/*=================================ROUTE UNTUK ADMIN =========================================*/
Route::group(['prefix' => 'admin'], function () {
	Route::group(['prefix' => 'data'], function () {
		Route::get('siswa', 'AdminController@dataSiswa');
		Route::get('guru', 'AdminController@dataGuru');
		Route::get('kelas', 'AdminController@dataKelas');
		Route::get('mapel', 'AdminController@dataMapel');
		    
	});
	Route::group(['prefix' => 'siswa'], function () {
		Route::get('tambah', 'AdminController@tambahSiswa'); 
		Route::get('edit', 'AdminController@editSiswa'); 
		Route::get('hapus', 'AdminController@detailSiswa'); 
		Route::get('detail', 'AdminController@detailSiswa');
		    
	});
	Route::group(['prefix' => 'guru'], function () {
		Route::get('tambah', 'AdminController@tambahGuru');
		Route::get('edit', 'AdminController@editGuru');
		Route::get('hapus', 'AdminController@hapusGuru');
		Route::get('detail', 'AdminController@detailGuru');
		    
	});
	Route::group(['prefix' => 'mapel'], function () {
		Route::get('tambah', 'AdminController@tambahMapel');
		Route::get('edit', 'AdminController@editMapel');
		    
	});

	Route::group(['prefix' => 'kelas'], function () {
		Route::get('tambah', 'AdminController@tambahKelas');
		Route::get('detail', 'AdminController@detailKelas');
		    
	});

	Route::get('profil', 'AdminController@adminProfil');
	Route::get('profil/edit', 'AdminController@editProfil');
	Route::get('jadwal/mengajar', 'AdminController@jadwalMengajar');
	Route::get('jadwal/tambah', 'AdminController@tambahJadwal');
	
});
/*=================================ROUTE UNTUK guru =========================================*/
Route::group(['prefix' => 'guru'], function () {
	Route::group(['prefix' => 'nilai'], function () {
		Route::get('kelola', 'GuruController@kelolaNilai');	
		Route::get('input', 'GuruController@inputNilai');
		Route::get('input/pengetahuan', 'GuruController@inputNilaiPengetahuan');
		Route::get('input/keterampilan', 'GuruController@inputNilaiKeterampilan') ;	
		Route::get('input/sikap', 'GuruController@inputNilaiSikap');	
		Route::get('edit', 'GuruController@editNilai');
		Route::get('edit/pengetahuan', 'GuruController@editNilaiPengetahuan');
		Route::get('edit/keterampilan', 'GuruController@editNilaiKeterampilan');	
		Route::get('edit/sikap', 'GuruController@editNilaiSikap');
			
	});
		Route::get('kelas/1/show', 'GuruController@kelasx');	
});
/*=================================ROUTE UNTUK Siswa =========================================*/
Route::group(['prefix' => 'siswa'], function () {
	Route::group(['prefix' => 'lihatnilai'], function () {
		Route::get('semester/1/show', 'SiswaController@NilaiSemester1');
	});
	Route::get('profil', 'SiswaController@siswaProfil');
});
/*=================================ROUTE UNTUK Wali Kelas =========================================*/
Route::group(['prefix' => 'walikelas'], function () {
	Route::group(['prefix' => 'nilai'], function () {
		Route::get('kelola', 'GuruController@kelolaNilai');	
		Route::get('input', 'GuruController@inputNilai');
		Route::get('input/pengetahuan', 'GuruController@inputNilaiPengetahuan');
		Route::get('input/keterampilan', 'GuruController@inputNilaiKeterampilan') ;	
		Route::get('input/sikap', 'GuruController@inputNilaiSikap');	
		Route::get('edit', 'GuruController@editNilai');
		Route::get('edit/pengetahuan', 'GuruController@editNilaiPengetahuan');
		Route::get('edit/keterampilan', 'GuruController@editNilaiKeterampilan');	
		Route::get('edit/sikap', 'GuruController@editNilaiSikap');	
	});
		
		Route::get('profil', 'WaliKelasController@guruProfil');
		Route::get('profil/edit', 'WaliKelasController@editProfil');
		
			
		
});

