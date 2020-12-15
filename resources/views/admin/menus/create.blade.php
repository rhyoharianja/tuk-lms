@extends('layouts.app')

@section('title', 'Menu Data List')

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Halaman Tambah Menu</h5>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item" aria-current="page">Menu</li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Menu</li>
        </ul>
        </nav>
    </div>
@endsection

@section('content')
    <div class="col-sm-12">
        <form class="card" action="{{route('menus.store')}}" method="POST">
            @csrf
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Form Tambah Menu</h4> </div>
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
                    <label for="furl">Nama Menu</label>
                    <input type="text" class="form-control" name="menu_name" placeholder="Isi dengan Alpha Numerik">
                 </div>
                 <div class="form-group">
                     <label for="furl">Deskripsi Menu</label>
                     <textarea type="text" class="form-control" name="menu_desc" placeholder="Isi dengan Alpha Numerik"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="furl">Icon Menu</label>
                      <input type="text" class="form-control" name="menu_icon" placeholder="Isi dengan Alpha Numerik">
                   </div>
                  <div class="form-group">
                     <label for="furl">Link Menu</label>
                     <input type="text" class="form-control" name="menu_route" placeholder="Isi dengan Alpha Numerik">
                  </div>
                 <div class="form-group">
                    <label>Tipe Menu</label>
                    <select class="form-control" name="menu_type">
                       <option value="">Pilih Tipe</option>
                       @foreach($types as $type)
                            <option value={{ $type['value'] }}>{{ $type['text'] }}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label for="furl">Level Menu</label>
                    <input type="number" class="form-control" name="menu_level" placeholder="Isi dengan Numerik">
                 </div>
                 <div class="form-group">
                    <label for="furl">Urutan Menu</label>
                    <input type="number" class="form-control" name="menu_order" placeholder="Isi dengan Numerik">
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
                  <div class="form-group">
                     <label>Parent Menu</label>
                     <select class="form-control" name="parent_id">
                        <option value=0>Pilih Parent Menu</option>
                        @foreach($lists as $list)
                            <option value={{ $list->id }}>{{ $list->menu_name }}</option>
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
