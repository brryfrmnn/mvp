@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
  	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
  		<li class="active">Detail Siswa</li>
  	</ul>
</div>
<div class="container">
				<h1 class="page-header">Data Siswa<button onclick="history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</button>&nbsp;&nbsp;&nbsp;
        <button class="btn btn-warning"  data-toggle="modal" data-target="#change_all">Naik Kelas Semua</button>
        <!-- Modal -->
          <div class="modal fade" id="change_all" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Naik Kelas</h4>
                </div>
                <form action="{{ URL('admin/data/kelasjurusan/ubahkelas/all')}}" method="POST" accept-charset="utf-8">
                  <div class="modal-body">
                  
                      {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$kelasjurusan_id}}">
                      <input type="hidden" name="redirect" value="{{$kelasjurusan_id}}">
                      <div class="form-group">
                          <label >Semester</label>
                          <select name="semester" class="form-control" required="required">
                            
                            
                            @for ($i = 1; $i < 7; $i++)
                              <option value="{{$i}}">Semester {{$i}}</option>

                            @endfor
                          </select>
                      </div>
                      <div class="form-group">
                          <label >Kelas</label>
                          <select name="kelasjurusan_id" class="form-control" required="required">
                            <option value="0" selected disabled>Pilih Kelas</option>
                            @foreach (\App\KelasJurusan::all() as $datakj)
                              <option value="{{$datakj->id}}">{{$datakj->kelas_jurusan}}</option>
                            @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button  type="submit" class="btn btn-primary">Naik Kelas</button>
                  </div>
               </form>
              </div>
            </div>
          </div>

          <script type="text/javascript">
            $('#changeall').on('shown.bs.modal', function () {
              $('#changepwd').focus()
            })
          </script>


        </h1>
  				<table class="table table-striped">
  						<tr>
  							<th>No</th>
  							<th>NIS</th>
  							<th>Nama</th>
                <th>Aksi</th>
  						</tr>	
              @foreach ($siswa as $data)	
  						<tr>
  							<td>{{$no++}}</td>
  							<td>{{$data->nomor_induk}}</td>
  							<td>{{$data->full_name}}</td>
                <td>
                    <button class="btn btn-warning"  data-toggle="modal" data-target="#change_{{$data->id}}">Naik Kelas</button>
                  <!-- Modal -->
                    <div class="modal fade" id="change_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Naik Kelas</h4>
                          </div>
                          <form action="{{ URL('admin/data/kelasjurusan/ubahkelas')}}" method="POST" accept-charset="utf-8">
                            <div class="modal-body">
                            
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <input type="hidden" name="redirect" value="{{$kelasjurusan_id}}">
                                <div class="form-group">
                                  <label >Semester</label>
                                  <select name="semester" class="form-control" required="required">
                                    
                                    
                                    @for ($i = 1; $i < 7; $i++)
                                      <option value="{{$i}}">Semester {{$i}}</option>

                                    @endfor
                                  </select>
                              </div>
                                <div class="form-group">
                                    <label >Kelas</label>
                                    <select name="kelasjurusan_id" class="form-control" required="required">
                                      <option value="0" selected disabled>Pilih Kelas</option>
                                      @foreach (\App\KelasJurusan::all() as $datakj)
                                        <option value="{{$datakj->id}}">{{$datakj->kelas_jurusan}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button  type="submit" class="btn btn-primary">Naik Kelas</button>
                            </div>
                         </form>
                        </div>
                      </div>
                    </div>

                    <script type="text/javascript">
                      $('#change').on('shown.bs.modal', function () {
                        $('#changepwd').focus()
                      })
                    </script>


                {{-- <a href="{{ URL('admin/data/kelasjurusan/ubahkelas?id='.$data->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i>Ubah Kelas</a></td> --}}
  						</tr>
              @endforeach
  				</table>
          {{-- <div class="text-center">
            {!! $pengumuman->links() !!}
          </div> --}}
</div>
@endsection

@push('scripts')
    <script src="{{URL::asset('assets/select2/js/select2.min.js')}}"></script>
    <script>
            $(document).ready(function () {
                $("#kj").select2({
                    placeholder: "Please Select"
                });
            });
        </script>
@endpush