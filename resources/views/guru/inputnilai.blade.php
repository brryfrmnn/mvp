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
                            <th>Input Nilai</th>
                            
                        </tr>  
                            @foreach ($user as $data) 
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nomor_induk}}</td>
                            <td>{{$data->full_name}}</td>
                            <td><a href="{{URL('guru/nilai/input/pengetahuan',[$data->id,$mapel_id])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Pengetahuan</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/nilai/input/keterampilan',[$data->id,$mapel_id])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Keterampilan</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/nilai/input/sikap',[$data->id,$mapel_id])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Sikap</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/nilai/input/deskripsi')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Deskripsi (belum)</a>&nbsp&nbsp&nbsp
                            <form action="{{ URL('guru/nilai/proses')}}" method="POST" accept-charset="utf-8">
                            {{csrf_field()}}
                            <input type="hidden" name="guru_id" value="15" placeholder="">
                            <input type="hidden" name="siswa_id" value="{{$data->id}}" placeholder="">
                            <input type="hidden" name="mapel_id" value="{{$mapel_id}}" placeholder="">
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Proses</button>
                            </form>
                            </td>
                            </tr>
                        @endforeach

                            
                            
                        
                    </table>
                    
</div>
@endsection