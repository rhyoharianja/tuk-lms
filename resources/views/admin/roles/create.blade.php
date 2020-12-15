@extends('layouts.app')

@section('title', 'Menu Data List')

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Halaman Tambah Roles</h5>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item" aria-current="page">Roles</li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Roles</li>
        </ul>
        </nav>
    </div>
@endsection

@section('content')
    <div class="col-sm-12">
        <form class="card" action="{{route('roles.store')}}" method="POST">
            @csrf
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Form Tambah Role</h4> </div>
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
                    <label for="furl">Nama Role</label>
                    <input type="text" class="form-control" name="name" placeholder="Isi dengan Alpha Numerik">
                 </div>
                 <div class="form-group">
                    <label for="furl">Hak Akses</label>
                    <br/>
                    @foreach($permission as $value)
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                        <input type="checkbox" name="permission[]" value="{{$value->id}}" class="custom-control-input bg-danger" id="check-{{$value->id}}">
                            <label class="custom-control-label" for="check-{{$value->id}}">{{ $value->name }}</label>
                        </div>
                    <br/>
                    @endforeach
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
