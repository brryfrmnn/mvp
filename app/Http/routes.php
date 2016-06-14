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
		Route::get('siswa', function ()    {
		    return 'belum adaan :v';
		});
		Route::get('guru', function ()    {
		    return 'belum adaan :v';
		});
		Route::get('kelas', function ()    {
		    return 'belum adaan :v';
		});

	});

	Route::get('profil', function () {
	    return view('admin.profile');
	});
});


/*=================================ROUTE UNTUK ADMIN =========================================*/
