@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
      <div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
      <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
      
      
            <li class="active">Ubah Pengumuman</li>
      </ul>
</div>
</div>
</div>
      
</div>
      <div class="container">
        <div class="row" >
        <div class="col-lg-8 col-lg-offset-2">
        <h1 class="page-header">Ubah Pengumuman<button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button></h1>

            <div class="panel panel-default">
                <div class="panel-body">
                   <form action="{{ URL('admin/pengumuman',[$pengumuman->id,'update'])}}" method="POST" role="form" enctype="multipart/form-data" >
                   {{csrf_field()}}
                   
                    <div class="form-group">
                        <label >Judul Pengumuman</label>
                    
                            <input type="text" value="{{ $pengumuman->judul }}" class="form-control bgcol" name="judul" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                        <label>Isi Pengumuman</label>
                        <textarea name="isi" class="form-control" placeholder="Masukan Isi Pengumuman">{{ $pengumuman->isi }} </textarea>
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




