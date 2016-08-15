@extends('layouts.layout')
@section('title')
  Tahun Ajar
@endsection



@section('content')
<div class="container bread">
    <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Tahun Ajar</li>
    </ul>
</div>

    
<div class="container">
        @if (session('message'))
            <div class="alert alert-{{session('alert')}}">
                <p>{{session('message')}}</p>
            </div>  
        @endif

        <h1 class="page-header">Ubah Tahun Ajar</h1>
        <form action="{{ URL('/admin/tahun_ajar')}}" method="POST" role="form" enctype="multipart/form-data" >
                   {{csrf_field()}}
                    <div class="form-group">
                        <label >Tahun Ajar Lama</label>
                    
                            <input disabled="" type="text" value="{{$tahun_ajaran->tahun_ajaran or ''}}" pattern="[0-9]{4}[/]{1}[0-9]{4}" class="form-control bgcol" name="" placeholder="2015/2016">
                    </div>

                    <div class="form-group">
                        <label >Tahun Ajar Sekarang</label>
                    
                            <input type="text" value="" pattern="[0-9]{4}[/]{1}[0-9]{4}" class="form-control bgcol" name="tahun_ajaran" placeholder="2015/2016">
                    </div>
                    
                    <button type="submit" class="btn btn-orange" name="simpan">Simpan</button>
                   </form>
        
</div>
@endsection