@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Detail Data siswa</li>
	</ul>
</div>
<div class="container">
	<div class="row">
		@include('layouts.sidebarsiswa')
		<div class="col-md-9">
			<div class="content_dash">
				<h4 class="detail-header">
					Detail Data Siswa&nbsp&nbsp<button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button>
				</h4>

				<div class="profile-detail">
					
				<table class="table table-striped" >
					<tr >
						<td>Nomor Induk Siswa</td>
						<td>:</td>
						<td>{{--{{ $siswa->nomor_induk }}--}}</td>
						
					</tr>
					<tr>
						<td>Nama </td>
						<td>:</td>
						<td>{{--{{ $siswa->first_name }}--}}</td>
						
					</tr>
					<tr >
						<td>Email</td>
						<td>:</td>
						<td>Jl. Slamet 1 No.52 Cicadas Bandung</td>
						
					</tr>
					<tr >
						<td>No Telepon</td>
						<td>:</td>
						<td>085722738348</td>
						
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>Perempuan</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>Islam</td>
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
						<td>Alamat</td>
						<td>:</td>
						<td>bandung</td>
					</tr>
					<tr>
						<td>Semester</td>
						<td>:</td>
						<td>1</td>
					</tr>
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>2016/2017</td>
					</tr>
					<tr>
						<td>Jenis Tinggal</td>
						<td>:</td>
						<td>bersama orang tua</td>
					</tr>
					<tr>
						<td>Nama Ayah</td>
						<td>:</td>
						<td>DAdang</td>
					</tr>
					<tr>
						<td>Nama Ibu</td>
						<td>:</td>
						<td>nining</td>
					</tr>
					<tr>
						<td>Alat Transportasi</td>
						<td>:</td>
						<td>Motor</td>
					</tr>
					<tr>
						<td>Pengashilan Orang Tua</td>
						<td>:</td>
						<td>Motor</td>
					</tr>
					<tr>
						<td>Alamat Orang tua</td>
						<td>:</td>
						<td>Motor</td>
					</tr>
					<tr>
						<td>Pekerjaan Ayah</td>
						<td>:</td>
						<td>Motor</td>
					</tr>
					<tr>
						<td>Pekerjaan Ibu</td>
						<td>:</td>
						<td>Motor</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>:</td>
						<td>X</td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td>TIK</td>
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