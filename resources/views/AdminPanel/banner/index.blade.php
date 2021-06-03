@extends('AdminPanel.master')
@section('title','S A Admin | Banner')
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('adminpanel/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Banner</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <!-- /.card-header -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="row">
                        <div class="col-4" style="padding-top: 10px;">
                          <div class="card">
                        <div class="card-primary">
                          {{-- <div class="card card-primary"> --}}
                          <div class="card-header">
                            <h3 class="card-title"><small>Banner</small></h3>
                          </div>
                        <form action="{{url('admin/banner')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                  <div class="form-group">
                                    <label for="">Upload Banner</label>
                                    <input type="file" name="bimage" class="form-control" style="padding: 5px 0px 35px 10px; !important" required>
                                  </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                            </div> 
                        </form>
                        </div>
                </div>
              </div>
                <div class="col-8" style="padding-top:10px; !important">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Banner</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Banner</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $data)
                                    <tr>
                                    <td>{{$data->id}}</td>
                                    <td> <img src="{{asset('storage/'.$data->bimage)}}" height="80px" width="150px"> </td>
                                    <td>
                                    <a href="{{ url('admin/editbanner') }}/{{ $data->id }}">Edit</a>&nbsp;
                                    <a onclick="return confirm('Are you sure want to delete?')" href="{{url('admin/deletebanner')}}/{{ $data->id }}">Delete</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection
@push('css')
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset ('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('public/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
@push('js')
<!-- DataTables -->
<script src="{{ asset ('public/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('public/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('public/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset ('public/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
     $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
<!--Data Table End -->
@endpush