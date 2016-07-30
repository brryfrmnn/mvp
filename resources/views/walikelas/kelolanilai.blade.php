@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Input nilai siswa</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Input nilai siswa <a href="{{ URL('guru/kelas/1/show')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
                    
                    <h3>Kelas       : {{$kelas_jurusan->kelas->nama}}</h3>                   
                    <h3>Jurusan      :{{$kelas_jurusan->jurusan->nama}}</h3>
                    
                    <table class="table table-striped">

                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                            
                        </tr>  
                            @foreach ($user as $data) 
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nomor_induk}}</td>
                            <td>{{$data->full_name}}</td>
                            <td><a href="{{URL('guru/nilai/input/pengetahuan',[$data->id,$mapel_id])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Kelola Nilai</a>
                            </td>
                            </tr>
                        @endforeach

                            
                            
                        
                    </table>
                    
</div>
@endsection