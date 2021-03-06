@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
  <div class="row" >
      <div class="col-lg-8 col-lg-offset-2"  >
          <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Ubah jadwal Pelajaran</li>
          </ul>
      </div>
  </div>
</div>
      
<div class="container">
  <div class="row" >
    <div class="col-lg-8 col-lg-offset-2">
        <h1 class="page-header">Ubah Jadwal<button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button></h1>

      <div class="panel panel-default">
          <div class="panel-body">
             <form action="{{ URL('admin/jadwal',[$jadwal_pelajaran->id,'update'])}}" method="POST" role="form" enctype="multipart/form-data" >
             {{csrf_field()}}
              <div class="form-group">
                  <label for="">NIP</label>
                  <select class="form-control" name="nip" id="nip">
                      <option value="0" disabled="" selected="">Pilih NIP</option>
                      @foreach ($guru as $data)
                          @if ($jadwal_pelajaran->guru_id==$data->id)
                            <option selected value="{{$data->id}}">{{$data->nomor_induk}} {{$data->full_name}}</option>  
                          @else
                              <option value="{{$data->id}}">{{$data->nomor_induk}} {{$data->full_name}}</option>
                          @endif
                         
                      @endforeach
                  </select>
              </div>
             
              <div class="form-group">
                  <label for="">Kelas dan Jurusan</label>
                  <select required class="form-control" name="kelasjurusan_id" id="kj">
                      <option value="0" disabled="" selected="" >Pilih Kelas dan Jurusan</option>
                      @foreach ($kelas_jurusan as $data)
                          @if ($jadwal_pelajaran->kelasjurusan_id==$data->id)
                            <option selected value="{{$data->id}}">{{$data->kelas->nama}} {{$data->kelas->jurusan}}</option>  
                          @else
                            <option value="{{$data->id}}">{{$data->kelas->nama}} {{$data->kelas->jurusan}}</option>  
                          @endif
                         
                      @endforeach
                  </select>
              </div>  

              <div class="form-group">
                  <label for="">Pilih Mata Pelajaran</label>
                  <select class="form-control" name="mapel_id" id="kj">
                      <option value="" disabled="" selected="">Pilih Mata Pelajaran</option>
                      @foreach ($mapel as $data)
                          @if ($jadwal_pelajaran->mapel_id==$data->id)
                            <option selected value="{{$data->id}}">{{$data->kode}}</option>  
                          @else
                            <option value="{{$data->id}}">{{$data->kode}}</option>  
                          @endif
                         
                      @endforeach
                  </select>
              </div>

              <div class="form-group">
                  <label for="">Pilih Semester</label>
                  <select class="form-control" name="semester">
                      <option value="0" disabled="" selected="">Pilih Semester</option>
                      @for ($i = 1; $i <=6; $i++)
                              @if ($jadwal_pelajaran->semester==$i)
                                <option selected value="{{$i}}">Semester {{$i}}</option>  
                              @else
                                <option value="{{$i}}">Semester {{$i}}</option>  
                              @endif
                      @endfor
                  </select>
              </div>

              <div class="form-group">
                  <label for="">Tahun Ajaran</label>
                  <input value="{{ $jadwal_pelajaran->tahun_ajaran }}" class="form-control" type="text" name="tahun_ajar" placeholder=" contoh:2014/2015">
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




