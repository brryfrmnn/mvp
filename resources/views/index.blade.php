@extends('layouts.layout')
@section('title')
	SMK MVP ARS
@stop

@section('content')

	<section id="starter-wizzard" class="parallax-window" data-parallax="scroll" data-image-src="images/03.png" data-position="top left">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-7 col-xs-10 col-center">
				@if (!Sentinel::check())
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="sc-heading">Login</h4>
						</div>
						<div class="panel-body">
							<form class="form form-inline" action="{{ route('auth.login.attempt') }}" role="form" method="POST"> <!--inline fungsinya supaya inputan nya sejajar -->
								{{csrf_field()}}
								<div class="form-group">
									<label class="sr-only" for="inputusername">Username</label>
									<div class="input-group">
								      <div class="input-group-addon"><i class="fa fa-user"></i></div>
								      <input type="text" autofocus name="email" class="form-control" id="inputusername" placeholder="Username">
								    </div>
								</div>
								<div class="form-group">
									<label class="sr-only" for="inputpassword">Password</label>
									<div class="input-group">
								    	<div class="input-group-addon"><i class="fa fa-lock"></i></div>
										<input name="password" type="password" class="form-control" id="nameInput" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<input type="submit" value="Login" class="btn btn-orange btn-block">
								</div>
							</form>
						</div>
						
					</div>
				@else
					<div class="panel panel-default" style="transparent: 100%" >
						<div class="panel-heading">
							<h4 class="sc-heading">Selamat Datang</h4>
						</div>
						<div class="panel-body">
							<a class="btn btn-orange" href="/logout"><i class="fa fa-power-off"></i> Logout</a>
						</div>
						
					</div>
				@endif			
				</div>
			</div>
		</div>
	</section>

	
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
								<p>{{ str_limit($data->isi,400) }}</p>
								<div class="author">by <a href="vendor-detail.php?id=">{{ $data->user->first_name }}</a></div>
								<a class="btn-orange btn-sm btn" href="product-detail.php?id=">Selengkapnya</a>
							</div>
						</div>
					</div>
				@endforeach
				

				
					<!-- setiap 3 item yang ditampilkan, row nya akan ditutup -->
			</div>
			<div class="row">
					
			</div>
			<div class="text-center">
				<a class="btn btn-md btn-orange" href="product.php">Lihat Pengumuman Lainnya</a>
			</div>
			

		</section>
	</div>

@stop