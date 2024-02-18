@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.sidebar')
@section('master_wa','menu-open')
@section('list_wa_number','active')
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
                <h3 class="card-title">List WA Number</h3>

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
                                        <option value="active" {{ $row->status ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ !$row->status ? 'selected' : '' }}>Non-Active</option>
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
<script type="text/javascript">
    function del(id) {
      Swal.fire({
        title: 'Are you sure?',
        text: "Deleted data cannot be recovered.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete',
        cancelButtonText: 'Cancel'
      }).then((result) => {
        if (result.value) {
          window.location.href = "{{ url('master/delete-master-wa') }}"+'/'+id;
        }
      })
    }
</script>
<script>
    
</script>
