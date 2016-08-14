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

            @foreach ($pengumuman as $data)
                <div class="col-md-4 col-sm-4 col-xs-4 product">
                    <div class="product-thumb">
                        <a href="#" class="product-img">
                                <img src="{{URL('images/pengumuman800.png')}}" class="img-responsive" data-min-width-0="{{URL('images/calendar.png')}}" data-min-width-641="{{URL('images/pengumuman800.png')}}" data-min-width-1025="{{URL('images/pengumuman800.png')}}">
                        </a>
                        
                        <div class="product-detail">
                            <h5><a href="{{URL('pengumuman',[$data->id,'show'])}}">{{ $data->judul }}</a></h5>

                            <p>{{ str_limit($data->isi,150) }}</p>
                            <div class="author">by <a href="#">{{ $data->user->first_name }}</a></div>
                            <a class="btn-orange btn-sm btn" href="{{URL('pengumuman',[$data->id,'show'])}}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
            

            {{$pengumuman->links()}}
                <!-- setiap 3 item yang ditampilkan, row nya akan ditutup -->
            
        </div>
</div>
@endsection