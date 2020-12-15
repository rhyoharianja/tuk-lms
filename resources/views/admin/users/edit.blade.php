@extends('layouts.app')

@section('title', 'Menu Data List')

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Halaman Ubah Data Pengguna</h5>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item" aria-current="page">Pengguna</li>
            <li class="breadcrumb-item active" aria-current="page">Ubah Data Pengguna</li>
        </ul>
        </nav>
    </div>
@endsection

@section('content')
    <div class="col-sm-12">
        <form class="card" action="{{route('users.update', $user->id)}}" method="PATCH">
            @csrf
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Form Ubah Pengguna</h4> </div>
            </div>
            <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="furl">Nama Pengguna</label>
                    {!! Form::text('name', $user->name, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="furl">Email Pengguna</label>
                    {!! Form::text('email', $user->email, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="furl">Password</label>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="furl">Konfirmasi Password</label>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                </div>
                 <div class="form-group">
                    <label for="furl">Hak Akses</label>
                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                </div>
                <div class="form-group">
                    <label for="furl">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="name" placeholder="Isi dengan Alpha Numerik" value="{{ $user->bod }}">
                 </div>
                 <div class="form-group">
                    <label for="furl">No. Telepon / Ponsel</label>
                    <input type="text" class="form-control" name="name" placeholder="Isi dengan Alpha Numerik" value="{{ $user->phone }}">
                 </div>
                 <div class="form-group">
                     <label for="furl">Alamat</label>
                     <textarea class="form-control" name="address"> {{ $user->address }}</textarea>
                  </div>
                  <div class="form-group">
                     <label for="furl">Kabupaten / Kota</label>
                     <input type="text" class="form-control" name="city" value="{{ $user->city }}">
                  </div>
                  <div class="row justify-content-end mb-3">
                    <div class="col-4">
                        <button type="button" class="btn btn-warning btn-block"> Batal </button>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-danger btn-md btn-block"> Simpan </button>
                    </div>
                  </div>
            </div>
        </form>
    </div>
@endsection
