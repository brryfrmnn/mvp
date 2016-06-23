@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Proses Nilai Siswa</li>
	</ul>
</div>

	
	<div class="container">

					<h1 class="page-header">Proses Nilai</h1>
					<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>Nis</th>
  							<th>Nama</th>
  							<th>Aksi</th>
  						</tr>		
							<tr>
  							<td>1</td>
  							<td>1415100618</td>
  							<td>Bobby Setiawan</td>
  							<td><a href="{{URL('walikelas/tampilnilai')}}" class="btn btn-orange"></a></td>
  						</tr>	
              <tr>
                <td>2</td>
                <td>1415100620</td>
                <td>Dria Bella</td>
                <td><a href="{{URL('walikelas/tampilnilai')}}" class="btn btn-orange"></a></td>
              </tr> 
              <tr>
                <td>3</td>
                <td>1415100621</td>
                <td>Dwiki Febrian Syah</td>
                <td><a href="{{URL('walikelas/tampilnilai')}}" class="btn btn-orange"></a></td>
              </tr> 
              <tr>
                <td>4</td>
                <td>1415100622</td>
                <td>Ferdy Anggriawan</td>
                <td><a href="{{URL('walikelas/tampilnilai')}}" class="btn btn-orange"></a></td>
              </tr> 
              <tr>
                <td>5</td>
                <td>1415100623</td>
                <td>Hanif Abdurahim</td>
                <td><a href="{{URL('walikelas/tampilnilai')}}" class="btn btn-orange"></a></td>
              </tr> 
              <tr>
                <td>6</td>
                <td>1415100625</td>
                <td>Intan Pratiwi</td>
                <td><a href="{{URL('walikelas/tampilnilai')}}" class="btn btn-orange"></a></td>
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