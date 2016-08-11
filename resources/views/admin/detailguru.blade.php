@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Detail Data Guru</li>
	</ul>
</div>

	
<div class="container">
	<div class="row">
		@include('layouts.sidebarguru')
		<div class="col-md-9">
			<div class="content_dash">
				<h4 class="detail-header">
					Detail Data Guru&nbsp&nbsp<button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button>
				</h4>
				<div class="profile-detail">
					<table class="table table-striped" >
						<tr >
							<td>Nomor Induk</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr >
							<td>Email</td>
							<td>:</td>
							<td></td>
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
							<td></td>
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td>:</td>
							<td>Bandung</td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td>23, Maret 1990</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>NIP</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Status Kepegawaian</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Jabatan</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Tugas Tambahan</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>SK Pengangkatan</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Tahun Pengangkatan</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Lembaga Pengangkatan</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Sumber gaji</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Status Perkawinan</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Nama Suami</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Nama Istri</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Terakhir Login</td>
							<td>:</td>
							<td></td>
						</tr>
						</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection