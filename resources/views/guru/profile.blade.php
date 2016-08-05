@extends('layouts.layout')
@section('title')
	Ruang Administrator
@endsection



@section('content')
	<div class="container bread">
		<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
			<li class="active">Profil</li>
		</ul>
	</div>
	<div class="container">
		<div class="row">
			@include('layouts.sidebarguru')
			<div class="col-md-9">
				

					<div class="content_dash">
						<h4 class="detail-header">
							Profil Saya
						</h4>
						<div class="profile-detail">
						
					<table class="table table-hover" >
						<tr class="warning">
							<td>NIP</td>
							<td>:</td>
							<td>{{$user->nomor_induk}}</td>
							
						</tr>
						<tr>
							<td>Nama </td>
							<td>:</td>
							<td>Aang Miftah</td>
							
						</tr>
						<tr class="warning">
							<td>Alamat</td>
							<td>:</td>
							<td>Bandung</td>
							
						</tr>
						<tr class="">
							<td>No Telepon</td>
							<td>:</td>
							<td>085722738348</td>
							
						</tr>
						<tr class="warning">
							<td>Alamat Email</td>
							<td>:</td>
							<td>aangmiftah@yahoo.com</td>
							
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td>:</td>
							<td>Bandung</td>
						</tr>
						<tr class="warning">
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td>1983-08-07</td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td>Laki-Laki</td>
						</tr>
						<tr class="warning">
							<td>Pendidikan Terakhir</td>
							<td>:</td>
							<td>S1</td>
						</tr>
						<tr>
							<td>Jurusan</td>
							<td>:</td>
							<td>Sistem Informasi</td>
						</tr>
						</table>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
	
