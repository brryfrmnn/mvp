@extends('layouts.master')

@section('Judul', 'Halaman pembuka')

@section('sidebar')
@parent   

    <p>ini anak untuk sidebar</p>
@endsection

@section('content')
    <p>ini adalah isi</p>
@endsection