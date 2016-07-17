@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Tambah Data Siswa</li>
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
                        <label for="">nis</label>
                        <input value=""name="nis"type="text" class="form-control" id="" placeholder="Masukan nis" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Depan</label>
                        <input value=""name="nama_depan"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Belakang</label>
                        <input value=""name="nama_belakang"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input value=""name="email"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input value=""name="no_telepon"type="text" class="form-control" id="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="jk" value="l" 
                            > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="jk" value="p" > Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="agama" value="l" 
                            >Islam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="agama" value="p" > Budha &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="agama" value="p" >Katholik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="agama" value="p" >Hindu

                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat lahir</label>
                        <input value=""name="tempat_lahir"type="text" class="form-control" id="" placeholder="Masukan Tempat lahir">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input value="" name="tanggal_lahir"type="text" class="form-control" id="" placeholder="Masukan nis">
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
                        <label>Semester</label>
                        <input required value=""name="semester" type="text " class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Tahun Ajaran</label>
                        <input required value=""name="tahun_ajaran" type="text " class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Tinggal</label>
                        <input value="" name="jenis_tinggal"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Ayah</label>
                        <input value="" name="nama_ayah"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Ibu</label>
                        <input value="" name="nama_ibu"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Alat Transportasi</label>
                        <input value="" name="alat_transportasi"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Penghasilan Orang Tua</label>
                        <input value="" name="penghasilan_orangtua"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat orang Tua</label>
                        <input value="" name="alamat_orangtua"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Pekerjaan Ayah</label>
                        <input value="" name="pekerjaan_ayah"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>
                    <div class="form-group">
                        <label for="">Pekerjaan Ibu</label>
                        <input value="" name="pekerjaan_ibu"type="text" class="form-control" id="" placeholder="Masukan nis">
                    </div>

                    
                    <div class="form-group">
                        <label for="">Pilih Kelas dan Jurusan</label>
                        <select required class="form-control" name="kelasjurusan_id">
                            <option value="0" disabled="" selected="" >Pilih</option>

                        
                            <option value="" >X TIK</option>
                            <option value="" >XI FAR</option>
                            <option value="" >XII STP</option>
                       
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
