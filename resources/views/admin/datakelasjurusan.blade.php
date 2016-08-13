@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Data Kelas dan Jurusan</li>
	</ul>
</div>
<div class="container">
		@if (session('message'))
                <div class="alert alert-{{session('alert')}}">
                    <p>{{session('message')}}</p>
                </div>  
   		@endif
		<h1 class="page-header">Kelas dan Jurusan<a href="{{URL('admin/data/kelasjurusan/tambah')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah</a></h1>
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>Kelas</th>
					<th>Jurusan</th>
					<th>Aksi</th>
				</tr>
					@foreach ($kelasjurusan as $data)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$data->kelas->nama}}</td>
					<td>{{$data->jurusan->nama}}</td>
					<td>
					<form action="{{ URL('admin/data/kelasjurusan',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
				    {{csrf_field()}}
				    <a href="{{URL('admin/kelas/detail')}}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Detail</a>
				    <button onclick="return confirm('Yakin akan menghapus data ini?')" class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
				    </form>
					</td>
				</tr>			
					@endforeach		
			</table>
			<div class="text-center">
						{!! $kelasjurusan->links() !!}
			</div>
</div>
@endsection