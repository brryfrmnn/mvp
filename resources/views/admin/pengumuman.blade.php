@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
		<li class="active">Pengumuman</li>
	</ul>
</div>

	
<div class="container">
@if (session('message'))
    <div class="alert alert-{{session('alert')}}">
        <p>{{session('message')}}
        </p>
    </div>  
@endif

      <h1 class="page-header">Pengumuman <a href="{{URL ('admin/pengumuman/tambah')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus-sign"></i> Tambah</a></h1>
          <div class="box-body table-responsive" >
              <table class="table table-striped">
              		<tr>
              			<th>No</th>
              			<th>JUDUL</th>
                    <th>ISI</th>
                    <th>ADMIN</th>
              			<th>Aksi</th>
              		</tr>

              		 @foreach ($pengumuman as $data)				
              		<tr>
              			<td>{{ $no++ }}</td>
              			<td>{{ $data->judul }} </td>
                    <td>{{ str_limit($data->isi,140) }} </td>
                    <td>{{ $data->user->first_name }} </td>
              			<td><a href="{{ URL('admin/pengumuman',[$data->id,'edit'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>&nbsp&nbsp&nbsp
              			<form action="{{ URL('admin/pengumuman',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
              			{{csrf_field()}}
              			<button onclick="return confirm('yakin akan di hapus?')" class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Hapus</button>
              			</form>
              			&nbsp&nbsp&nbsp
              			<a href="{{ URL('admin/pengumuman',[$data->id,'detail'])}}" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a></td>
              		</tr>
              		@endforeach
              </table>
          </div>

          <div class="text-center">
          	{!! $pengumuman->links() !!}
          </div>
</div>


@endsection