@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Tambah Data Mata Pelajaran</li>
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
					<label >Nama mapel</label>
					
					<input type="text" value="" class="form-control bgcol" name="" placeholder="Masukan Nama Mapel">
				</div>
				<div class="form-group">
					<label >Kategori Mata Pelajaran</label>
					<input type="text" name="kategori_mapel" class="form-control bgcol" cols="30" value="" placeholder="Masukan kategori">
					</div>
				</div>
				<button type="submit" name="edit" class="btn btn-primary">EDIT</button>
			</form>
                </div>
            </div>
       
        </div>
    
    </div>
	</div>

	
			
	















