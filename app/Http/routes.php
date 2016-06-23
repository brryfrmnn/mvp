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
	Route::get('profil', 'AdminController@adminProfil');
	Route::get('jadwal_mengajar', 'AdminController@jadwalMengajar');

	Route::get('tambahsiswa', function () {
	    return view('admin.tambahsiswa');
	});

	Route::get('tambahguru', function () {
	    return view('admin.tambahguru');
	});

	Route::get('tambahmapel', function () {
	    return view('admin.tambahmapel');
	});

	Route::get('tambahkelas', function () {
	    return view('admin.tambahkelas');
	});

	Route::get('tambahjadwal', function () {
	    return view('admin.tambahjadwal');
	});

	Route::get('editsiswa', function () {
	    return view('admin.editsiswa');
	});

	Route::get('editguru', function () {
	    return view('admin.editguru');
	});

	Route::get('editmapel', function () {
	    return view('admin.editmapel');
	});

	Route::get('editprofil', function () {
	    return view('admin.editprofil');
	});

	Route::get('detailsiswa', function () {
	    return view('admin.detailsiswa');
	});

	Route::get('detailguru', function () {
	    return view('admin.detailguru');
	});

	Route::get('detailkelas', function () {
	    return view('admin.detailkelas');
	});

	Route::group(['prefix' => 'data'], function () {
		Route::get('siswa', 'AdminController@dataSiswa');
		Route::get('guru', 'AdminController@dataGuru');
		Route::get('kelas', 'AdminController@dataKelas');
		Route::get('mapel', 'AdminController@dataMapel');
		    
	});
});

	

	

	




/*=================================ROUTE UNTUK guru =========================================*/
Route::group(['prefix' => 'guru'], function () {
	
		Route::get('profil', function () {
	    	return view('guru.profile');
		});

		Route::get('kelasx', function () {
			    return view('guru.kelasx');
		});

		Route::get('inputnilai', function () {
			    return view('guru.inputnilai');
		});

		Route::get('editnilai', function () {
			    return view('guru.editnilai');
		});

		Route::get('inputnilaipengetahuan', function () {
			    return view('guru.inputnilaipengetahuan');
		});

		Route::get('inputnilaiketerampilan', function () {
			    return view('guru.inputnilaiketerampilan');
		});	

		Route::get('inputnilaisikap', function () {
			    return view('guru.inputnilaisikap');
		});	

		Route::get('editnilaipengetahuan', function () {
			    return view('guru.editnilaipengetahuan');
		});

		Route::get('editnilaiketerampilan', function () {
			    return view('guru.editnilaiketerampilan');
		});	

		Route::get('editnilaisikap', function () {
			    return view('guru.editnilaisikap');
		});	

		Route::get('editprofil', function () {
			    return view('guru.editprofil');
		});		
	
});


/*=================================ROUTE UNTUK Siswa =========================================*/


Route::group(['prefix' => 'siswa'], function () {
	Route::group(['prefix' => 'lihatnilai'], function () {
		Route::get('semester1', function ()    {
		    return view ('siswa.lihatnilaisemester1');
		});
		Route::get('semester2', function ()    {
		    return view ('siswa.lihatnilaisemester2');
		});
		Route::get('semester3', function ()    {
		    return view ('siswa.lihatnilaisemester3');
		});
		Route::get('semester4', function ()    {
		    return view ('siswa.lihatnilaisemester4');
		});
		Route::get('semester5', function ()    {
		    return view ('siswa.lihatnilaisemester5');
		});
		Route::get('semester6', function ()    {
		    return view ('siswa.lihatnilaisemester6');
		});
	});
});

Route::get('profil', function () {
	    return view('siswa.profil');
	});
/*=================================ROUTE UNTUK Wali Kelas =========================================*/
Route::group(['prefix' => 'walikelas'], function () {
		Route::get('kelolanilai', function ()    {
		    return view ('walikelas.kelolanilai');
		});
		Route::get('profil', function () {
	    	return view('walikelas.profile');
		});

		Route::get('kelasx', function () {
			    return view('walikelas.kelasx');
		});

		Route::get('inputnilai', function () {
			    return view('walikelas.inputnilai');
		});

		Route::get('editnilai', function () {
			    return view('walikelas.editnilai');
		});

		Route::get('inputnilaipengetahuan', function () {
			    return view('walikelas.inputnilaipengetahuan');
		});

		Route::get('inputnilaiketerampilan', function () {
			    return view('walikelas.inputnilaiketerampilan');
		});	

		Route::get('inputnilaisikap', function () {
			    return view('walikelas.inputnilaisikap');
		});	

		Route::get('editnilaipengetahuan', function () {
			    return view('walikelas.editnilaipengetahuan');
		});

		Route::get('editnilaiketerampilan', function () {
			    return view('walikelas.editnilaiketerampilan');
		});	

		Route::get('editnilaisikap', function () {
			    return view('walikelas.editnilaisikap');
		});	

		Route::get('editprofil', function () {
			    return view('walikelas.editprofil');
		});		
		
});

