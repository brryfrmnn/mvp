@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
      <div class="row" >
        <div class="col-lg-8 col-lg-offset-2"  >
      <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Tambah jadwal Pelajaran</li>
      </ul>
</div>
</div>
</div>
      
</div>
      <div class="container">
        <div class="row" >
        <div class="col-lg-8 col-lg-offset-2">
        @if (session('message'))
                    <div class="alert alert-{{session('alert')}}">
                        <p>{{session('message')}}</p>
                    </div>  
        @endif
        <h1 class="page-header">Tambah Jadwal<button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button></h1>

            <div class="panel panel-default">
                <div class="panel-body">
                   <form action="{{ URL('admin/jadwal')}}" method="POST" role="form" enctype="multipart/form-data" >
                   {{csrf_field()}}
                    <div class="form-group">
                        <label for="">NIP</label>
                        <select class="form-control" name="nip" id="nip">
                            <option value="0" disabled="" selected="">Pilih NIP</option>
                            @foreach ($guru as $data)
                               <option value="{{$data->id}}">{{$data->nomor_induk}} {{$data->full_name}}</option>
                            @endforeach
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="">Kelas dan Jurusan</label>
                        <select required class="form-control" name="kelasjurusan_id" id="kj">
                            <option value="0" disabled="" selected="" >Pilih Kelas dan Jurusan</option>
                            @foreach ($kelas_jurusan as $data)
                              <option value="{{$data->id}}" >{{$data->kelas->nama}} {{$data->jurusan->nama}}</option>
                            @endforeach
                           
                     
                        </select>
                    </div>  

                    <div class="form-group">
                        <label for="">Pilih Mata Pelajaran</label>
                        <select class="form-control" name="mapel_id" id="mapel">
                            <option value="" disabled="" selected="">Pilih Mata Pelajaran</option>
                            @foreach($mapel as $data)
                            <option value="{{$data->id}}">{{$data->kode}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Pilih Semester</label>
                        <select class="form-control" name="semester">
                            <option value="0" disabled="" selected="">Pilih Semester</option>
                            <option value="1"> Semester 1</option>
                            <option value="2"> Semester 2</option>
                            <option value="3"> Semester 3</option>
                            <option value="4"> Semester 4</option>
                            <option value="5"> Semester 5</option>
                            <option value="6"> Semester 6</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Tahun Ajaran</label>
                        <input value="" class="form-control" type="text" name="tahun_ajar" placeholder="2014/2015">
                    </div>


                   
                   
                    
                   
                    <button type="submit" class="btn btn-orange" name="simpan">Simpan</button>
                   </form>
                </div>
            </div>
       
        </div>
    
    </div>
      </div>

      
                  
                              
@endsection


@push('scripts')
    <script src="{{URL::asset('assets/select2/js/select2.min.js')}}"></script>
    <script>
            $(document).ready(function () {
                $("#nip").select2({
                    placeholder: "Please Select"
                });
                 $("#kj").select2({
                    placeholder: "Please Select"
                });
                  $("#mapel").select2({
                    placeholder: "Please Select"
                });
            });
        </script>
@endpush




