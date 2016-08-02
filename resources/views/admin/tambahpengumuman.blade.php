@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
      <div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
      <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
      
      
            <li class="active">Tambah Pengumuman</li>
      </ul>
</div>
</div>
</div>
      
</div>
      <div class="container">
        <div class="row" >
        <div class="col-lg-8 col-lg-offset-2">
        @if (session('message'))
                    <div class="alert alert-{{session('alert')}}">
                        <p>{{session('message')}}</p>
                    </div>  
        @endif
        <h1 class="page-header">Tambah Pengumuman<a href="{{ URL('admin/pengumuman')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>

            <div class="panel panel-default">
                <div class="panel-body">
                   <form action="{{ URL('admin/pengumuman')}}" method="POST" role="form" enctype="multipart/form-data" >
                   {{csrf_field()}}
                    <div class="form-group">
                        <label >Judul</label>
                    
                            <input type="text" value="" class="form-control bgcol" name="judul" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                        <label>Isi Pengumuman</label>
                        <textarea name="isi" class="form-control" placeholder="Masukan Isi Pengumuman" rows="13"></textarea>
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
            </div>
       
        </div>
    
    </div>
      </div>

      
                  
                              
@endsection




