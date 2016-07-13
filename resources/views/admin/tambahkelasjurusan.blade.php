@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
      <div class="row" >
            <div class="col-lg-8 col-lg-offset-2"  >
                  <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
                  
                  
                        <li class="active">Tambah Data Kelas</li>
                  </ul>
            </div>
    </div>
</div>
      
</div>
      <div class="container">
            <div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
            <h1 class="page-header">Tambah Data Kelas<a href="{{ URL('admin/data/kelas')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
          <div class="panel panel-default">
                <div class="panel-body">
                   <form action="{{ URL('admin/data/kelasjurusan')}}" method="POST" role="form" >
                   {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <select required class="form-control" name="kelas_id">
                            <option value="0" disabled="" selected="" >Pilih</option>
                            @foreach ($kelas as $data)
                               <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                           

                        </select>
                    </div>
                   
                   <div class="form-group">
                        <label for="">Jurusan</label>
                        <select required class="form-control" name="jurusan_id">
                            <option value="0" disabled="" selected="" >Pilih</option>
                            @foreach ($jurusan as $data)
                              <option value="{{$data->id}}" >{{$data->nama}}</option>
                            @endforeach
                           
                     
                        </select>
                    </div>     
                    <button type="submit" class="btn btn-orange" name="simpan">Simpan</button>
                   </form>
                </div>
            </div>
       
        </div>
    
    </div>
      </div>

@endsection