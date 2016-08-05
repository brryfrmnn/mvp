@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Lihat nilai siswa</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Lihat nilai siswa <button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button></h1>
        <table class="table table-hover table-bordered" style="text-align: center;">
    <thead>
        <tr >
            <th style="vertical-align: middle;     text-align: center;" rowspan="2">No</th>
            <th style="vertical-align: middle;     text-align: center;" rowspan="2">Mata Pelajaran</th>
            <th style="vertical-align: middle;     text-align: center;"colspan="2">Nilai Pengetahuan</th>
            <th style="vertical-align: middle;     text-align: center;"colspan="2">Nilai Keterampilan</th>
            <th style="vertical-align: middle;     text-align: center;"colspan="2">Nilai Sikap</th>
        </tr>
        <tr>
            <th style="vertical-align: middle;     text-align: center;">Angka (1-4)</th>
            <th style="vertical-align: middle;     text-align: center;">Predikat</th>
            <th style="vertical-align: middle;     text-align: center;">Angka (1-4)</th>
            <th style="vertical-align: middle;     text-align: center;">Predikat</th>
            <th style="vertical-align: middle;     text-align: center;">Dalam Mapel (SB/B/C/K)</th>
            <th style="vertical-align: middle;     text-align: center;">Antar Mapel</th>
            
            
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>KKPI</td>
            <td>4.00</td>
            <td>A</td>
            <td>2.00</td>
            <td>B-</td>
            <td>SB</td>
            <td>Sangat Baik</td>

        </tr>
        <tr>
            <td>2</td>
            <td>KKPI</td>
            <td>4.00</td>
            <td>A</td>
            <td>2.00</td>
            <td>B-</td>
            <td>SB</td>
            <td>Sangat Baik</td>

        </tr>
        <tr>
            <td>3</td>
            <td>KKPI</td>
            <td>4.00</td>
            <td>A</td>
            <td>2.00</td>
            <td>B-</td>
            <td>SB</td>
            <td>Sangat Baik</td>

        </tr>
    </tbody>
</table>

                    
</div>
@endsection