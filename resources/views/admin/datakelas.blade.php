@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Kelola Kelas</li>
	</ul>
</div>

	
<div class="container">
		@if (session('message'))
	        <div class="alert alert-{{session('alert')}}">
	            <p>{{session('message')}}</p>
	        </div>  
	    @endif
		<h1 class="page-header">Kelola Kelas<a href="{{URL('admin/data/kelas/tambah')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Kelas</a></h1>
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Kode</th>
					<th>Aksi</th>
				</tr>
					@foreach ($kelas as $data)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$data->kode}}</td>
					<td>{{$data->nama}}</td>
					<td><a href="{{ URL('admin/data/kelas',[$data->id,'edit'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp
					<form action="{{ URL('admin/data/kelas',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
					{{csrf_field()}}
					<button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
					</form>
					</td>
				</tr>			
					@endforeach		
			</table>
			
</div>
@endsection