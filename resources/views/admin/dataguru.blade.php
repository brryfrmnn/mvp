@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')
<div class="container bread">
	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
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
							<th>NIP</th>
							<th>Nama</th>
            				<th>Alamat</th>
							<th>Jenis Kelamin</th>
							<th>Wali Kelas</th>
							<th width="35%">Aksi</th>

						</tr>
						 @foreach ($guru as $data)				
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $data->nomor_induk }}</td>
							<td>{{ $data->first_name }} {{ $data->last_name }}</td>
            			<td>Bandung</td>
            			<td>Perempuan</td>
            			<td>
								@if ($data->wali_kelas)
									<a href="{{ URL('admin/guru/edit')}}" class="btn btn-orange">Ya. Jadikan Guru&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								@else
									<a href="{{ URL('admin/guru/edit')}}" class="btn btn-info">Tidak. Jadikan Wali Kelas</a>
								@endif
							</td>
							<td>
							<form action="{{ URL('admin/guru',[$data->id,'delete'])}}" method="POST" accept-charset="utf-8">
                            {{csrf_field()}}
                            <a href="{{ URL('admin/guru',[$data->id,'edit'])}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
							<a href="{{ URL('admin/guru/edit')}}" class="btn btn-warning"><i class="glyphicon glyphicon-eye-open"></i> Detail</a>
							
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