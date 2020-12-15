@extends('layouts.app')

@section('title', 'Pengguna Data List')

@section('header')
    <div class="navbar-breadcrumb">
        <h5 class="mb-0">Daftar Pengguna</h5>
        <nav aria-label="breadcrumb">
        <ul class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item" aria-current="page">Pengguna</li>
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
                    <h4 class="card-title">Data Seluruh Pengguna</h4> </div>
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
                                <a class="bg-danger" href="{{ route('users.create') }}">
                                    <i class="las la-md la-plus-square"></i>
                                    Tambah Pengguna
                                </a>
                            </div>
                        </div>
                    </div>
                    <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>@sortablelink('name', 'Name')</th>
                                <th>@sortablelink('email', 'Description')</th>
                                <th>Level</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-success tuk-btn-crud" data-toggle="tooltip" data-placement="top" title="" data-original-title="show" href="{{ route('users.show',$user->id) }}"><i class="las la-lg la-eye"></i></a>
                                        <a class="btn btn-outline-primary tuk-btn-crud" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ route('users.edit',$user->id) }}"><i class="las la-lg la-edit"></i></a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                            <button type="submut" class="btn btn-outline-danger tuk-btn-crud">
                                                <i class="las la-lg la-trash"></i>
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row justify-content-between mt-3">
                    {{ $data->links('vendor.pagination.tuk-table') }}
                    {!! $data->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
