@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
            <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Tambah Data Guru</li>
            </ul>
        </div>
    </div>
</div>
      

<div class="container">
    <div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
          @if (session('message'))
            <div class="alert alert-{{session('alert')}}">
                <p>{{session('message')}}
                </p>
            </div>  
          @endif

            <div class="panel panel-default">
                <div class="panel-body">
                   <form action="{{ URL('admin/guru')}}" method="POST" role="form" enctype="multipart/form-data" >
                   {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Nomor Induk*</label>
                        <input value=""name="nomor_induk"type="text" class="form-control" id="" placeholder="Masukan nomor induk" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Depan*</label>
                        <input value=""name="first_name"type="text" class="form-control" id="" placeholder="Masukan Nama Depan" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Belakang*</label>
                        <input value=""name="last_name"type="text" class="form-control" id="" placeholder="Masukan Nama Belakang" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email*</label>
                        <input value=""name="email"type="text" class="form-control" id="" placeholder="Masukan Email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password*</label>
                        <input value=""name="password"type="password" class="form-control" id="" placeholder="Masukan Password" required>
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi Password*</label>
                        <input value=""name="password_confirmation"type="password" class="form-control" id="" placeholder="Masukan Konfirmasi Password" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon*</label>
                        <input value=""name="phone"type="text" class="form-control" id="" placeholder="Masukan telepon" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin*</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="jenis_kelamin" value="laki-laki" 
                            >Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="jenis_kelamin" value="perempuan" > Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Agama*</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="Agama" value="islam" 
                            >Islam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Agama" value="budha" > Budha &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Agama" value="katholik" >Katholik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Agama" value="hindu" >Hindu
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat lahir*</label>
                        <input value=""name="tempat_lahir"type="text" class="form-control" id="" placeholder="Masukan Tempat lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir*</label>
                        <input value="" name="tanggal_lahir"type="date" class="form-control" id="" placeholder="Masukan Tanggal lahir" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat*</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukan Alamat" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input value=""type="file" name="photo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input value=""name="nip" type="text " class="form-control" placeholder="Masukan Nip">
                    </div>
                    <div class="form-group">
                        <label>Status Kepegawaian</label>
                        <input value=""name="status_kepegawaian" type="text " class="form-control" placeholder="Masukan Status Kepegawaian">
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input value="" name="jabatan"type="text" class="form-control" id="" placeholder="Masukan Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="">Tugas Tambahan</label>
                        <input value="" name="tugas_tambahan"type="text" class="form-control" id="" placeholder="Masukan Tugas Tambahan">
                    </div>
                    <div class="form-group">
                        <label for="">SK Pengangkatan</label>
                        <input value="" name="sk_pengangkatan"type="text" class="form-control" id="" placeholder="Masukan sk_pengangkatan">
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Pengangkatan</label>
                        <input value="" name="tahun_pengangkatan"type="text" class="form-control" id="" placeholder="Masukan tahun_pengangkatan">
                    </div>
                    <div class="form-group">
                        <label for="">Lembaga Pengangkatan</label>
                        <input value="" name="lembaga_pengangkatan"type="text" class="form-control" id="" placeholder="Masukan Lembaga Pengangkatan">
                    </div>
                    <div class="form-group">
                        <label for="">Sumber Gaji</label>
                        <input value="" name="sumber_gaji"type="text" class="form-control" id="" placeholder="Masukan Sumber Gaji">
                    </div>
                    <div class="form-group">
                        <label for="">Status Perkawinan</label>
                        <input value="" name="status_perkawinan"type="text" class="form-control" id="" placeholder="Masukan Status Perkawinan">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Suami</label>
                        <input value="" name="nama_suami"type="text" class="form-control" id="" placeholder="Masukan Nama Suami">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Istri</label>
                        <input value="" name="nama_istri"type="text" class="form-control" id="" placeholder="Masukan Nama Istri">
                    </div>          
                    <button type="submit" class="btn btn-orange" name="simapn">Simpan</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>                
                              
@endsection