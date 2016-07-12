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
                			<th>ISI</th>
                			<th>ADMIN</th>
  							<th>Aksi</th>

  						</tr>
  						 @foreach ($users as $pengumuman)				
							<tr>
  							<td>{{ $no++ }}</td>
  							<td>{{ $pengumuman->judul }} Kelas X</td>
                			<td>{{ $pengumuman->isi }} Jadwal Uas Tanggal 12/7/2015, </td>
                			<td>{{ $pengumuman->admin_id }} Berry</td>
  							<td><a href="{{ URL('admin/pengumuman/edit')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-guru.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>&nbsp&nbsp&nbsp<a href="{{ URL('admin/guru/edit')}}" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
  						</tr>
  						@endforeach
  						
  					
					</table>
					<div class="text-center">
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
					</div>
</div>
@endsection