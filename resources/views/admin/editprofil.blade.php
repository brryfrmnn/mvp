@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Edit Profil Admin</li>
	</ul>
</div>
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
					<label class="col-lg-2">Nama admin</label>
					<div class="col-lg-10">
					<input type="text" value="Berry Firmansyah.M.Kom.," class="form-control bgcol" name="nama_admin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Nomor Telepon</label>
					<div class="col-lg-10">
					<input type="text" value="085722738348" class="form-control bgcol" name="nama_admin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Alamat email</label>
					<div class="col-lg-10">
					<input type="text" value="Berry.frm@mvp.sch.id" class="form-control bgcol" name="nama_admin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Jenis Kelamin</label>
					<div class="col-lg-10">
					<input type="text" value="Laki-laki" class="form-control bgcol" name="nama_admin">
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
					<input name="tanggallahir_admin"type="text" value="1990-03-23" class="form-control bgcol" name="tanggal_lahiradmin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Alamat</label>
					<div class="col-lg-10">
					<textarea name="alamat_admin" class="form-control bgcol" cols="30">Jl. Slamet 1 No.52 Cicadas Bandung</textarea>
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