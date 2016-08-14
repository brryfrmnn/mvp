@extends('layouts.layout')
@section('title')
  Pengumuman
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Pengumuman</li>
	</ul>
</div>

	
<div class="container">
		@if (session('message'))
            <div class="alert alert-{{session('alert')}}">
                <p>{{session('message')}}</p>
            </div>  
        @endif

		<h1 class="page-header">Pengumuman</h1>
		<div class="row">

            
                <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h5><a href="{{URL('pengumuman',[$data->id,'show'])}}">{{ $data->judul }}</a></h5>

                            <p>{{ $data->isi }}</p>
                            <div class="author">by <a href="#">{{ $data->user->first_name }}</a></div>
                            
                    </div>
                </div>
                        
                    
            
            

            
                <!-- setiap 3 item yang ditampilkan, row nya akan ditutup -->
        </div>
</div>
@endsection