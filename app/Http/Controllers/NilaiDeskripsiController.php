<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NilaiDeskripsiController extends Controller
{
    //
    public function input()
    {
    	return view('guru.inputnilaideskripsi');
    }
}
