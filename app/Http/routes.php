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

//  Route::get('/', array('as' => 'home', function(){
//     return view('index');
// }));

/*=================================ROUTE UNTUK ADMIN =========================================*/
Route::group(['prefix' => 'admin'], function () {
	Route::get('/','AdminController@index');
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
		Route::get('tampil', 'AdminController@tampilMapel');
		Route::post('tampil', 'AdminController@storeMapel');
		Route::get('tambah', 'AdminController@tambahMapel');
		Route::get('{id}/edit', 'AdminController@editMapel');
		Route::post('{id}/update', 'AdminController@updateMapel');
		Route::post('{id}/delete', 'AdminController@hapusMapel');
		    
	});

	

	Route::get('profil', 'AdminController@adminProfil');
	Route::get('profil/edit', 'AdminController@editProfil');
	Route::get('jadwal/mengajar', 'AdminController@jadwalMengajar');
	Route::get('jadwal/tambah', 'AdminController@tambahJadwal');
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
		Route::get('input', 'GuruController@inputNilai'); //sudah
		Route::get('input/pengetahuan', 'GuruController@inputNilaiPengetahuan');//sudah
		Route::get('input/keterampilan', 'GuruController@inputNilaiKeterampilan') ;	//sudah
		Route::get('input/sikap', 'GuruController@inputNilaiSikap');	//sudah
		Route::get('edit', 'GuruController@editNilai');//sudah
		Route::get('edit/pengetahuan', 'GuruController@editNilaiPengetahuan');//sudah
		Route::get('edit/keterampilan', 'GuruController@editNilaiKeterampilan');//sudah	
		Route::get('edit/sikap', 'GuruController@editNilaiSikap');//sudah
			
	});
		Route::get('kelas/1/show', 'GuruController@kelasx');//sudah	
		Route::get('profil', 'GuruController@guruProfil');
		Route::get('profil/edit', 'GuruController@editProfil');
});
/*=================================ROUTE UNTUK Siswa =========================================*/
Route::group(['prefix' => 'siswa'], function () {
	Route::get('/','SiswaController@index');
	Route::group(['prefix' => 'lihatnilai'], function () {
		Route::get('semester/1/show', 'SiswaController@NilaiSemester1');
	});
	Route::get('profil', 'SiswaController@siswaProfil');
	Route::get('profil/edit', 'SiswaController@profilEdit');
});
/*=================================ROUTE UNTUK Wali Kelas =========================================*/
Route::group(['prefix' => 'walikelas'], function () {
	Route::get('/','WaliKelasController@index');
	Route::group(['prefix' => 'nilai'], function () {
		Route::get('kelola', 'WaliKelasController@kelolaNilai');	
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

