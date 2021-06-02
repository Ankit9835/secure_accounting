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
              <li class="breadcrumb-item active">Expense</li>
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
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title text-uppercase"><small>Expense</small></h3>
                          </div>
                        <form action="{{ route('expense.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Expense Details</label>
                                    <input type="text" name="expense_detail" class="form-control @error('expense_detail') is-invalid @enderror" id="" placeholder="Enter expense details">
                                      @error('expense_detail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                  </div>
                                </div>
                                 <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Amount</label>
                                    <input type="text" name="amount" class="form-control @error('amount') is-invalid @enderror" id="" placeholder="Enter amount">
                                     @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Category</label>
                                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                      <option selected="true" disabled="disabled">Choose Category</option>
                                      @foreach($category as $row)
                                      <option value="{{ $row->id }}">{{ $row->name }}</option>
                                      @endforeach
                                    </select>
                                     @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                  </div>
                                </div>
                                 <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Payment Mode</label>
                                    <select name="payment_mode" class="form-control @error('payment_mode') is-invalid @enderror">
                                      <option selected="true" disabled="disabled">Choose Payment Mode</option>
                                      <option value="cash">Cash</option>
                                      <option value="online">Online</option>
                                      
                                    </select>
                                     @error('payment_mode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="" placeholder="Enter date">
                                     @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                  </div>
                                </div>
                                
                              </div>

                             

                              

                              
                                  
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                            </div> 
                    </form>
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