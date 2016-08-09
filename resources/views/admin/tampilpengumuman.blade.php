@extends('layouts.layout')
@section('title')
	SMK MVP ARS
@stop

@section('content')

	
	<div class="container">
		<section id="fav-product">
			<h4 class="sc-heading text-center mb50">Pengumuman</h4>
			<div class="row">

				@foreach ($pengumuman as $data)
					<div class="col-md-4 col-sm-4 col-xs-4 product">
						<div class="product-thumb">
							<a href="product-detail.php?id=" class="product-img">
									<img src="images/product-800.jpg" class="img-responsive" data-min-width-0="images/calendar.png" data-min-width-641="images/product-800.jpg" data-min-width-1025="images/product.jpg">
							</a>
							
							<div class="product-detail">
								<h5><a href="product-detail.php?id=">{{ $data->judul }}</a></h5>
								<p>{{ $data->isi }}</p>
								<div class="author">by <a href="vendor-detail.php?id=">{{ $data->user->first_name }}</a></div>
								<a class="btn-orange btn-sm btn" href="product-detail.php?id=">Selengkapnya</a>
							</div>
						</div>
					</div>
				@endforeach
				

				
					<!-- setiap 3 item yang ditampilkan, row nya akan ditutup -->
			</div>
		</section>
	</div>

@stop