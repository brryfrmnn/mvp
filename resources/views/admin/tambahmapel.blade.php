@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Tambah Mata Pelajaran</li>
	</ul>
</div>
</div>
</div>
	
</div>

	
	<div class="container">
		<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
        @if (session('message'))
                    <div class="alert alert-{{session('alert')}}">
                        <p>{{session('message')}}</p>
                    </div>  
    	@endif
        		<h1 class="page-header">Tambah Mata Pelajaran<a href="{{ URL('admin/mapel/tampil')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
     		<div class="panel panel-default">
                <div class="panel-body">
                   <form action="{{ URL('admin/mapel/tampil')}}" method="POST" class="form-horizontal">
                   {{csrf_field()}}
				<div class="form-group">
					<label >Nama mapel</label>
					
					<input type="text" value="" class="form-control bgcol" name="nama" placeholder="Masukan Nama Mapel">
				</div>
				<div class="form-group">
					<label >Kategori Mata Pelajaran</label>
					<input type="text" name="kategori" class="form-control bgcol" cols="30" value="" placeholder="Masukan kategori">
					</div>
				</div>
				<button type="submit" name="edit" class="btn btn-orange">Simpan</button>
			</form>
                </div>
            </div>
       
        </div>
    
    </div>
	</div>

	
			
	















