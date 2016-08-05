@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li> 
        <li class="active">Input nilai siswa</li>
    </ul>
</div>
    <div class="container">
                    <h1 class="page-header">Input nilai siswa <a href="{{ URL('guru/kelas/1/show')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
                    <h3>Kelas       : x</h3>
                    <h3>Jurusan     : Teknik Ilmu Komputer</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Input Nilai</th> 
                            </tr>       
                            <tr>
                                <td>1</td>
                                <td>16150111</td>
                                <td>Sari Susanti</td>
                                <td><a href="{{URL('guru/nilai/edit/pengetahuan')}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Pengetahuan (sudah)</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/nilai/edit/keterampilan')}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Keterampilan (sudah)</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/nilai/edit/sikap')}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Sikap (sudah)</a></td>
                            </tr>
                        </table>
    </div>
@endsection