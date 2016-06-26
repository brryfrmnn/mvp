@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
      <div class="row" >
            <div class="col-lg-8 col-lg-offset-2"  >
                  <ul class="breadcrumb"><li><a href="index.php">Home</a></li>
                  
                  
                        <li class="active">Tambah Data Kelas</li>
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
                   <form action="" method="POST" role="form" >
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <select required class="form-control" name="kode_kelas">
                            <option value="0" disabled="" selected="" >Pilih</option>

                       
                            
                            <option value="2" >1</option>
                            <option value="3" >2</option>
                            <option value="4" >3</option>
                       
                        </select>
                    </div>
                   
                   <div class="form-group">
                        <label for="">Jurusan</label>
                        <select required class="form-control" name="kode_jurusan">
                            <option value="0" disabled="" selected="" >Pilih</option>

                            <option value="1" >Farmasi</option>
                            <option value="2" >Rekayasa perngkat lunak</option>
                            <option value="3" >Teknik otomotif</option>
                            <option value="4" >Jasa boga</option>
                     
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