@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Cek nilai siswa</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Cek nilai siswa<a href="{{ URL('walikelas/nilai/kelola')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
                    <table class="table table-striped">

                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Nama Guru</th>
                            <th>Cek Nilai</th>
                            
                        </tr>  
                           {{--  @foreach ($ as $data) --}} 
                            <tr>
                            <td>{{-- {{$no++}} --}}</td>
                            <td>{{-- {{$data->nomor_induk}} --}}</td>
                            <td>{{-- {{$data->full_name}} --}}</td>
                            <td><a href="{{URL('')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Pengetahuan</a>&nbsp&nbsp&nbsp<a href="{{URL('')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Keterampilan</a>&nbsp&nbsp&nbsp<a href="{{URL('')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Sikap</a>&nbsp&nbsp&nbsp<a href="{{URL('')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Proses Nilai</a></td>
                            </tr>
                       {{--  @endforeach  --}}                       
                    </table>
                    <div class="text-center">
                       {{--  {!! $pengumuman->links() !!} --}}
                    </div>
                    
</div>
@endsection