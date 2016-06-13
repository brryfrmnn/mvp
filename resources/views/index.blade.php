@extends('layouts.layout')
@section('title')
	SMK MVP aRS
@stop

@section('content')

	<section id="starter-wizzard" class="parallax-window" data-parallax="scroll" data-image-src="images/03.png" data-position="top left">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-7 col-xs-10 col-center">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="sc-heading">Login</h4>
						</div>
						<div class="panel-body">
							<form class="form form-inline" action="{{ route('sentinel.session.store') }}" role="form" method="POST"> <!--inline fungsinya supaya inputan nya sejajar -->
								{{csrf_field()}}
								<div class="form-group">
									<label class="sr-only" for="inputusername">Username</label>
									<div class="input-group">
								      <div class="input-group-addon"><i class="fa fa-user"></i></div>
								      <input type="text" name="email" class="form-control" id="inputusername" placeholder="Username">
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
				</div>
			</div>
		</div>
	</section>

	
	<div class="container">
		<section id="fav-product">
			<h4 class="sc-heading text-center mb50">Pengumuman</h4>
			<div class="row">

				<?php 
					for ($i=0; $i < 3; $i++) { 
						
				 ?>
				<div class="col-md-4 col-sm-4 col-xs-4 product">
					<div class="product-thumb">
						<a href="product-detail.php?id=" class="product-img">
								<img src="images/product-800.jpg" class="img-responsive" data-min-width-0="images/product-480.jpg" data-min-width-641="images/product-800.jpg" data-min-width-1025="images/product.jpg">
						</a>
						
						<div class="product-detail">
							<h5><a href="product-detail.php?id=">UAS Kelas X</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="author">by <a href="vendor-detail.php?id=">Riku</a></div>
							<a class="btn-orange btn-sm btn" href="product-detail.php?id=">Selengkapnya</a>
						</div>
					</div>
				</div>

				<?php } ?>
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