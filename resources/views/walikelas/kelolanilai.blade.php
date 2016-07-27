@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Kelola nilai siswa</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Kelola nilai siswa</h1>
                    <table class="table table-striped">

                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                            
                        </tr>  
                            @foreach ($ as $data) 
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nomor_induk}}</td>
                            <td>{{$data->full_name}}</td>
                            <td><a href="{{URL('')}}" class="btn btn-orange"><i class="glyphicon glyphicon-edit"></i>Kelola Nilaix</a></td>
                            </tr>
                        @endforeach

                            
                            
                        
                    </table>
                    
</div>
@endsection