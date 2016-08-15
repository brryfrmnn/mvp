@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Ubah Password</li>
	</ul>
</div>

	
<div class="container">
		@if (session('message'))
            <div class="alert alert-{{session('alert')}}">
                <p>{{session('message')}}</p>
            </div>  
        @endif

		<h1 class="page-header">Ubah Password</h1>
		<form action="{{ URL('/ubahpassword')}}" method="POST" role="form" enctype="multipart/form-data" >
                   {{csrf_field()}}
                    <div class="form-group">
                        <label >Password Baru</label>
                    
                            <input type="password" name="password" value="" class="form-control bgcol"  placeholder="password">
                    </div>
                    <div class="form-group">
                        <label >Konfirmasi Password</label>
                    
                            <input type="password" value="" name="password_confirmation" class="form-control bgcol" placeholder="konfirmasi">
                    </div>
                    {{-- <div class="form-group">
                        <label for="">Admin</label>
                        <select class="form-control" name="admin_id">
                            <option value="0" selected disabled>Pilih Admin</option>
                            @foreach ($admins as $data)
                            <option value="{{$data->id}}">{{$data->first_name}}</option>
                            @endforeach                       
                        </select>
                    </div> --}}
                    <button type="submit" class="btn btn-orange" name="simpan">Simpan</button>
                   </form>
		
</div>
@endsection