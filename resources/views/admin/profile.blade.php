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
							<td>{{Sentinel::getUser()->nomor_induk}}</td>
							
						</tr>
						<tr>
							<td>Nama </td>
							<td>:</td>
							<td>{{Sentinel::getUser()->full_name}}</td>
							
						</tr>
						<tr >
							<td>Alamat</td>
							<td>:</td>
							<td>{{Sentinel::getUser()->alamat}}</td>
							
						</tr>
						<tr >
							<td>No Telepon</td>
							<td>:</td>
							<td>{{Sentinel::getUser()->phone}}</td>
							
						</tr>
						<tr>
							<td>Alamat Email</td>
							<td>:</td>
							<td>{{Sentinel::getUser()->email}}</td>
							
						</tr>
						<tr>
							<td>Lahir</td>
							<td>:</td>
							<td>{{ date('d F Y', strtotime(Sentinel::getUser()->tanggal_lahir)) }}</td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td>{{ Sentinel::getUser()->jenis_kelamin }}</td>
						</tr>
						</table>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection