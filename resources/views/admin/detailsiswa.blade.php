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
						<td>{{ $siswa->nomor_induk }}</td>
						
					</tr>
					<tr>
						<td>Nama </td>
						<td>:</td>
						<td>{{ $siswa->full_name }}</td>
						
					</tr>
					<tr >
						<td>Email</td>
						<td>:</td>
						<td>{{ $siswa->email }}</td>
						
					</tr>
					<tr >
						<td>No Telepon</td>
						<td>:</td>
						<td>{{ $siswa->phone }}</td>
						
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>{{ $siswa->jenis_kelamin == 'p'?'Perempuan':'Laki-laki' }}</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>{{ $siswa->Agama }}</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>{{ $siswa->tempat_lahir }}</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>{{ date('d F Y',strtotime($siswa->tanggal_lahir))  }}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{$siswa->alamat}}</td>
					</tr>
					<tr>
						<td>Semester</td>
						<td>:</td>
						<td>{{$siswa->siswa->semester}}</td>
					</tr>
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>{{$siswa->siswa->tahun_ajar}}</td>
					</tr>
					<tr>
						<td>Jenis Tinggal</td>
						<td>:</td>
						<td>{{$siswa->siswa->jenis_tinggal}}</td>
					</tr>
					<tr>
						<td>Nama Ayah</td>
						<td>:</td>
						<td>{{$siswa->siswa->nama_ayah}}</td>
					</tr>
					<tr>
						<td>Nama Ibu</td>
						<td>:</td>
						<td>{{$siswa->siswa->nama_ibu}}</td>
					</tr>
					<tr>
						<td>Alat Transportasi</td>
						<td>:</td>
						<td>{{$siswa->siswa->alat_transportasi}}</td>
					</tr>
					<tr>
						<td>Pengashilan Orang Tua</td>
						<td>:</td>
						<td>{{$siswa->siswa->penghasil_orangtua}}</td>
					</tr>
					<tr>
						<td>Alamat Orang tua</td>
						<td>:</td>
						<td>{{$siswa->siswa->alamat_orangtua}}</td>
					</tr>
					<tr>
						<td>Pekerjaan Ayah</td>
						<td>:</td>
						<td>{{$siswa->siswa->pekerjaan_ayah}}</td>
					</tr>
					<tr>
						<td>Pekerjaan Ibu</td>
						<td>:</td>
						<td>{{$siswa->siswa->pekerjaan_ibu}}</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>:</td>
						<td>{{$siswa->siswa->kelasJurusan->kelas->nama}}</td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td>:</td>
						<td>{{$siswa->siswa->kelasJurusan->jurusan->kode}}</td>
					</tr>
					<tr>
						<td>Terakhir Login</td>
						<td>:</td>
						<td>{{$last_login}}</td>
					</tr>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection