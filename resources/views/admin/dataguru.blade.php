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

					<h1 class="page-header">Data Guru <a href="{{ URL('admin/tambahguru')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Guru</a></h1>
					<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>NIP</th>
  							<th>Nama</th>
                <th>Alamat</th>
  							<th>Jenis Kelamin</th>
  							<th>Aksi</th>

  						</tr>		
							<tr>
  							<td>1</td>
  							<td>201601111</td>
  							<td>Rachma Wina Pertiwi,S.Si,Apt</td>
  							<td>Jl. Slamet 1 No.52 Cicadas Bandung</td>
                <td>Perempuan</td>
  							<td><a href="{{ URL('admin/editguru')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-guru.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>&nbsp&nbsp&nbsp<a href="{{ URL('admin/detailguru')}}" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
  						</tr>
  						<tr>
                <td>2</td>
                <td>201601111</td>
                <td>Rachma Wina Pertiwi,S.Si,Apt</td>
                <td>Jl. Slamet 1 No.52 Cicadas Bandung</td>
                <td>Perempuan</td>
                <td><a href="edit-guru.php" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-guru.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>&nbsp&nbsp&nbsp<a href="detail-guru.php" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
              </tr>
              <tr>
                <td>3</td>
                <td>201601111</td>
                <td>Rachma Wina Pertiwi,S.Si,Apt</td>
                <td>Jl. Slamet 1 No.52 Cicadas Bandung</td>
                <td>Perempuan</td>
                <td><a href="edit-guru.php" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-guru.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>&nbsp&nbsp&nbsp<a href="detail-guru.php" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
              </tr>
              <tr>
                <td>4</td>
                <td>201601111</td>
                <td>Rachma Wina Pertiwi,S.Si,Apt</td>
                <td>Jl. Slamet 1 No.52 Cicadas Bandung</td>
                <td>Perempuan</td>
               <td><a href="edit-guru.php" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-guru.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>&nbsp&nbsp&nbsp<a href="detail-guru.php" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
              </tr>
              <tr>
                <td>5</td>
                <td>201601111</td>
                <td>Rachma Wina Pertiwi,S.Si,Apt</td>
                <td>Jl. Slamet 1 No.52 Cicadas Bandung</td>
                <td>Perempuan</td>
                <td><a href="edit-guru.php" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-guru.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>&nbsp&nbsp&nbsp<a href="detail-guru.php" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
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