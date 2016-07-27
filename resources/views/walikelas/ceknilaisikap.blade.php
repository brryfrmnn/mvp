@extends('layouts.layout')
@section('title')
  Ruang Wali Kelas
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Tampil nilai sikap</li>
    </ul>
</div>

    
    <div class="container">

                    <h1 class="page-header">Tampil nilai sikap<a href="{{ URL('walikelas/nilai/cek')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
                    <table class="table table-striped">

                        <tr>
                            <th>No</th>
                            <th>Keterangan Nilai</th>
                            <th>Angka</th>
                            
                            
                        </tr>  
                            @foreach ($ as $data) 
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nomor_induk}}</td>
                            <td>{{$data->full_name}}</td>
                            </tr>
                        @endforeach                        
                    </table>
                    <div class="text-center">
                       {{--  {!! $pengumuman->links() !!} --}}
                    </div>
                    
</div>
@endsection