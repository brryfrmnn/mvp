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
                        @foreach ($jadwal as $data) 
                            <tr>
                            <td>{{$no++}} </td>
                            <td>{{$data->nama_mapel}}</td>
                            <td>{{$data->guru}}</td>
                            <td>
                            <form action="{{ URL('walikelas/nilai')}}" method="POST" accept-charset="utf-8">
                                {{csrf_field()}}

                                <a href="{{URL('walikelas/nilai/cek/pengetahuan')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Pengetahuan</a>&nbsp&nbsp&nbsp<a href="{{URL('walikelas/nilai/cek/keterampilan')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Keterampilan</a>&nbsp&nbsp&nbsp<a href="{{URL('walikelas/nilai/cek/sikap')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Sikap</a>&nbsp&nbsp&nbsp

                                <input type="hidden" name="guru_id" value="{{$data->guru_id}}" placeholder="">
                                <input type="hidden" name="siswa_id" value="{{$data->siswa_id}}" placeholder="">
                                <input type="hidden" name="mapel_id" value="{{$data->mapel_id}}" placeholder="">
                                <button class="btn btn-danger" type="submit"><i class=""></i> Proses Nilai</button>
                            </form>
                            </tr>
                        @endforeach                        
                    </table>
                    <div class="text-center">
                       {{--  {!! $pengumuman->links() !!} --}}
                    </div>
                    
</div>
@endsection