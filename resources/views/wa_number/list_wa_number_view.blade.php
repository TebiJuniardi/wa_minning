@extends('layouts.header')
@extends('layouts.sidebar')
@extends('layouts.footer')
@section('content')
@section('title','List Wa Number')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>
                    @yield('title')
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-md-12">
                            <table id="myTable" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">No</th>
                                        <th>WA Name</th>
                                        <th>Nama</th>
                                        <th>IP</th>
                                        <th>Port</th>
                                        <th>WA Number</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_wa as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ str_replace('#', '', $row->name) }}</td>
                                        <td>{{ $row->ip }}</td>
                                        <td>{{ $row->port }}</td>
                                        <td contenteditable>{{ $row->phone }}</td>
                                        <td contenteditable>{{ $row->description }}</td>
                                        <td>
                                            <select class="form-select" data-id="{{ $row->id }}">
                                                <option value="active" {{ $row->status ? 'selected' : '' }}>Active
                                                </option>
                                                <option value="inactive" {{ !$row->status ? 'selected' : '' }}>
                                                    Non-Active</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">Save</a>
                                            <a href="#" class="btn btn-danger btn-sm">Print</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal -->
</section>
<!-- /.content -->
@endsection
