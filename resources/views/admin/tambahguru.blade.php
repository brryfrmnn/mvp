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
                   <form action="{{ URL('admin/guru')}}" method="POST" role="form" enctype="multipart/form-data" >
                    
                   {{csrf_field()}}
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input value=""name="nomor_induk"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Depan</label>
                        <input value=""name="first_name"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Belakang</label>
                        <input value=""name="last_name"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input value=""name="email"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input value=""name="password"type="password" class="form-control" id="" placeholder="Masukan Password">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input value=""name="password_confirmation"type="password" class="form-control" id="" placeholder="Masukan Konfirmasi Password">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input value=""name="phone"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="jenis_kelamin" value="l" 
                            > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="jenis_kelamin" value="p" > Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="Agama" value="l" 
                            >Islam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Agama" value="p" > Budha &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Agama" value="p" >Katholik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Agama" value="p" >Hindu

                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat lahir</label>
                        <input value=""name="tempat_lahir"type="text" class="form-control" id="" placeholder="Masukan Tempat lahir">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input value="" name="tanggal_lahir"type="date" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input value=""type="file" name="photo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>nik</label>
                        <input required value=""name="nik" type="text " class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Status Kepegawaian</label>
                        <input required value=""name="status_kepegawaian" type="text " class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input value="" name="jabatan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Tugas Tambahan</label>
                        <input value="" name="tugas_tambahan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">SK Pengangkatan</label>
                        <input value="" name="sk_pengangkatan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Pengangkatan</label>
                        <input value="" name="tahun_pengangkatan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Lembaga Pengangkatan</label>
                        <input value="" name="lembaga_pengangkatan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Sumber Gaji</label>
                        <input value="" name="sumber_gaji"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Status Perkawinan</label>
                        <input value="" name="status_perawinan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Suami</label>
                        <input value="" name="nama_suami"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Istri</label>
                        <input value="" name="nama_istri"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Status Wali Kelas</label>

                        <select class="form-control" name="status_walikelas">
                        <option value="0" disabled="" selected="" >Pilih</option>
                            <option value="0" >Ya</option>
                             <option value="1" >Tidak</option>
                        </select>
                    </div>
                   
                   
                   
                   
                    
                   
                    <button type="submit" class="btn btn-orange" name="simapn">Simpan</button>
                   </form>
                </div>
            </div>
       
        </div>
    
    </div>
      </div>

      
                  
                              
@endsection