@extends('layouts.app')

@section('title', 'Menu Data List')

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Halaman Detail Pengguna</h5>
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
        <form class="card">
            @csrf
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Form Detail Pengguna</h4> </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="furl">Nama Pengguna</label>
                    <input type="text" class="form-control" name="name" placeholder="Isi dengan Alpha Numerik" value="{{ $user->name }}" disabled>
                 </div>
                 <div class="form-group">
                    <label for="furl">Email Pengguna</label>
                    <input type="text" class="form-control" name="name" placeholder="Isi dengan Alpha Numerik" value="{{ $user->email }}" disabled>
                 </div>
                 <div class="form-group">
                     <label for="furl">Tanggal Lahir</label>
                     <input type="text" class="form-control" name="name" placeholder="Isi dengan Alpha Numerik" value="{{ $user->bod }}" disabled>
                  </div>
                  <div class="form-group">
                     <label for="furl">No. Telepon / Ponsel</label>
                     <input type="text" class="form-control" name="name" placeholder="Isi dengan Alpha Numerik" value="{{ $user->phone }}" disabled>
                  </div>
                  <div class="form-group">
                      <label for="furl">Alamat</label>
                      <textarea class="form-control" disabled> {{ $user->address }}</textarea>
                   </div>
                   <div class="form-group">
                      <label for="furl">Kabupaten / Kota</label>
                      <input type="text" class="form-control"value="{{ $user->city }}" disabled>
                   </div>
                   <div class="form-group">
                    <label for="furl">Roles</label>
                    <br/>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="btn btn-success btn-lg">{{ $v }}</label>
                        @endforeach
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
