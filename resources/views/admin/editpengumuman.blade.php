@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
      <div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
      <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
      
      
            <li class="active">Ubah Pengumuman</li>
      </ul>
</div>
</div>
</div>
      
</div>
      <div class="container">
        <div class="row" >
        <div class="col-lg-8 col-lg-offset-2">
        <h1 class="page-header">Ubah Pengumuman<a href="{{ URL('admin/pengumuman')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>

            <div class="panel panel-default">
                <div class="panel-body">
                   <form action="" method="POST" role="form" enctype="multipart/form-data" >
                   {{csrf_field()}}
                    <div class="form-group">
                        <label >Judul Pengumuman</label>
                    
                            <input type="text" value="Kelas X" class="form-control bgcol" name="" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                        <label>Isi Pengumuman</label>
                        <textarea name="alamat_guru" class="form-control" placeholder="Masukan Isi Pengumuman">Jadwal Uas Tanggal 12/7/2015</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Admin</label>
                        <select class="form-control" name="nip">
                            <option value="0">Berry</option>                       
                            <option value="1">Rikuchan</option>
                            <option value="1">Rikuchin</option>
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




