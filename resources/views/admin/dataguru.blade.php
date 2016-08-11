@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Data Guru</li>
	</ul>
</div>

<div class="container">
@if (session('message'))
    <div class="alert alert-{{session('alert')}}">
        <p>{{session('message')}}
        </p>
    </div>  
@endif
	<h1 class="page-header">Data Guru <a href="{{ URL('admin/guru/tambah')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Guru</a></h1>
	<table class="table table-striped">
			<tr>
				<th>No</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jenis Kelamin</th>
				<th width="10%">Wali Kelas</th>
				<th width="25%">Aksi</th>

			</tr>
			 @foreach ($guru as $data)				
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $data->nomor_induk }}</td>
				<td>{{ $data->first_name }} {{ $data->last_name }}</td>
				<td>{{ $data->email}}</td>
				<td>{{ $data->jenis_kelamin}}</td>
			<td>
					@if ($data->wali_kelas)
						<form action="{{ URL('admin/guru/wali')}}" method="POST" accept-charset="utf-8">
                            {{csrf_field()}}
                            <input type="hidden" name="guru_id" value="{{$data->id}}">
                            <input type="hidden" name="status" value="0">
                            <input type="hidden" name="kelasjurusan_id" value="{{$kelasjurusan_id}}">
                            <button class="btn btn-orange" style="padding: 6px 18px;" type="submit">Ya. Jadikan Guru Biasa</button>
                        </form>
					@else
						<button class="btn btn-info"  data-toggle="modal" data-target="#myModal_{{$data->id}}">Tidak. Jadikan Wali Kelas</button>
						<!-- Modal -->
							<div class="modal fade" id="myModal_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Pilih Kelas</h4>
							      </div>
							      <form action="{{ URL('admin/guru/wali')}}" method="POST" accept-charset="utf-8">
								      <div class="modal-body">
											
					                            {{csrf_field()}}
					                            <input type="hidden" name="guru_id" value="{{$data->id}}">
					                            <input type="hidden" name="status" value="1">
					                            <select name="kelasjurusan_id" id="inputKelasjurusan_id" class="form-control" required="required">
					                            	<option value="0" selected disabled>Pilih Kelas</option>
					                            	@foreach ($kelasjurusan as $datakj)
					                            		<option value="{{$data->id}}">{{$datakj->kelas_jurusan}}</option>
					                            	@endforeach
					                            </select>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								        <button  type="submit" class="btn btn-primary">Jadikan Wali Kelas</button>
								      </div>
								   </form>
							    </div>
							  </div>
							</div>

							<script type="text/javascript">
								$('#myModal').on('shown.bs.modal', function () {
								  $('#myInput').focus()
								})
							</script>
                        
					@endif
				</td>
				<td>
				<form action="{{ URL('admin/guru',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
                {{csrf_field()}}
                <a href="{{ URL('admin/guru',[$data->id,'edit'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
				<a href="{{ URL('admin/guru/detail')}}" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a>
                <button onclick="return confirm('yakin akan di hapus?')" class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
                </form>
				</td>
			</tr>
			@endforeach
	</table>
	<div class="text-center">
		{!! $guru->links() !!}
	</div>		
</div>
@endsection