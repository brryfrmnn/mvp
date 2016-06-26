@extends('layouts.layout')
@section('title')
  Ruang Guru
@endsection



@section('content')

<div class="container bread">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Edit Profil Siswa</li>
	</ul>
</div>
</div>
</div>
	


	
	<div class="container">
		<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >

            <div class="panel panel-default">
                <div class="panel-body">
                   <form action="" method="POST" class="form-horizontal">
                  <div class="form-group">
					<label class="col-lg-2">NIS</label>
					<div class="col-lg-10">
					<input type="text" value="1213100278" class="form-control bgcol" name="nama_admin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Nama Lengkap</label>
					<div class="col-lg-10">
					<input type="text" value="Dina Oktaviani" class="form-control bgcol" name="nama_admin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Alamat</label>
					<div class="col-lg-10">
					<textarea name="alamat_admin" class="form-control bgcol" cols="30">Jl. Slamet 1 No.52 Cicadas Bandung</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Nomor Telepon</label>
					<div class="col-lg-10">
					<input type="text" value="085722738348" class="form-control bgcol" name="nama_admin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Alamat Email</label>
					<div class="col-lg-10">
					<input type="text" value="dinaokta@yahoo.com" class="form-control bgcol" name="nama_admin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Jenis Kelamin</label>
					<div class="col-lg-10">
					<input type="text" value="Perempuan" class="form-control bgcol" name="nama_admin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Tempat Lahir</label>
					<div class="col-lg-10">
					<input name="tempatlahir_admin"type="text" value="Bandung" class="form-control bgcol" name="tempat_lahiradmin">
					</div>
				</div>
				<div class="form-group"> 
					<label class="col-lg-2">Tanggal Lahir</label>
					<div class="col-lg-10">
					<input name="tanggallahir_admin"type="text" value="1997-10-05" class="form-control bgcol" name="tanggal_lahiradmin">
					</div>
				</div>
				
				<button type="submit" name="edit" class="btn btn-orange">EDIT</button>
			</form>
                </div>
            </div>
       
        </div>
    
    </div>
</div>

	
			
					
@endsection