@extends('layouts.layout')
@section('title')
  Ruang Guru
@endsection



@section('content')

<div class="container bread">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Edit Profil Guru</li>
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
					<label class="col-lg-2">NIP</label>
					<div class="col-lg-10">
					<input type="text" value="3204280708830010" class="form-control bgcol" name="nama_admin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Nama admin</label>
					<div class="col-lg-10">
					<input type="text" value="Aang Miftah Parid" class="form-control bgcol" name="nama_admin">
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
					<input type="text" value="aangmiftah@yahoo.com" class="form-control bgcol" name="nama_admin">
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
					<input name="tanggallahir_admin"type="text" value="1983-08-07" class="form-control bgcol" name="tanggal_lahiradmin">
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2">Pendidikan Terakhir</label>
					<div class="col-lg-10">
					<input name="tempatlahir_admin"type="text" value="S1" class="form-control bgcol" name="tempat_lahiradmin">
					</div>
				</div>
				<div class="form-group"> 
					<label class="col-lg-2">Jurusan</label>
					<div class="col-lg-10">
					<input name="tanggallahir_admin"type="text" value="Sistem Informasi" class="form-control bgcol" name="tanggal_lahiradmin">
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