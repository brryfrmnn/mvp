@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
    
    
        <li class="active">Input nilai siswa</li>

    </ul>
     <div class="row">

				<div class="col-lg-12">
				    	<h1 class="page-header">Nilai Pengetahuan <a href="{{ URL('guru/nilai/input')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
				</div>
	
			</div>
	<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-body">
			   <form action="{{ URL('guru/nilai/pengetahuan')}}" method="POST" role="form">
					<h4>&nbsp;&nbsp;&nbsp;Nilai Ulangan Harian</h4>	
					<div class="col-md-3">
					{{csrf_field()}}
					<input value="{{$mapel_id}}" name="mapel_id" type="hidden">
					<input value="{{$siswa_id}}" name="siswa_id" type="hidden">
						<div class="form-group">
							<label for="">Ulangan Harian 1</label>
							<input value="" name="nuh1" type="number" class="form-control" id="1" min="0" max="100" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Ulangan Harian 2</label>
							<input value="" name="nuh2" type="number" class="form-control" id="2" min="0" max="100">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Ulangan Harian 3</label>
							<input value="" name="nuh3" type="number" class="form-control" id="3" min="0" max="100">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Ulangan Harian 4</label>
							<input value="" name="nuh4" type="number" class="form-control" id="4" min="0" max="100">
						</div>
					</div>
				
			</div>
		</div>	
	</div>
	</div>

	<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-body">
			   
					<h4>&nbsp;&nbsp;&nbsp;Nilai Ujian</h4>	
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Ujian Tengah Semester</label>
							<input value="" name="nuts" type="number" class="form-control" id="" min="0" max="100">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Ujian Akhir Semester</label>
							<input value="" name="nuas" type="number" class="form-control" id="" min="0" max="100">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
		                        <label for="">Input Deskripsi Pengetahuan</label>
			                        <select class="form-control" name="ndes">
			                            <option value="0" disabled="" selected="">Pilih Deskripsi</option>
			                            <option value="Sangat Baik dan Sempurna"> Sangat Baik dan Sempurna</option>
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
					<div class="col-md-12">
						<button type="submit" class="btn btn-orange pull-right	" name="pengetahuan">Simpan</button>
					</div>

					
				</form>
			</div>
		</div>	
	</div>
	</div>        
</div>

    
           
                    
@endsection