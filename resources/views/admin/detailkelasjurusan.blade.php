@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
  	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
  		<li class="active">Detail Siswa</li>
  	</ul>
</div>
<div class="container">
				<h1 class="page-header">Data Siswa<button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button>&nbsp;&nbsp;&nbsp;<a href="{{ URL('admin/data/kelasjurusan/ubahkelas/all?id='.$kelasjurusan_id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Naik Kelas Semua</a></h1>
  				<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>NIS</th>
  							<th>Nama</th>
                <th>Aksi</th>
  						</tr>	
              @foreach ($siswa as $data)	
  						<tr>
  							<td>{{$no++}}</td>
  							<td>{{$data->nomor_induk}}</td>
  							<td>{{$data->full_name}}</td>
                <td><a href="{{ URL('admin/data/kelasjurusan/ubahkelas?id='.$data->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Ubah Kelas</a></td>
  						</tr>
              @endforeach
  				</table>
          {{-- <div class="text-center">
            {!! $pengumuman->links() !!}
          </div> --}}
</div>
@endsection