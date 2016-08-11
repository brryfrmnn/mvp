@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
        	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>      	
        		<li class="active">Tambah Data Siswa</li>
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
                   <form action="{{ URL('admin/siswa')}}" method="POST" role="form" enctype="multipart/form-data" >
                    
                   {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Nomor Induk *</label>
                        <input required value=""name="nomor_induk"type="text" class="form-control" id="" placeholder="Masukan nomor induk siswa">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Depan *</label>
                        <input required value=""name="first_name"type="text" class="form-control" id="" placeholder="Masukan Nama Depan">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Belakang *</label>
                        <input required value=""name="last_name"type="text" class="form-control" id="" placeholder="Masukan Nama Belakang">
                    </div>
                    <div class="form-group">
                        <label for="">Email *</label>
                        <input required value=""name="email"type="text" class="form-control" id="" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label for="">Password *</label>
                        <input required value=""name="password"type="password" class="form-control" id="" placeholder="Masukan Password">
                    </div>
                    <div class="form-group">
                        <label for="">Password *</label>
                        <input required value=""name="password_confirmation"type="password" class="form-control" id="" placeholder="Masukan Konfirmasi Password">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon *</label>
                        <input required value=""name="phone"type="text" class="form-control" id="" placeholder="Masukan Nomo Telepon">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin *</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="jenis_kelamin" value="l" 
                            >Laki-laki &nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio" name="jenis_kelamin" value="p" > Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Agama *</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="Agama" value="Islam" 
                            >Islam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Agama" value="Budha" > Budha &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Agama" value="Katholik" >Katholik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="Agama" value="Hindu" >Hindu

                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat lahir *</label>
                        <input value=""name="tempat_lahir"type="text" class="form-control" id="" placeholder="Masukan Tempat lahir">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir *</label>
                        <input value="" name="tanggal_lahir"type="date" class="form-control" id="" placeholder="Masukan tanggal lahir">
                    </div>
                    <div class="form-group">
                        <label>Alamat *</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukan alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input value=""type="file" name="photo" class="form-control" placeholder="pilih Gambar">
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <input  value=""name="semester" type="text " class="form-control" placeholder="Masukan Semester">
                    </div>
                    <div class="form-group">
                        <label>Tahun Ajaran </label>
                        <input  value=""name="tahun_ajar" type="text " class="form-control" placeholder="Masukan Tahun ajaran">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Tinggal </label>
                        <input value="" name="jenis_tinggal"type="text" class="form-control" id="" placeholder="Jenis tinggal">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Ayah </label>
                        <input value="" name="nama_ayah"type="text" class="form-control" id="" placeholder="Nama ayah">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Ibu</label>
                        <input value="" name="nama_ibu"type="text" class="form-control" id="" placeholder="Nama ibu">
                    </div>
                    <div class="form-group">
                        <label for="">Alat Transportasi</label>
                        <input value="" name="alat_transportasi"type="text" class="form-control" id="" placeholder="Alat transportasi">
                    </div>
                    <div class="form-group">
                        <label for="">Penghasilan Orang Tua</label>
                        <input value="" name="penghasilan_orangtua"type="text" class="form-control" id="" placeholder="Masukan Penghasilan orangtua">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat orang Tua</label>
                        <input value="" name="alamat_orangtua"type="text" class="form-control" id="" placeholder="Masukan alamat orangtua">
                    </div>
                    <div class="form-group">
                        <label for="">Pekerjaan Ayah</label>
                        <input value="" name="pekerjaan_ayah"type="text" class="form-control" id="" placeholder="Masukan peerjaan ayah">
                    </div>
                    <div class="form-group">
                        <label for="">Pekerjaan Ibu</label>
                        <input value="" name="pekerjaan_ibu"type="text" class="form-control" id="" placeholder="Masukan pekerjaan ibu">
                    </div>

                    
                    <div class="form-group">
                        <label for="">Pilih Kelas dan Jurusan</label>

                        <select required class="form-control" name="kelas_jurusan_id">
                        <option value="0" disabled="" selected="" >Pilih</option>
                        @foreach ($kelasjurusan as $data)               
                            <option value="{{$data->id}}" >{{$data->kelas->nama}} {{$data->jurusan->nama}}</option>
                       @endforeach
                        </select>
                    </div>
                   
                   
                   
                   
                    
                   
                    <button type="submit" class="btn btn-orange" name="edit">Simpan</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

	
			
					

@endsection
