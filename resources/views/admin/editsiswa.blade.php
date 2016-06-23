@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Edit Data Siswa</li>
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
                        <input value=""name="nis"type="text" class="form-control" id="" placeholder="16150111" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama siswa</label>
                        <input value=""name="nama_siswa"type="text" class="form-control" id="" placeholder="Sari Susanti">
                    </div>
                    <div class="form-group">
                        <label for="">Tempat lahir</label>
                        <input value=""name="tempatlahir_siswa"type="text" class="form-control" id="" placeholder="Bandung">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input value="" name="tanggallahir_siswa"type="text" class="form-control" id="" placeholder="1995-03-23">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                            <input type="radio" name="jk" value="l" 
                            > Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="jk" value="p" checked="1"  > Perempuan

                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat siswa</label>
                        <textarea name="alamat_siswa" class="form-control" placeholder="Jl. Slamet 1 No.52 Rt08 Rw03 Kel. Babakan Surabaya Kec. Kiaracondong Bandung"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tahun Masuk</label>
                        <input required value=""name="tahunmasuk" type="text " class="form-control" placeholder="2015">
                    </div>
                    <div class="form-group">
                        <label>Photo siswa</label>
                        <input value=""type="file" name="photo_siswa" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <select required class="form-control" name="kode_kelas">
                            <option value="0" disabled="" selected="" >Pilih</option>

                        
                            <option value="" >X</option>
                            <option value="" >XI</option>
                            <option value="" >XII</option>
                       
                        </select>
                    </div>
                   
                   
                   
                   
                    
                   
                    <button type="submit" class="btn btn-primary" name="edit">EDIT</button>
                   </form>
                </div>
            </div>
       
        </div>
    
    </div>
	</div>

	
			
					
@endsection