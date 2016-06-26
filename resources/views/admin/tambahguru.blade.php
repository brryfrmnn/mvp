@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
      <div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
      <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
      
      
            <li class="active">Tambah Data Guru</li>
      </ul>
</div>
</div>
</div>
      
</div>
      <div class="container">
            <div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >

          <div class="panel panel-default">
                <div class="panel-body">
                   <form action="" method="POST" role="form" enctype="multipart/form-data" >
                    
                   
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input name="nip"type="text" class="form-control" id="" placeholder="Masukan NIP">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Guru</label>
                        <input name="nama_guru"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Tempat lahir</label>
                        <input name="tempatlahir_guru"type="text" class="form-control" id="" placeholder="Masukan Tempat lahir">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input name="tanggallahir_guru"type="text" class="form-control" id="" placeholder="1995-03-23">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="jk" value="l"> Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="jk" value="p"> Perempuan

                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat Guru</label>
                        <textarea name="alamat_guru" class="form-control" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Photo Guru</label>
                        <input type="file" name="photo_guru" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keahlian</label>
                        <input name="keahlian" type="text " class="form-control" placeholder="">
                    </div>
                   <div class="form-group">
                        <label for="">Status Wali Kelas</label>
                        <select class="form-control" name="status_wali_kelas">
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Wali di Kelas</label>
                        <select class="form-control" name="kode_kelas">
                            <option value="0">Tidak Ada</option>
                            <option value=""></option>
                        
                        </select>
                    </div>
                   <div class="form-group">
                        <label for="">No Telpon</label>
                        <input name="no_telpon_guru" type="text" class="form-control" id="" placeholder="masukan no telpon">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Email</label>
                        <input name="email_guru" type="text" class="form-control" id="" placeholder="masukan email">
                    </div>
                   
                   
                   
                    
                   
                    <button type="submit" class="btn btn-orange" name="simpan">Simpan</button>
                   </form>
                </div>
            </div>
       
        </div>
    
    </div>
      </div>

      
                  
                              
@endsection