@extends('layouts.layout')
@section('title')
	Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Jadwal Mengajar</li>
	</ul>
</div>

	
	<div class="container">

					<h1 class="page-header">Jadwal Mengajar <a href="{{URL ('admin/tambahjadwal')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Input Jadwal Mengajar</a></h1>
					
					<div class="text-center">
						<ul class="pagination">
						    <li>
						      <a href="member.php?page=1" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						      </a>
						    </li>
								<li><a href="member.php?page="></a></li>
								
							
						    <li>
						      <a href="member.php?page=" aria-label="Next">
						        <span aria-hidden="true">&raquo;</span>
						      </a>
						    </li>
						</ul>
					</div>
</div>
@endsection