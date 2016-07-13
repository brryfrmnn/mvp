@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Mata Pelajaran</li>
	</ul>
</div>

	
	<div class="container">

					<h1 class="page-header">Data Mata Pelajaran <a href="{{ URL('admin/mapel/tambah')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Mapel</a></h1>
					<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>Nama Mata Pelajaran</th>
  							<th>Kategori</th>
  							<th>Aksi</th>
  						</tr>	
              @foreach ($mapel as $data)	
							<tr>
  							<td>{{ $no++}}</td>
  							<td>{{ $data->nama}}</td>
  							<td>{{ $data->kategori}}</td>
  							<td><a href="{{ URL('admin/mapel',[$data->id,'edit'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp
                <form action="{{ URL('admin/mapel',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
                {{csrf_field()}}
                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                </form>
                </td>
  						</tr>		
							@endforeach
              
  					
					</table>
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