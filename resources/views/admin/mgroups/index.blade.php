@extends('layouts.app')

@section('title', 'Tipe Media Data List')

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Daftar Tipe / Group Media</h5>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item" aria-current="page">Media</li>
            <li class="breadcrumb-item active" aria-current="page">Daftar List Tipe Media</li>
        </ul>
        </nav>
    </div>
@endsection

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Data Seluruh Tipe Buku</h4>
                </div>
            </div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
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
                                <a class="bg-danger" href="{{ route('mgroups.create') }}">
                                    <i class="las la-md la-plus-square"></i>
                                    Tambah Tipe / Group Buku
                                </a>
                            </div>
                        </div>
                    </div>
                    <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th width="280px">Action</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach ($mgroups as $mgroup)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $mgroup->mg_name }}</td>
                                <td>{{ $mgroup->mg_description }}</td>
                                <td>
                                    <a class="text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="{{ route('mgroups.show',$mgroup->id) }}"><i class="las la-lg la-eye"></i></a>
                                    <a class="text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ route('mgroups.edit',$mgroup->id) }} }}"><i class="las la-lg la-edit"></i></a>
                                    <a class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{ route('mgroups.destroy', $mgroup->id) }}"><i class="las la-lg la-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row justify-content-between mt-3">
                    {!! $mgroups->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
