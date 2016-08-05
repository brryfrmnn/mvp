@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Detail Profile siswa</li>
	</ul>
</div>
<div class="container">
	<div class="row">
		@include('layouts.sidebarsiswa')
		<div class="col-md-9">
			<div class="content_dash">
				<h4 class="detail-header">
					Profile Siswa
				</h4>
				<div class="profile-detail">
					
				<table class="table table-striped" >
					<tr >
						<td>NIS</td>
						<td>:</td>
						<td>16150111</td>
						
					</tr>
					<tr>
						<td>Nama </td>
						<td>:</td>
						<td>Sari Susanti</td>
						
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
						<td>sarisusanti95@gmail.com</td>
						
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>Perempuan</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>Bandung</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>23, Maret 1995</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>:</td>
						<td>XII</td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td>Farmasi</td>
					</tr>
					<tr>
						<td>Tahun Masuk</td>
						<td>:</td>
						<td>2012</td>
					</tr>
					<tr>
						<td>Terakhir Login</td>
						<td>:</td>
						<td>258 hari yang lalu</td>
					</tr>
					
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection