@extends('layouts.layout')
@section('title')
	Ruang Administrator
@endsection



@section('content')
	<div class="container bread">
		<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
		
		
			<li class="active">Profil</li>
		</ul>
	</div>
	<div class="container">
		<div class="row">
			@include('layouts.sidebar')
			<div class="col-md-9">
				

					<div class="content_dash">
						<h4 class="detail-header">
							Profil Saya
						</h4>
						<div class="profile-detail">
						
					<table class="table table-striped" >
						<tr >
							<td>NIP</td>
							<td>:</td>
							<td>201601112</td>
							
						</tr>
						<tr>
							<td>Nama </td>
							<td>:</td>
							<td>{{Sentinel::getUser()->first_name}}</td>
							
						</tr>
						<tr >
							<td>Alamat</td>
							<td>:</td>
							<td>Jl. Slamet 1 No.52 Cicadas Bandung</td>
							
						</tr>
						<tr >
							<td>No Telepon</td>
							<td>:</td>
							<td>085722738348</td>
							
						</tr>
						<tr>
							<td>Alamat Email</td>
							<td>:</td>
							<td>Berry.frm@mvp.sch.id</td>
							
						</tr>
						<tr>
							<td>Lahir</td>
							<td>:</td>
							<td>23, Maret 1990</td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td>Laki-laki</td>
						</tr>
						</table>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection