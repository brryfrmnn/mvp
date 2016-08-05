@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
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
  							<td>{{$data->kelasJurusan->kelas->nama}}</td>
                <td>{{$data->kelasJurusan->jurusan->nama}}</td>
  							<td>{{$data->mapel->nama}}</td>
  							<td>{{$data->guru->fullname}}</td>
  							<td><a href="{{ URL('guru/nilai',[$data->kelasJurusan->id,$data->mapel->id,'input'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Input Nilai</a>{{-- &nbsp&nbsp&nbsp<a href="{{URL('guru/nilai/edit')}}" class="btn btn-danger"><i class="glyphicon glyphicon-edit"></i> Edit Nilai --}}</td>
  						</tr>
              {{-- itu  $data->id berarti id jadwal pelajaran yang dipanggil, seharusnya apa coba?
seharusnya kelas jurusan, iya gimana kodingnya, ca perhatikan sekitar ud, ahj ngbne nekre  halaman
               --}}
              @endforeach
  					
					</table>
					
</div>
@endsection