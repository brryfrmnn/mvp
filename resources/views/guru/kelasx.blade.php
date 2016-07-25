@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Halaman Input Nilai</li>
	</ul>
</div>

	
	<div class="container">


					<h1 class="page-header">Halaman Input Nilai<a href="{{ URL('admin/tambahguru')}}"></a></h1>
					<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>Kode Kelas</th>
  							<th>Jurusan</th>
                <th>Mata Pelajaran</th>
  							<th>Guru Pengajar</th>
  							<th>Aksi</th>

  						</tr>	
              @foreach($jadwal_pelajaran as $data)	
							<tr>
  							<td>{{$no++}}</td>
  							<td>{{$data->kelas->nama}}</td>
                <td>{{$data->jurusan->nama}}</td>
  							<td>{{$data->mapel->nama}}</td>
  							<td>{{$data->guru->fullname}}</td>
  							<td><a href="{{URL('guru/nilai/input')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Input Nilai</a>&nbsp&nbsp&nbsp<a href="{{URL('guru/nilai/edit')}}" class="btn btn-danger"><i class="glyphicon glyphicon-edit"></i> Edit Nilai</td>
  						</tr>
              @endforeach
  					
					</table>
					
</div>
@endsection