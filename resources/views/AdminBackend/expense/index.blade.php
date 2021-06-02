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
              <li class="breadcrumb-item active">Expenses</li>
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
                            <h3 class="card-title">Expenses List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th>S.No.</th>
                                    <th>Expense Details</th>
                                    <th>Amount</th>
                                    <th>Category Name</th>
                                    <th>Payment Mode</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($expenses as $key=>$expense) 
                                    <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $expense->expense_detail }}</td>
                                    <td>{{ $expense->amount }}</td>
                                    <td>{{ $expense->category->name }}</td>
                                    <td>{{ $expense->payment_mode }}</td>
                                    <td>{{ $expense->date }}</td>
                                    <td>
                                      
                                   <a href="{{ url('customer/expense/edit/' .$expense->id) }}" class="bg-success p-1" style = "border-radius:40%;"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="{{ route('expense.remove', [$expense->id]) }}" id = "delete" class="bg-danger p-1" style = "border-radius:40%;"><i class="fas fa-trash"></i></a>
                                    </td>
                                    </tr>
                                    
                                     @empty
                                    <td class = "mx-auto">There is no any expenses !</td>
                                   
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