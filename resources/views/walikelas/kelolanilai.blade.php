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
                    
                    <h3>Kelas       : {{$kelas_jurusan->kelas->nama}}</h3>                
                    <h3>Jurusan     : {{$kelas_jurusan->jurusan->nama}}</h3> 
                    
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
                            <td><a href="{{URL('walikelas/nilai/cek?siswa_id='.$data->id.'&semester='.$data->siswa->semester.'&tahun_ajaran='.$data->siswa->tahun_ajar)}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Kelola Nilai</a>
                            
                            </td>
                            </tr>
                            {{-- {{URL('guru/nilai/input/pengetahuan',[$data->id,$mapel_id])}} --}}
                       @endforeach 

                            
                            
                        
                    </table>
                    
</div>
@endsection