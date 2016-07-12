@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Pengumuman</li>
	</ul>
</div>

	
	<div class="container">

					<h1 class="page-header">Pengumuman <a href="{{URL ('admin/pengumuman/tambah')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah</a></h1>
					<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>JUDUL</th>
                			<th width="50px" height="40px">ISI</th>
                			<th>ADMIN</th>
  							<th>Aksi</th>

  						</tr>
  						 @foreach ($pengumuman as $data)				
							<tr>
  							<td>{{ $no++ }}</td>
  							<td>{{ $data->judul }} </td>
                			<td>{{ $data->isi }} </td>
                			<td>{{ $data->user->first_name }} </td>
  							<td><a href="{{ URL('admin/pengumuman',[$data->id,'edit'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp
  							<form action="{{ URL('admin/pengumuman',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
  							{{csrf_field()}}
  							<button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
  							</form>

 							<a href="{{ URL('admin/pengumuman',[$data->id,'detail'])}}" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
  						</tr>
  						@endforeach
  						
  					
					</table>
					<div class="text-center">
						{{-- <ul class="pagination">
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
						</ul> --}}
						{!! $pengumuman->links() !!}
					</div>
</div>
@endsection