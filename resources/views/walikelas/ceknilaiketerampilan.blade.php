@extends('layouts.layout')
@section('title')
  Ruang Wali Kelas
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Tampil nilai keterampilan</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Tampil nilai keterampilan<button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button></h1>
                    <table class="table table-striped">

                        <tr>
                            <th>No</th>
                            <th>Keterangan Nilai</th>
                            <th>Angka</th>
                        </tr>  
                             
                            <tr>
                            <td>1</td>
                            <td>Nilai Praktek 1</td>
                            <td>{{$nilai_keterampilan->npra1}}</td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Nilai Praktek 2</td>
                            <td>{{$nilai_keterampilan->npra2}}</td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>Nilai Praktek 3</td>
                            <td>{{$nilai_keterampilan->npra3}}</td>
                            </tr>
                            <tr>
                            <td>4</td>
                            <td>Nilai Praktek 4</td>
                            <td>{{$nilai_keterampilan->npra4}}</td>
                            </tr>
                            <tr>
                            <td>5</td>
                            <td>Nilai Praktek 5</td>
                            <td>{{$nilai_keterampilan->npra5}}</td>
                            </tr>
                            <tr>
                            <td>6</td>
                            <td>Nilai Praktek 6</td>
                            <td>{{$nilai_keterampilan->npra6}}</td>
                            </tr>
                            <tr>
                            <td>7</td>
                            <td>Nilai Praktek 7</td>
                            <td>{{$nilai_keterampilan->npra7}}</td>
                            </tr>
                            <tr>
                            <td>8</td>
                            <td>Nilai Praktek 8</td>
                            <td>{{$nilai_keterampilan->npra8}}</td>
                            </tr>

                            <tr>
                            <td>9</td>
                            <td>Nilai Projek</td>
                            <td>{{$nilai_keterampilan->nproy}}</td>
                            </tr>

                            <tr>
                            <td>10</td>
                            <td>Nilai Portofolio</td>
                            <td>{{$nilai_keterampilan->nport}}</td>
                            </tr>
                                               
                    </table>
                    {{-- <div class="text-center">
                        {!! $pengumuman->links() !!}
                    </div> --}}
                    
</div>
@endsection