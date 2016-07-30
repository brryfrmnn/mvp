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
		                     <input type="text" name="deskripsi" value="" placeholder="">
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