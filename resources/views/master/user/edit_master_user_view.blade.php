@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.sidebar')
@section('master_user','menu-open')
@section('create_master_user','active')
@section('body')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item active"></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Update User</h3>

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
                <div class="col-md-12">
                  <form class="form-horizontal" action="{{route('update-master-user')}}" method="POST" enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Fullname</label>
                        <div class="col-sm-12">
                          <input type="hidden" class="form-control" id="id" name="id" value="{{$data->id}}">
                          <input type="text" class="form-control" id="fullname" name="fullname" value="{{$data->fullname}}" placeholder="Fullname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Position</label>
                        <div class="col-sm-12">
                            <select class="form-control" id="position" name="position">
                                <option value="{{$data->position}}">{{$data->position}}</option>
                                <option value="ADMINISTRATOR">ADMINISTRATOR</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-12">
                          <textarea class="form-control" id="address" name="address" placeholder="Address">{{$data->address}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" id="date" name="date" value="{{$data->date}}" placeholder="Date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="username" name="username" value="{{$data->username}}" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">New Password</label>
                        <div class="col-sm-12">
                          <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
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
              </div>
              <!-- /.card-body -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->