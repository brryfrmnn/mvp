@extends('layouts.layout')
@section('title')
  Ruang Wali Kelas
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Tampil nilai deskripsi</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Tampil nilai deskripsi<a href="{{ URL('walikelas/nilai/cek')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
                    <table class="table table-striped">

                        <tr>
                            <td>Kompetensi</td>
                            <td>Keterangan</td>
                        </tr> 
                        <tr>
                            <td>Pengetahuan</td>
                            <td>{{}}</td>
                        </tr> 
                        <tr>
                            <td>Keterampilan</td>
                            <td>{{}}</td>
                        </tr>
                        <tr>
                            <td>Sikap</td>
                            <td>{{}}</td>
                        </tr>
                                              
                    </table>
                    <div class="text-center">
                       {{--  {!! $pengumuman->links() !!} --}}
                    </div>
                    
</div>
@endsection