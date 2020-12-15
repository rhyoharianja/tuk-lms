@extends('layouts.app')

@section('title', 'Author Data List')

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Daftar Author / Penulis</h5>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item" aria-current="page">Author</li>
            <li class="breadcrumb-item active" aria-current="page">Daftar List Author / Penulis</li>
        </ul>
        </nav>
    </div>
@endsection

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Data Seluruh Author / Penulis</h4> </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row justify-content-between">
                        <div class="col-sm-6 col-md-6">
                            <div id="user_list_datatable_info" class="dataTables_filter">
                                <form class="mr-3 position-relative">
                                    <div class="form-group mb-0">
                                        <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table"> </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="user-list-files d-flex">
                                <a class="bg-danger" href="{{route('mauthors.create')}}">
                                    <i class="las la-md la-plus-square"></i>
                                    Tambah Author / Penulis
                                </a>
                            </div>
                        </div>
                    </div>
                    <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                        <thead>
                            <tr>
                                <th>@sortablelink('au_photo', 'Photo')</th>
                                <th>@sortablelink('au_fullname', 'Nama Lengkap')</th>
                                <th>@sortablelink('au_bod', 'Tanggal Lahir')</th>
                                <th>@sortablelink('au_email', 'Email')</th>
                                <th>@sortablelink('au_phone', 'Telepon')</th>
                                <th>@sortablelink('au_nationality', 'Kenegaraan')</th>
                                <th>@sortablelink('au_active', 'Status')</th>
                                <th style="min-width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($mauthors as $mauthor)

                                <tr>
                                    <td>{{$mauthor->au_photo}}</td>
                                    <td>{{$mauthor->au_fullname}}</td>
                                    <td>{{$mauthor->au_bod}}</td>
                                    <td>{{$mauthor->au_email}}</td>
                                    <td>{{$mauthor->au_phone}}</td>
                                    <td>{{$mauthor->au_nationality}}</td>
                                    <td>@if ($mauthor->au_active == 1) <div class="badge badge-success">Aktif</div> @else <div class="badge badge-dark">Tidak Aktif</div> @endif</td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="{{ route('mauthors.show',$menu->id) }}"><i class="las la-lg la-eye"></i></a>
                                            <a class="text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ route('mauthors.edit',$menu->id) }}"><i class="las la-lg la-edit"></i></a>
                                            <a class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{ route('mauthors.destroy',$menu->id) }}"><i class="las la-lg la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            @empty

                            <tr>
                                <td colspan="8"> Belum Ada Daftar Author / Penulis </td>
                            </tr>

                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="row justify-content-between mt-3">
                    {{ $mauthors->links('vendor.pagination.tuk-table') }}
                </div>
            </div>
        </div>
    </div>
@endsection
