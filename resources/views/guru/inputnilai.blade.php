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
                            <td>2</td>
                            <td>16150112</td>
                            <td>Berry Firmann</td>
                            <td><a href="{{URL('guru/nilai/input/pengetahuan')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Pengetahuan (belum)</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/nilai/input/keterampilan')}}" class="btn btn-primary"><i class="fa fa-trash"></i> Keterampilan (belum)</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/nilai/input/sikap')}}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Sikap (belum)</a></td>
                            </tr>

                            
                            
                        
                    </table>
                    
</div>
@endsection