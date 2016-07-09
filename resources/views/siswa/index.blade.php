@extends('layouts.layout')
@section('title')
  Ruang Administrator
@endsection



@section('content')

<div class="container bread">
    <ul class="breadcrumb"><li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Siswa</li>
    </ul>
</div>

    
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
@if ($users->count() > 0)
                @foreach ($users as $user)
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                <img src="//www.gravatar.com/avatar/{{ md5($user->email) }}?d=mm" alt="{{ $user->email }}" class="img-circle">
                                @if (!empty($user->first_name . $user->last_name))
                                    <h4>{{ $user->first_name . ' ' . $user->last_name}}</h4>
                                    <p>{{ $user->email }}</p>
                                @else
                                    <h4>{{ $user->email }}</h4>
                                @endif
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item text-center">
                                @if ($user->roles->count() > 0)
                                    {{ $user->roles->implode('name', ', ') }}
                                @else
                                    <em>No Assigned Role</em>
                                @endif
                                </li>
                            </ul>
                            <div class="panel-footer">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-default">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    Edit
                                </a>
                                <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger" data-method="delete" data-token="{{ csrf_token() }}">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="text-center">Tidak ada data pengguna</p>
                </div>          
            @endif
        </div>
    </div>
    {!! $users->render() !!}                    
</div>
@endsection

