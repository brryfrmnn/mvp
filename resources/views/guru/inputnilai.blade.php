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

                    <h1 class="page-header">Input nilai siswa <a href="{{ URL('guru/kelasx')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
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
                            <td>1</td>
                            <td>16150111</td>
                            <td>Sari Susanti</td>
                            <td><a href="{{URL('guru/editnilaipengetahuan')}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Pengetahuan (sudah)</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/editnilaiketerampilan')}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Keterampilan (sudah)</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/editnilaisikap')}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Sikap (sudah)</a></td>
                            </tr>

                            <tr>
                            <td>2</td>
                            <td>16150112</td>
                            <td>Berry Firmann</td>
                            <td><a href="{{URL('guru/inputnilaipengetahuan')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Pengetahuan (belum)</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/inputnilaiketerampilan')}}" class="btn btn-primary"><i class="fa fa-trash"></i> Keterampilan (belum)</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/inputnilaisikap')}}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Sikap (belum)</a></td>
                            </tr>

                            <tr>
                            <td>3</td>
                            <td>16150113</td>
                            <td>Ina Najiyah</td>
                            <td><a href="" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Pengetahuan (belum)</a>&nbsp&nbsp&nbsp<a href="hapus-siswa.php" class="btn btn-primary"><i class="fa fa-trash"></i> Keterampilan (belum)</a>&nbsp&nbsp&nbsp<a href="" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Sikap (belum)</a></td>
                            </tr>

                            <tr>
                            <td>4</td>
                            <td>16150114</td>
                            <td>asri wahyuni</td>
                            <td><a href="" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Pengetahuan (belum)</a>&nbsp&nbsp&nbsp<a href="hapus-siswa.php" class="btn btn-primary"><i class="fa fa-trash"></i> Keterampilan (belum)</a>&nbsp&nbsp&nbsp<a href="" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Sikap (belum)</a></td>
                            </tr>

                            <tr>
                            <td>5</td>
                            <td>16150115</td>
                            <td>Eka Rosdiana</td>
                            <td><a href="" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Pengetahuan (belum)</a>&nbsp&nbsp&nbsp<a href="hapus-siswa.php" class="btn btn-primary"><i class="fa fa-trash"></i> Keterampilan (belum)</a>&nbsp&nbsp&nbsp<a href="" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Sikap (belum)</a></td>
                            </tr>

                            
                        
                    </table>
                    
</div>
@endsection