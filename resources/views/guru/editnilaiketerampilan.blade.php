@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Input nilai siswa</li>
    </ul>
	<div class="col-lg-12">
	    	<h1 class="page-header">Nilai Keterampilan <a href="{{ URL('guru/nilai/edit')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
	</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-body">
					   <form action="" method="POST" role="form">
							<h4>&nbsp;&nbsp;&nbsp;Nilai Praktik</h4>	
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Nilai Praktek 1</label>
									<input value="80"name="npra1" type="number" class="form-control" id="1" min="0" max="100" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Nilai Praktek 2</label>
									<input value="80" name="npra2" type="number" class="form-control" id="2" min="0" max="100">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Nilai Praktek 3</label>
									<input value="80"name="npra3" type="number" class="form-control" id="3" min="0" max="100">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Nilai Praktek 4</label>
									<input value="75"name="npra4" type="number" class="form-control" id="4" min="0" max="100">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Nilai Praktek 5</label>
									<input value="85"name="npra5" type="number" class="form-control" id="1" min="0" max="100" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Nilai Praktek 6</label>
									<input value="85"name="npra6" type="number" class="form-control" id="2" min="0" max="100">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Nilai Praktek 7</label>
									<input value="90" name="npra7" type="number" class="form-control" id="3" min="0" max="100">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="">Nilai Praktek 8</label>
									<input value="95" name="npra8" type="number" class="form-control" id="4" min="0" max="100">
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
									<label for="">Nilai Proyek</label>
									<input value="100" name="nproy" type="number" class="form-control" id="" min="0" max="100">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nilai Portofolio</label>
									<input value="100" name="nport" type="number" class="form-control" id="" min="0" max="100">
								</div>
							</div>
							<div class="col-md-12">
								<button type="submit" class="btn btn-orange pull-right	" name="keterampilan">Simpan</button>
							</div>
						</form>
					</div>
				</div>	
			</div>
		</div>
</div>



		

    
           
                    
@endsection