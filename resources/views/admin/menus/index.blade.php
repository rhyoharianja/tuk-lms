@extends('layouts.app')

@section('title', 'Menu Data List')

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Daftar Menu</h5>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item" aria-current="page">Menu</li>
            <li class="breadcrumb-item active" aria-current="page">Daftar List</li>
        </ul>
        </nav>
    </div>
@endsection

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Data Seluruh Menu</h4> </div>
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
                                <a class="bg-danger" href="{{route('menus.create')}}">
                                    <i class="las la-md la-plus-square"></i>
                                    Tambah Menu
                                </a>
                            </div>
                        </div>
                    </div>
                    <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                        <thead>
                            <tr>
                                <th>@sortablelink('menu_name', 'Name')</th>
                                <th>@sortablelink('menu_desc', 'Description')</th>
                                <th>@sortablelink('menu_route', 'Route')</th>
                                <th>@sortablelink('menu_type', 'Type')</th>
                                <th>@sortablelink('menu_level', 'Level')</th>
                                <th>@sortablelink('menu_active', 'Status')</th>
                                <th>@sortablelink('parent_id', 'Parent')</th>
                                <th style="min-width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($menus as $menu)

                                <tr>
                                    <td>{{$menu->menu_name}}</td>
                                    <td>{{$menu->menu_desc}}</td>
                                    <td>{{$menu->menu_route}}</td>
                                    <td>{{$menu->menu_type}}</td>
                                    <td>{{$menu->menu_level}}</td>
                                    <td>@if ($menu->menu_active == 1) <div class="badge badge-success">Aktif</div> @else <div class="badge badge-dark">Tidak Aktif</div> @endif</td>
                                    <td> @if ($menu->menu_parent != null) {{$menu->menu_parent['menu_name']}} @endif</td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="{{ route('menus.show',$menu->id) }}"><i class="las la-lg la-eye"></i></a>
                                            <a class="text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ route('menus.edit',$menu->id) }}"><i class="las la-lg la-edit"></i></a>
                                            <a class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{ route('menus.destroy',$menu->id) }}"><i class="las la-lg la-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            @empty

                            <tr>
                                <td colspan="8"> Belum Ada Daftar Menu </td>
                            </tr>

                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="row justify-content-between mt-3">
                    {{ $menus->links('vendor.pagination.tuk-table') }}
                </div>
            </div>
        </div>
    </div>
@endsection
