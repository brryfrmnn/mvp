@extends('layouts.layout')
@section('title')
  Ruang Wali Kelas
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
    
    
        <li class="active">Tampil nilai pengetahuan</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Tampil Nilai Pengetahuan<button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button></h1>
                    <table class="table table-striped">

                        <tr>
                            <th>No</th>
                            <th>Keterangan Nilai</th>
                            <th>Angka</th>
                            
                            
                        </tr>  
                            
                            <tr>
                                <td>1</td>
                                <td>Nilai Ulangan Harian 1</td>
                                <td>{{$nilai_pengetahuan->nuh1}}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nilai Ulangan Harian 2</td>
                                <td>{{$nilai_pengetahuan->nuh2}}</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Nilai Ulangan Harian 3</td>
                                <td>{{$nilai_pengetahuan->nuh3}}</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Nilai Ulangan Harian 4</td>
                                <td>{{$nilai_pengetahuan->nuh4}}</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Nilai UTS</td>
                                <td>{{$nilai_pengetahuan->nuts}}</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Nilai UAS</td>
                                <td>{{$nilai_pengetahuan->nuas}}</td>
                            </tr>
                                            
                    </table>
                    
</div>
@endsection