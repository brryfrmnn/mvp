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

			                            <option value="Sangat Baik dan Sempurna">Sangat baik dan sempurna. Dapat memahami dan mengevaluasi semua kompetensi dasar </option>

			                            <option value="Baik dan sempurna. Dapat memahami semua kompetensi dasar  tetapi kurang teliti mengevaluasi salah satu kompetensi dasar">Baik dan sempurna. Dapat memahami semua kompetensi dasar  tetapi kurang teliti mengevaluasi salah satu kompetensi dasar </option>

			                            <option value="Baik sekali. Dapat memahami sebagian besar kompetensi dasar tetapi kurang bisa mengevaluasi salah satu dari kompetensi dasar">Baik sekali. Dapat memahami sebagian besar kompetensi dasar tetapi kurang bisa mengevaluasi salah satu dari kompetensi dasar </option>

			                            <option value="Baik. Dapat memahami sebagian besar kompetensi dasar tetapi kurang bisa  mengevaluasi dua kompetensi dasar">Baik. Dapat memahami sebagian besar kompetensi dasar tetapi kurang bisa  mengevaluasi dua kompetensi dasar </option>

			                            <option value="Cukup baik. Dapat memahami sebagian besar kompetensi dasar tetapi kurang bisa menganalisis dan mengevaluasi dua kompetensi dasar">Cukup baik. Dapat memahami sebagian besar kompetensi dasar tetapi kurang bisa menganalisis dan mengevaluasi dua kompetensi dasar </option>

			                            <option value="Sangat cukup. Dapat memahami sebagian kompetensi dasar, tetapi kurang bisa menganalisis dan mengevaluasi beberapa kompetensi dasar">Sangat cukup. Dapat memahami sebagian kompetensi dasar, tetapi kurang bisa menganalisis dan mengevaluasi beberapa kompetensi dasar </option>

			                            <option value="Cukup. Dapat mengingat, mengetahui sebagian kompetensi dasar,tetapi kurang bisa menerapkan, menganalisis dan mengevaluasi beberapa kompetensi dasar">Cukup. Dapat mengingat, mengetahui sebagian kompetensi dasar,tetapi kurang bisa menerapkan, menganalisis dan mengevaluasi beberapa kompetensi dasar </option>

			                            <option value="Sedang cukup Dapat memahami sebagian kecil kompetensi dasar tetapi kurang bisa menerapkan, menganalisis, dan mengevaluasi sebagian besar kompetensi dasar">Sedang cukup Dapat memahami sebagian kecil kompetensi dasar tetapi kurang bisa menerapkan, menganalisis, dan mengevaluasi sebagian besar kompetensi dasar </option>

			                            <option value="Kurang. Hanya dapat memahami dan mengeveluasi sebagian kecil kompetensi dasar">Kurang. Hanya dapat memahami dan mengeveluasi sebagian kecil kompetensi dasar </option>

			                            <option value="Sangat kurang. Hanya dapat memahami dan mengeveluasi satu atau dua kompetensi dasar saja">Sangat kurang. Hanya dapat memahami dan mengeveluasi satu atau dua kompetensi dasar saja </option>
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