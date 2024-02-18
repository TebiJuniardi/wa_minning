@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.sidebar')
@section('master_wa','menu-open')
@section('title','Setting')
{{-- @section('create_master_wa','active') --}}
@section('content')
{{-- <div class="content-wrapper"> --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('title')</h1>
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
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Select2 (Default Theme)</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('update-setting')}}" method="POST"
                        enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Delay Start Minning</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="start_delay_minning"
                                    value="{{$setting->start_delay_minning}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Delay Finish Minning</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="finish_delay_minning"
                                    value="{{$setting->finish_delay_minning}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Grouping</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="grouping" value="{{$setting->grouping}}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Delay Start Blash</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="start_delay_blash"
                                    value="{{$setting->start_delay_blash}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Delay Finish Blash</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="finish_delay_blash"
                                    value="{{$setting->finish_delay_blash}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Max Group Blash</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="max_group_blash"
                                    value="{{$setting->max_group_blash}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Delay Start Group Blash</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="start_delay_group_blash"
                                    value="{{$setting->start_delay_group_blash}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Delay Finish Group Blash</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="finish_delay_group_blash"
                                    value="{{$setting->finish_delay_group_blash}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="button" class="btn btn-danger" onclick="clearFields()">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
{{-- </div> --}}
@endsection