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
			@include('layouts.sidebarsiswa')
			<div class="col-md-9">
				

					<div class="content_dash">
						<h4 class="detail-header">
							Profil Saya
						</h4>
						<div class="profile-detail">
						
					<table class="table table-hover" >
                        <tr class="warning">
                            <td>NIS</td>
                            <td>:</td>
                            <td>1213100278</td>
                            
                        </tr>
                        <tr>
                            <td>Nama </td>
                            <td>:</td>
                            <td>Dina Oktaviani</td>
                            
                        </tr>
                        <tr class="warning">
                            <td>Alamat</td>
                            <td>:</td>
                            <td>Bandung</td>
                            
                        </tr>

                        <tr>
							<td>No Telepon</td>
							<td>:</td>
							<td>085722738348</td>
						</tr>
						<tr class="warning">
							<td>Alamat Email</td>
							<td>:</td>
							<td>dinaokta@yahoo.com</td>
						</tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>Perempuan</td>
                        </tr>
                        <tr class="warning">
							<td>Tempat Lahir</td>
							<td>:</td>
							<td>Bandung</td>
						</tr>
						<tr >
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td>1997-10-05</td>
						</tr>
                        </table>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
	
