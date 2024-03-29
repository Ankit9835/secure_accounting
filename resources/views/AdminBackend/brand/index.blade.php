@extends('AdminBackend.master')
@section('title','S A Admin | Brand')
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
              <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Brand</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Brands</h3>
                      <div style="padding:0px 2px 0px 86%; display:block;"><a href="{{url('admin/addbrand')}}"><i class="fas fa-plus-square">&nbsp;Add New Brand</i></a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Brands Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($data as $datas)
                                    <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$datas->bname}}</td>
                                    <td>{{$datas->description}}</td>
                                    <td>{{$datas->status}}</td>
                                    <td> <a href="{{route('vieweditbrand',$datas->id)}}"><i class="fa fa-edit"></i></a></a>
                                        <a href="{{route('deletebrand',$datas->id)}}" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a></a>
                                   </td>
                                    </tr>
                                    @php 
                                        $i++;
                                    @endphp
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- /.card-body -->
                            </div>
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