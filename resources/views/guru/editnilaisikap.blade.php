@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Input nilai siswa</li>
    </ul>
    <div class="row">

<div class="col-lg-12">
    	<h1 class="page-header">Nilai Sikap <a href="{{ URL('guru/nilai/edit')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
</div>
	
</div>
<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-body">
			   <form action="" method="POST" role="form">
					<h4>&nbsp;&nbsp;&nbsp;Nilai Observasi</h4>	
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 1</label>
							<input value="4"name="nob1" type="number" class="form-control" id="1" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 2</label>
							<input value="4"name="nob2" type="number" class="form-control" id="2" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 3</label>
							<input value="4"name="nob3" type="number" class="form-control" id="3" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 4</label>
							<input value="4"name="nob4" type="number" class="form-control" id="4" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 5</label>
							<input value="4"name="nob5" type="number" class="form-control" id="1" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 6</label>
							<input value="4"name="nob6" type="number" class="form-control" id="2" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 7</label>
							<input value="4"name="nob7" type="number" class="form-control" id="3" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 8</label>
							<input value="4"name="nob8" type="number" class="form-control" id="4" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 9</label>
							<input value="4"name="nob9" type="number" class="form-control" id="4" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 10</label>
							<input value="4"name="nob10" type="number" class="form-control" id="4" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 11</label>
							<input value="4"name="nob11" type="number" class="form-control" id="4" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Nilai Observasi 12</label>
							<input value="4"name="nob12" type="number" class="form-control" id="4" min="0" max="4" placeholder="1-4" requireds>
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
			   
					<h4>&nbsp;&nbsp;&nbsp;Penilaian Sikap</h4>	
					<div class="col-md-4">
						<div class="form-group">
							<label for="">Nilai Diri Sendiri</label>
							<input value="4"name="nds" type="number" class="form-control" id="" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="">Nilai Antar Teman</label>
							<input value="3"name="nat" type="number" class="form-control" id="" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="">Nilai Jurnal</label>
							<input value="3"name="nj" type="number" class="form-control" id="" min="0" max="4" placeholder="1-4" required>
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-orange pull-right	" name="sikap">Simpan</button>
					</div>

					
				</form>
			</div>
		</div>	
	</div>
</div>
     
	</div>        


    
           
                    
@endsection