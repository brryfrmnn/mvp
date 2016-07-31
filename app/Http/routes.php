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
//========================CENTAUR CARTALYST SENTINEL==================
// Authorization
Route::get('/login', ['as' => 'auth.login.form', 'uses' => 'Auth\SessionController@getLogin']);
Route::post('/login', ['as' => 'auth.login.attempt', 'uses' => 'Auth\SessionController@postLogin']);
Route::get('/logout', ['as' => 'auth.logout', 'uses' => 'Auth\SessionController@getLogout']);

// Registration
Route::get('register', ['as' => 'auth.register.form', 'uses' => 'Auth\RegistrationController@getRegister']);
Route::post('register', ['as' => 'auth.register.attempt', 'uses' => 'Auth\RegistrationController@postRegister']);

// Activation
Route::get('activate/{code}', ['as' => 'auth.activation.attempt', 'uses' => 'Auth\RegistrationController@getActivate']);
Route::get('resend', ['as' => 'auth.activation.request', 'uses' => 'Auth\RegistrationController@getResend']);
Route::post('resend', ['as' => 'auth.activation.resend', 'uses' => 'Auth\RegistrationController@postResend']);

// Password Reset
Route::get('password/reset/{code}', ['as' => 'auth.password.reset.form', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset/{code}', ['as' => 'auth.password.reset.attempt', 'uses' => 'Auth\PasswordController@postReset']);
Route::get('password/reset', ['as' => 'auth.password.request.form', 'uses' => 'Auth\PasswordController@getRequest']);
Route::post('password/reset', ['as' => 'auth.password.request.attempt', 'uses' => 'Auth\PasswordController@postRequest']);

// Users
Route::resource('users', 'UserController');

// Roles
Route::resource('roles', 'RoleController');

// Dashboard
Route::get('/dashboard', ['as' => 'dashboard', 'uses' => function() {
    return view('centaur.dashboard');
    // return view('index');
}]);
Route::get('/', ['as' => 'home', 'uses' => 'PengumumanController@index']);

//=======================END ========================================



//  Route::get('/', array('as' => 'home', function(){
//     return view('index');
// }));

/*=================================ROUTE UNTUK ADMIN =========================================*/
Route::group(['prefix' => 'admin'], function () {
	Route::get('/','AdminController@index');
	Route::get('jadwal/tambah', 'JadwalPelajaranController@tambah');
	Route::post('jadwal', 'JadwalPelajaranController@simpan');
	Route::get('jadwal', 'JadwalPelajaranController@index');
	Route::get('jadwal/{id}/edit', 'JadwalPelajaranController@edit');
	Route::post('jadwal/{id}/update', 'JadwalPelajaranController@update');
	Route::post('jadwal/{id}/delete', 'JadwalPelajaranController@hapus');
	Route::group(['prefix' => 'data'], function () {
		Route::get('siswa', 'AdminController@dataSiswa');
		Route::get('guru', 'AdminController@dataGuru');
		Route::group(['prefix' => 'kelasjurusan'], function () {
			Route::get('/', 'KelasJurusanController@index');
			Route::post('/', 'KelasJurusanController@simpan');
			Route::get('tampil', 'KelasJurusanController@tampil');
			Route::get('tambah', 'KelasJurusanController@tambah');
			Route::get('detail', 'KelasJurusanController@detail');
			    
		});

		Route::group(['prefix' => 'kelas'], function () {
			Route::get('/', 'KelasController@index');
			Route::post('/', 'KelasController@simpan');
			Route::get('tampil', 'KelasController@tampil');
			Route::get('tambah', 'KelasController@tambah');
			Route::get('{id}/edit', 'KelasController@edit');
			Route::post('{id}/update', 'KelasController@update');
			Route::post('{id}/delete', 'KelasController@hapus');
			
			    
		});

		Route::group(['prefix' => 'jurusan'], function () {
			Route::get('/', 'JurusanController@index');
			Route::post('/', 'JurusanController@simpan');
			Route::get('tampil', 'JurusanController@tampil');
			Route::get('tambah', 'JurusanController@tambah');
			Route::get('/{id}/edit', 'JurusanController@edit');
			Route::post('{id}/update', 'JurusanController@update');
			Route::post('{id}/delete', 'JurusanController@hapus');
			
			    
		});
		Route::get('mapel', 'AdminController@dataMapel');
		    
	});
	Route::group(['prefix' => 'siswa'], function () {
		Route::get('/', 'SiswaController@tampil');
		Route::post('/', 'SiswaController@simpan');
		Route::get('tambah', 'SiswaController@tambah'); 
		Route::get('{id}/edit', 'SiswaController@edit'); 
		Route::post('{id}/update', 'SiswaController@update');
		Route::post('{id}/delete', 'SiswaController@hapus');
		Route::get('detail', 'AdminController@detailSiswa');
		
		    
	});
	Route::group(['prefix' => 'guru'], function () {
		Route::get('tambah', 'GuruController@tambah'); 
		Route::post('/', 'GuruController@simpan');
		Route::get('{id}/edit', 'GuruController@edit');
		Route::post('{id}/update', 'GuruController@update');
		Route::post('{id}/delete', 'GuruController@hapus');
		Route::get('detail', 'AdminController@detailGuru');
		Route::post('/wali','AdminController@wali');
		    
	});
	Route::group(['prefix' => 'mapel'], function () {
		Route::get('tampil', 'AdminController@tampilMapel');
		Route::post('tampil', 'AdminController@storeMapel');
		Route::get('tambah', 'AdminController@tambahMapel');
		Route::get('{id}/edit', 'AdminController@editMapel');
		Route::post('{id}/update', 'AdminController@updateMapel');
		Route::post('{id}/delete', 'AdminController@hapusMapel');
		  
	});
	Route::group(['prefix' => 'walikelas'], function () {
		Route::get('kelola', 'AdminController@indexWaliKelas');
		Route::post('/', 'AdminController@setWaliKelas');		  
	});

	

	Route::get('profil', 'AdminController@adminProfil');
	Route::get('profil/edit', 'AdminController@editProfil');
	Route::get('pengumuman', 'PengumumanController@pengumuman');
	Route::get('pengumuman/tambah', 'PengumumanController@tambahPengumuman');
	Route::get('pengumuman/{id}/edit', 'PengumumanController@edit');
	Route::get('pengumuman/{id}/detail', 'PengumumanController@detail');
	Route::get('pengumuman', 'AdminController@pengumuman');
	//===========================================================
	Route::post('pengumuman', 'PengumumanController@store'); //Pengumuman berbentuk POST, di view pas bikin FORM. actionnya ke "route('pengumuman')"
	//===========================================================
	Route::post('pengumuman/{id}/update', 'PengumumanController@update');
	Route::post('pengumuman/{id}/delete', 'PengumumanController@hapus');
	
});
/*=================================ROUTE UNTUK guru =========================================*/
Route::group(['prefix' => 'guru'], function () {
	Route::get('/','GuruController@index');
	Route::group(['prefix' => 'nilai'], function () {
		Route::get('{kelasjurusan_id}/{mapel_id}/input', 'NilaiController@halamanInputNilai'); //sudah

		Route::get('input/pengetahuan/{siswa_id}/{mapel_id}', 'NilaiPengetahuanController@input');//sudah
		Route::post('pengetahuan', 'NilaiPengetahuanController@simpan');

		Route::get('input/keterampilan/{siswa_id}/{mapel_id}', 'NilaiKeterampilanController@input');//dah
		Route::post('keterampilan', 'NilaiKeterampilanController@simpan') ;

		Route::get('input/sikap/{siswa_id}/{mapel_id}', 'NilaiSikapController@input');	//sudah
		Route::post('sikap', 'NilaiSikapController@simpan');

		Route::get('input/deskripsi', 'NilaiDeskripsiController@input');	//sudah
		Route::post('deskripsi', 'NilaiDeskripsiController@simpan');
		
		Route::get('{id}/edit', 'NilaiController@halamanEditNilai'); //sudah
		Route::get('pengetahuan/edit', 'NilaiPengetahuanController@edit');//sudah
		Route::get('keterampilan/input', 'NilaiKeterampilanController@edit') ;	//sudah
		Route::get('sikap/input', 'NilaiSikapController@edit');	//sudah
		Route::post('proses', 'NilaiController@proses');	//sudah

		
	});
		Route::get('kelas/{id}/show', 'JadwalPelajaranController@tampilJadwalKelas');//sudah	
		Route::get('{id}/profil', 'GuruController@profil');
		Route::get('profil/edit', 'GuruController@editProfil');
});
/*=================================ROUTE UNTUK Siswa =========================================*/
Route::group(['prefix' => 'siswa'], function () {
	Route::get('/','SiswaController@index');
	Route::group(['prefix' => 'lihatnilai'], function () {
		Route::get('semester/1/show', 'SiswaController@NilaiSemester1');
		Route::get('tampil', 'NilaiController@tampil');
	});
	Route::get('profil', 'SiswaController@siswaProfil');
	Route::get('profil/edit', 'SiswaController@profilEdit');
});
/*=================================ROUTE UNTUK Wali Kelas =========================================*/
Route::group(['prefix' => 'walikelas'], function () {
	Route::get('/','WaliKelasController@index');
	Route::group(['prefix' => 'nilai'], function () {
		Route::get('{kelasjurusan_id}/{mapel_id}/kelola', 'WaliKelasController@halamanKelolaNilai');/*{kelasjurusan_id}/{mapel_id}/*/
		Route::get('cek', 'WaliKelasController@cek');
		/*Route::get('kelola', '@kelolaNilai');
		Route::get('cek', '@kelolaNilai');	
		Route::get('input', 'GuruController@inputNilai');
		Route::get('input/pengetahuan', 'GuruController@inputNilaiPengetahuan');
		Route::get('input/keterampilan', 'GuruController@inputNilaiKeterampilan') ;	
		Route::get('input/sikap', 'GuruController@inputNilaiSikap');	
		Route::get('edit', 'GuruController@editNilai');
		Route::get('edit/pengetahuan', 'GuruController@editNilaiPengetahuan');
		Route::get('edit/keterampilan', 'GuruController@editNilaiKeterampilan');	
		Route::get('edit/sikap', 'GuruController@editNilaiSikap');	*/
	});
		
		Route::get('profil', 'WaliKelasController@guruProfil');
		Route::get('profil/edit', 'WaliKelasController@editProfil');
		
			
		
});

