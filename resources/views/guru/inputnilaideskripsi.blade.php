@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Input nilai Deskripsi</li>

    </ul>
     <div class="row">

				<div class="col-lg-12">
				    	<h1 class="page-header">Nilai Deskripsi <a href="{{ URL('guru/nilai/input')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
				</div>
	
			</div>
	<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
			   <form action="" method="POST" role="form">	
						<div class="col-md-4">
							 <div class="form-group">
		                        <label for="">Input Deskripsi Pengetahuan</label>
			                        <select class="form-control" name="semester">
			                            <option value="0" disabled="" selected="">Pilih Deskripsi</option>
			                            <option value="1"> Sangat Baik dan Sempurna</option>
			                            <option value="2"> Baik dan sempurna</option>
			                            <option value="3"> Baik Sekali</option>
			                            <option value="4"> Baik</option>
			                            <option value="5"> Cukup Baik</option>
			                            <option value="6"> Sangat Cukup</option>
			                            <option value="7"> Cukup</option>
			                            <option value="8"> Sedang</option>
			                            <option value="9"> Kurang</option>
			                            <option value="10"> Sangat Kurang</option>
			                        </select>
                    		</div>
						</div>
						<div class="col-md-4">
							 <div class="form-group">
		                        <label for="">Input Deskripsi Keterampilan</label>
			                        <select class="form-control" name="semester">
			                            <option value="0" disabled="" selected="">Pilih Deskripsi</option>
			                            <option value="1"> Sangat Baik dan Sempurna</option>
			                            <option value="2"> Baik dan sempurna</option>
			                            <option value="3"> Baik Sekali</option>
			                            <option value="4"> Baik</option>
			                            <option value="5"> Cukup Baik</option>
			                            <option value="6"> Sangat Cukup</option>
			                            <option value="7"> Cukup</option>
			                            <option value="8"> Sedang</option>
			                            <option value="9"> Kurang</option>
			                            <option value="10"> Sangat Kurang</option>
			                        </select>
                    		</div>
						</div>
						<div class="col-md-4">
							 <div class="form-group">
		                        <label for="">Input Deskripsi Sikap</label>
			                        <select class="form-control" name="semester">
			                            <option value="0" disabled="" selected="">Pilih Deskripsi</option>
			                            <option value="1"> Sangat Menerima, menjalankan, menghargai, menghayati dan mengamalkan nilai agama</option>
			                            <option value="2"> Dapat Menerima, menjalankan, menghargai, menghayati dan mengamalkan nilai agama</option>
			                            <option value="3"> Cukup Menerima, menjalankan, menghargai, menghayati dan mengamalkan nilai agama</option>
			                            <option value="4"> Kurang Menerima, menjalankan, menghargai, menghayati dan mengamalkan nilai agama</option>
			                        </select>
			                        &nbsp&nbsp&nbsp
			                        <button type="submit" class="btn btn-orange pull-right	" name="keterampilan">Simpan</button>
                    		</div>
						</div>
			</div>
		</div>	
	</div>
	</div>

	
				

					
				</form>
			</div>
		</div>	
	</div>
	</div>        
</div>

    
           
                    
@endsection