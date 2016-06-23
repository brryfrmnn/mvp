@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
	
	
		<li class="active">Edit Data Guru</li>
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
                        <input value=""name="nip"type="text" class="form-control" id="" placeholder="201601111" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Guru</label>
                        <input value=""name="nama_guru"type="text" class="form-control" id="" placeholder="Rachma Wina Pertiwi,S.Si,Apt">
                    </div>
                    <div class="form-group">
                        <label for="">Tempat lahir</label>
                        <input value=""name="tempatlahir_guru"type="text" class="form-control" id="" placeholder="Jakarta">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input value="" name="tanggallahir_guru"type="text" class="form-control" id="" placeholder="1990-23-03">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                            
                            <input type="radio" name="jk" value="l" > Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="jk" value="p" checked="1" > Perempuan

                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat Guru</label>
                        <textarea name="alamat_guru" class="form-control" placeholder="Jl. Slamet 1 No.52 Cicadas Bandung"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Photo Guru</label>
                        <input value=""type="file" name="photo_guru" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Lulusan</label>
                        <input value=""name="keahlian" type="text " class="form-control" placeholder="Farmasi">
                    </div>
                   <div class="form-group">
                        <label for="">Status Wali Kelas</label>
                        <select class="form-control" name="status_wali_kelas" value="">
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Wali di Kelas</label>
                        <select class="form-control" name="kode_kelas">
                            <option value="0" selected="">Tidak Ada</option>

                        
                            <option value=""></option>
                        
                        </select>
                    </div>
                   <div class="form-group">
                        <label for="">No Telpon</label>
                        <input name="no_telpon_guru"type="text" class="form-control" id="" placeholder="085722738348" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Email</label>
                        <input name="email_guru"type="text" class="form-control" id="" placeholder="rachmawina.pwi@mvp.sch.id" value="">
                    </div>         
                   
                    <button type="submit" class="btn btn-primary" name="edit">EDIT</button>
                   </form>
                </div>
            </div>
       
        </div>
    
    </div>
	</div>

	
			
					
@endsection





