@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
            <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Edit Data Siswa</li>
            </ul>
        </div>
    </div>
</div>
    
<div class="container">
    <div class="row" >
        <div class="col-lg-8 col-lg-offset-2">
            @if (session('message'))
                <div class="alert alert-{{session('alert')}}">
                    <p>{{session('message')}}
                    </p>
                </div>  
            @endif
            <h1 class="page-header">Edit Siswa<button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button></h1>
                <div class="panel panel-default">
                    <div class="panel-body">
                       <form action="{{ URL('admin/siswa',[$siswa->id,'update'])}}" method="POST" role="form" enctype="multipart/form-data" >
                       {{csrf_field()}}
                        <div class="form-group">
                            <label for="">nis</label>
                            <input value="{{ $siswa->nomor_induk }}"name="nomor_induk"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Depan</label>
                            <input value="{{ $siswa->first_name }}"name="first_name"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Belakang</label>
                            <input value="{{ $siswa->last_name }}"name="last_name"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input value="{{ $siswa->email}}"name="email"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Telepon</label>
                            <input value="{{ $siswa->phone}}"name="phone"type="text" class="form-control" id="" placeholder="">
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
                            <input value="{{ $siswa->tempat_lahir}}"name="tempat_lahir"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input value="{{ $siswa->tanggal_lahir }}" name="tanggal_lahir"type="date" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="">{{ $siswa->alamat }} </textarea>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input value="{{ $siswa->photo}} "type="file" name="photo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Semester</label>
                            <input required value="{{ $siswa->siswa->semester }} "name="semester" type="text " class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Tahun Ajaran</label>
                            <input required value="{{ $siswa->siswa->tahun_ajar}}"name="tahun_ajar" type="text " class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Tinggal</label>
                            <input value="{{ $siswa->siswa->jenis_tinggal}}" name="jenis_tinggal"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input value="{{ $siswa->siswa->nama_ayah}}" name="nama_ayah"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ibu</label>
                            <input value="{{ $siswa->siswa->nama_ibu}}" name="nama_ibu"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Alat Transportasi</label>
                            <input value="{{ $siswa->siswa->alat_transportasi}}" name="alat_transportasi"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Penghasilan Orang Tua</label>
                            <input value="{{ $siswa->siswa->penghasilan_orangtua}}" name="penghasilan_orangtua"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat orang Tua</label>
                            <input value="{{ $siswa->siswa->alamat_orangtua}}" name="alamat_orangtua"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan Ayah</label>
                            <input value="{{ $siswa->siswa->pekerjaan_ayah}}" name="pekerjaan_ayah"type="text" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan Ibu</label>
                            <input value="{{ $siswa->siswa->pekerjaan_ibu}}" name="pekerjaan_ibu"type="text" class="form-control" id="" placeholder="">
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
