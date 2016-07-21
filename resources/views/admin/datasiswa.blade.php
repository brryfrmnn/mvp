@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Data Siswa</li>
	</ul>
</div>

	
	<div class="container">

					<h1 class="page-header">Data Siswa <a href="{{ URL('admin/siswa/tambah')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah data</a></h1>
          <div class="box-body table-responsive" >
					<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>NIS</th>
  							<th>Nama</th>
  							<th>Kelas</th>
  							<th>Aksi</th>
  						</tr>
              @foreach ($users as $data)		
							<tr>
  							<td>{{ $no++ }}</td>
  							<td>{{ $data->nomor_induk }}</td>
  							<td>{{ $data->first_name }} {{ $data->last_name }}</td>
  							<td>XII Farmasi</td>
                  							<td><a href="{{ URL('admin/siswa',[$data->id,'edit'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                                &nbsp&nbsp&nbsp
                                <form action="{{ URL('admin/siswa',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
                                {{csrf_field()}}
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                                {{csrf_field()}}
                                </form>
                                &nbsp&nbsp&nbsp
                                <a href="{{ URL('admin/siswa/detail')}}" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
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