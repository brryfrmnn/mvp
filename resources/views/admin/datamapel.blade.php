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

					<h1 class="page-header">Data Mata Pelajaran <a href="{{ URL('admin/tambahmapel')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Mapel</a></h1>
					<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>Nama Mata Pelajaran</th>
  							<th>Kategori</th>
  							<th>Aksi</th>
  						</tr>		
							<tr>
  							<td>1</td>
  							<td>Pemrograman Berorientasi Objek</td>
  							<td>C2</td>
  							<td><a href="{{ URL('admin/editmapel')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-mapel.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
  						</tr>		
							<tr>
                <td>2</td>
                <td>Pemodelan Perangkat Lunak</td>
                <td>C2</td>
                <td><a href="edit-mapel.php" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-mapel.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
              </tr>  
              <tr>
                <td>3</td>
                <td>Pemrograman Website</td>
                <td>C2</td>
                <td><a href="edit-mapel.php" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-mapel.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
              </tr>    
              <tr>
                <td>4</td>
                <td>Pemodelan Perangkat Lunak</td>
                <td>C2</td>
                <td><a href="edit-mapel.php" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-mapel.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
              </tr>  
              <tr>
                <td>5</td>
                <td>Pemrograman Website</td>
                <td>C2</td>
                <td><a href="edit-mapel.php" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-mapel.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
              </tr>    
              
  					
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