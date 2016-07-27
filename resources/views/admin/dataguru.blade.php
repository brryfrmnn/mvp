@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Data Guru</li>
	</ul>
</div>

	
	<div class="container">

					<h1 class="page-header">Data Guru <a href="{{ URL('admin/guru/tambah')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Guru</a></h1>
					<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>NIP</th>
  							<th>Nama</th>
                			<th>Alamat</th>
  							<th>Jenis Kelamin</th>
  							<th>Aksi</th>

  						</tr>
  						 @foreach ($guru as $data)				
							<tr>
  							<td>{{ $no++ }}</td>
  							<td>{{ $data->nomor_induk }}</td>
  							<td>{{ $data->first_name }} {{ $data->last_name }}</td>
                			<td>Bandung</td>
                			<td>Perempuan</td>
  							<td><a href="{{ URL('admin/guru',[$data->id,'edit')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp
  							<form action="{{ URL('admin/guru',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
                                {{csrf_field()}}
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                                {{csrf_field()}}
                                </form>
  							<a href="{{ URL('admin/guru/edit')}}" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
  						</tr>
  						@endforeach
  						
  					
					</table>
					<div class="text-center">
						{!! $guru->links() !!}
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