@extends('AdminBackend.master')
@section('title','S A Admin | Category')
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
              <li class="breadcrumb-item active">Buyers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                  <div class="row">
                    <!-- /.card-header -->
                   
                
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Buyers List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th>S.No.</th>
                                    <th>Company Name</th>
                                    <th>GSTIN</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($buyers as $key=>$buyer) 
                                    <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $buyer->cname }}</td>
                                    <td>{{ $buyer->gstin }}</td>
                                    <td>{{ $buyer->email }}</td>
                                    <td>{{ $buyer->mobile }}</td>
                                    <td>
                                    <a href="" data-toggle="modal" data-target="#exampleModal{{ $buyer->id }}" class="bg-warning p-1" style = "border-radius:40%; color:white;"><i class="fas fa-eye"></i></a>&nbsp;   
                                   <a href="{{ url('customer/buyer/edit/' .$buyer->id) }}" class="bg-success p-1" style = "border-radius:40%;"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="{{ route('buyer.delete', [$buyer->id]) }}" id = "delete" class="bg-danger p-1" style = "border-radius:40%;"><i class="fas fa-trash"></i></a>
                                    </td>
                                    </tr>
                                     @include('AdminBackend.buyer.modal')
                                     @empty
                                    <td class = "mx-auto">There is no any buyers !</td>
                                   
                                    </tr>
                                    @endforelse
                                    
                                   
                                </tbody>
                            </table>
                            </div>
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