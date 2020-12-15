@extends('layouts.app')

@section('title', 'Data List Author / Penulis')

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Halaman Tambah Menu</h5>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item" aria-current="page">Author / Penulis</li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Author / Penulis</li>
        </ul>
        </nav>
    </div>
@endsection

@section('content')
    <div class="col-sm-12">
        <form class="card" action="{{route('mauthors.store')}}" method="POST">
            @csrf
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Form Tambah Author / Penulis</h4> </div>
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
                    <label for="furl">Gambar / Photo</label>
                    {{-- <input type="file" class="form-control" name="au_photo" placeholder="Isi dengan Alpha Numerik"> --}}
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input form-control" id="customFile" name="filename">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="furl">Nama Lengkap</label>
                     <input type="text" class="form-control" name="au_fullname" placeholder="Isi dengan Alpha Numerik">
                  </div>
                  <div class="form-group">
                      <label for="furl">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="au_bod" placeholder="Isi dengan Alpha Numerik">
                   </div>
                  <div class="form-group">
                     <label for="furl">Email</label>
                     <input type="text" class="form-control" name="au_email" placeholder="Isi dengan Alpha Numerik">
                  </div>
                 <div class="form-group">
                    <label for="furl">Telepon / Ponsel</label>
                    <input type="number" class="form-control" name="au_phone" placeholder="Isi dengan Numerik">
                 </div>
                 <div class="form-group">
                    <label for="furl">Kenegaraan</label>
                    <input type="number" class="form-control" name="au_nationality" placeholder="Isi dengan Numerik">
                 </div>
                 <div class="form-group">
                     <label>Status Aktif Menu</label>
                     <select class="form-control" name="menu_active">
                        <option value=null>Pilih Status Aktif</option>
                        @foreach($status as $stat)
                            <option value={{ $stat['value'] }}>{{ $stat['text'] }}</option>
                        @endforeach
                     </select>
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
