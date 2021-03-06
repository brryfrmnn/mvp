@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
  	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
  		<li class="active">Data Siswa</li>
  	</ul>
</div>
<div class="container">
				<h1 class="page-header">Data Siswa <a href="tambah-siswa.php" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah data</a></h1>
  				<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>NIS</th>
  							<th>Nama</th>
  							<th>Kelas</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
  							<th>Aksi</th>
  						</tr>		
  						<tr>
  							<td>1</td>
  							<td>16150111</td>
  							<td>Sari Susanti</td>
  							<td>XII</td>
                <td>Farmasi</td>
                <td>Perempuan</td>
  							<td><a href="edit-siswa.php" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp<a href="hapus-siswa.php" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>&nbsp&nbsp&nbsp<a href="detail-siswa.php" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
  						</tr>
  				</table>
          {{-- <div class="text-center">
            {!! $pengumuman->links() !!}
          </div> --}}
</div>
@endsection