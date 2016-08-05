@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
        	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
        		<li class="active">Edit Data Guru</li>
        	</ul>
        </div>
    </div>
</div>
		
<div class="container">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
        <h1 class="page-header">Edit Guru<a href="{{ URL('admin/data/guru')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></h1>
     		<div class="panel panel-default">
                <div class="panel-body">
                   <form action="{{ URL('admin/guru',[$guru->id,'update'])}}" method="POST" role="form" enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input value="{{ $guru->nomor_induk }}"name="nomor_induk"type="text" class="form-control" id="" placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Depan</label>
                        <input value="{{ $guru->first_name }}"name="first_name"type="text" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Belakang</label>
                        <input value="{{ $guru->last_name }}"name="last_name"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input value="{{ $guru->email}}"name="email"type="text" class="form-control" id="" placeholder="Masukan Nama">
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
                        <input value="{{ $guru->phone}}"name="phone"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="jenis_kelamin" value="l" 
                            >Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="jenis_kelamin" value="p" >Perempuan
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
                        <input value="{{ $guru->tempat_lahir}}"name="tempat_lahir"type="text" class="form-control" id="" placeholder="Masukan Tempat lahir">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input value="{{ $guru->tanggal_lahir }}" name="tanggal_lahir"type="date" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="">{{ $guru->alamat }} </textarea>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input value="{{ $guru->photo}} "type="file" name="photo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input value="{{$guru->nip}}"name="nip" type="text " class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Status Kepegawaian</label>
                        <input value="{{$guru->status_kepegawaian}}"name="status_kepegawaian" type="text " class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input value="{{$guru->jabatan}}" name="jabatan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Tugas Tambahan</label>
                        <input value="{{$guru->tugas_tambahan}}" name="tugas_tambahan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">SK Pengangkatan</label>
                        <input value="{{$guru->sk_pengangkatan}}" name="sk_pengangkatan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Pengangkatan</label>
                        <input value="{{$guru->tahun_pengangkatan}}" name="tahun_pengangkatan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Lembaga Pengangkatan</label>
                        <input value="{{$guru->lembaga_pengangkatan}}" name="lembaga_pengangkatan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Sumber Gaji</label>
                        <input value="{{$guru->sumber_gaji}}" name="sumber_gaji"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Status Perkawinan</label>
                        <input value="{{$guru->status_perkawinan}}" name="status_perkawinan"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Suami</label>
                        <input value="{{$guru->nama_suami}}" name="nama_suami"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Istri</label>
                        <input value="{{$guru->nama_istri}}" name="nama_istri"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Status Wali Kelas</label>

                        <select required class="form-control" name="status_walikelas">
                        <option value="0" disabled="" selected="" >Pilih</option>
                        @foreach ($guru as $data)               
                            <option value="{{$data->id}}" >{{$data->status_walikelas}}</option>
                       @endforeach
                        </select>
                    </div>
                   
                    <button type="submit" class="btn btn-orange" name="edit">EDIT</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

	
			
					
@endsection





