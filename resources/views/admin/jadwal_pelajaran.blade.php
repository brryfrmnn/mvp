@extends('layouts.layout')
@section('title')
	Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Jadwal Mengajar</li>
	</ul>
</div>

	
	<div class="container">

					<h1 class="page-header">Jadwal Mengajar <a href="{{URL ('admin/jadwal/tambah')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Input Jadwal Mengajar</a></h1>
					<div class="box-body table-responsive" >
					<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>NIP</th>
  							<th>Guru</th>
                			<th>Kelas dan Jurusan</th>
                			<th>Mata Pelajaran</th>
  							<th>Semester</th>
  							<th>Tahun Ajaran</th>
  							<th>Aksi</th>

  						</tr>
  						 	
  						 	{{-- no --}}
  						 	{{-- ambil data data no induk dan full name dari tabel user melalui model guru --}}
  						 	{{-- no --}}
  						 	{{-- no --}}
  						 	@foreach ($jadwal_pelajaran as $data)
							<tr>
  							<td>{{ $no++ }}</td>
  							<td>{{$data->guru->nomor_induk}}</td>
  							<td>{{$data->guru->full_name}}</td>
                			<td></td>
                			<td> </td>
                			<td>{{ $data->semester }} </td>
                			<td>{{ $data->tahun_ajaran }} </td>
  							<td>
  							<form action="{{ URL('admin/jadwal',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
  							{{csrf_field()}}
  							<a href="{{ URL('admin/jadwal',[$data->id,'edit'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
  							<a href="{{ URL('admin/jadwal',[$data->id,'detail'])}}" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a>
  							<button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
  							</form>
 							</td>
  						</tr>
  						@endforeach
  						
  					
					</table>
					</div>
					<div class="text-center">
						{!! $jadwal_pelajaran->links() !!}
					</div>
					

					{{-- <div class="text-center">
						<ul class="pagination">
						    <li>
						      <a href="member.php?page=1" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						      </a>
						    </li>
								<li><a href="member.php?page="></a></li>
								
							
						    <li>
						      <a href="member.php?page=" aria-label="Next">
						        <span aria-hidden="true">&raquo;</span>
						      </a>
						    </li>
						</ul>
					</div> --}}
</div>
@endsection