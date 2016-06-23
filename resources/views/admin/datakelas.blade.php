@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Data Kelas</li>
	</ul>
</div>

	
	<div class="container">

					<h1 class="page-header">Data Kelas <a href="{{URL('admin/tambahkelas')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Kelas</a></h1>
					<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>Kelas</th>
  							<th>Jurusan</th>
  							<th>Aksi</th>
  						</tr>		
							<tr>
  							<td>1</td>
  							<td>X</td>
  							<td>Rekayasa Perangkat Lunak</td>
  							<td><a href="{{URL('admin/detailkelas')}}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
  						</tr>		
							<tr>
  							<td>2</td>
  							<td>X</td>
  							<td>Teknik Komputer Jaringan</td>
  							<td><a href="detail-kelas.php" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
  						</tr>
  						
              <tr>
                <td>3</td>
                <td>XI</td>
                <td>Rekayasa Perangkat Lunak</td>
                <td><a href="detail-kelas.php" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
              </tr>   
              <tr>
                <td>4</td>
                <td>XI</td>
                <td>Teknik Komputer Jaringan</td>
               <td><a href="detail-kelas.php" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
              </tr>

              <tr>
                <td>5</td>
                <td>XII</td>
                <td>Rekayasa Perangkat Lunak</td>
                <td><a href="detail-kelas.php" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
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