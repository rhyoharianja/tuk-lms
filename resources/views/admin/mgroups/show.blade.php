@extends('layouts.app')

@section('title', 'Menu Data List')

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Halaman Detail Tipe Buku</h5>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item" aria-current="page">Grup / Tipe</li>
            <li class="breadcrumb-item active" aria-current="page">Detail Tipe/ Grup Buku </li>
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
                    <label for="furl">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Isi dengan Alpha Numerik" value="{{ $mgroups->mg_name }}" disabled>
                 </div>
                 <div class="form-group">
                    <label for="furl">Deskripsi</label>
                    <input type="text" class="form-control" name="name" placeholder="Isi dengan Alpha Numerik" value="{{ $mgroups->mg_description }}" disabled>
                 </div>
            </div>
        </form>
    </div>
@endsection
