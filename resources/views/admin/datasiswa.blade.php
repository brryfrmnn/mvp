@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Data Siswa</li>
	</ul>
</div>
	
<div class="container">
			@if (session('message'))
            <div class="alert alert-{{session('alert')}}">
                <p>{{session('message')}}</p>
            </div>  
        	@endif
			<h1 class="page-header">Data Siswa <a href="{{ URL('admin/siswa/tambah')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah data</a>
			</h1>

	      	<div class="box-body table-responsive" >
				<table class="table table-striped">
					<tr>
						<th>No</th>
						<th>NIS</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th width="10%">Ubah Password</th>
						<th width="25%">Aksi</th>
					</tr>
              		@foreach ($users as $data)		
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $data->nomor_induk }}</td>
						<td>{{ $data->first_name }} {{ $data->last_name }}</td>
						<td>{{ $data->siswa->kelasJurusan->kelas_jurusan}}</td>
          				
          				<td>
							
							<button class="btn btn-warning"  data-toggle="modal" data-target="#change_{{$data->id}}">Ubah password</button>
							<!-- Modal -->
								<div class="modal fade" id="change_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        <h4 class="modal-title" id="myModalLabel">Ubah Password</h4>
								      </div>
								      <form action="{{ URL('admin/siswa/change')}}" method="POST" accept-charset="utf-8">
									      <div class="modal-body">
												
						                            {{csrf_field()}}
						                            <input type="hidden" name="user_id" value="{{$data->id}}">
						                            <input type="hidden" name="status" value="1">
						                            <div class="form-group">
						                            	<label>Password</label>
						                            	<input type="password" name="password" class="form-control">
						                            </div>
						                            <div class="form-group">
						                            	<label>Confirm Password</label>
						                            	<input type="password" name="password_confirmation" class="form-control">
						                            </div>
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        <button  type="submit" class="btn btn-primary">Ubah Password</button>
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
						</td>
          				
          				<td>
	                        <form action="{{ URL('admin/siswa',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
	                        {{csrf_field()}}
	                        <a href="{{ URL('admin/siswa',[$data->id,'edit'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
	                        <a href="{{ URL('admin/siswa/detail?id='.$data->id)}}" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a>
	                        <button onclick="return confirm('Yakin akan menghapus data ini?')" class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
	                        </form>
                        </td>
					</tr>
  					@endforeach	
				</table>
				<div class="text-center">
					{{$users->links()}}
				</div>	
			</div>
</div>
@endsection