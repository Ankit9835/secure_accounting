@extends('AdminBackend.master')
@section('title', 'S A Admin | Add Product')
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
                            <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
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
                        <h3 class="card-title">Add New Product</h3>
                        <div style="padding:0px 2px 0px 86%; display:block;"><a href="{{ url('admin/product') }}"><i
                                    class="fas fa-reply"> Go Back</i></a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span>Name</span>
                                        <input type="text" name="pname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <span>Product Code</span>
                                        <input type="text" name="pcode" disabled="disabled" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <span>Recorder Level</span>
                                        <input type="text" name="rlevel" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <span>Barcode</span>
                                        <input type="text" name="bcode" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <span>Minimum Stock</span>
                                    <input type="text" name="mstock" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>Narration</span>
                                    <textarea name="narration" cols="69" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Product Group</span>
                                    <select class="form-control">
                                        <option selected="selected">--select--</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span>Expiry Date</span>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>Brand</span>
                                    <select class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span>Size</span>
                                    <input type="text" name="size" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>Status</span>
                                    <select class="form-control ">
                                        <option>active</option>
                                        <option>inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card card-secondary">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>UOM</th>
                                    <th>Purchase Rate</th>
                                    <th>Sale Rate</th>
                                    <th>Qty (Opening Stock)</th>
                                </tr>
                            </table>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="goBack()">Cancel</button>
                        &nbsp;
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                    </div>
                 </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
@push('js')
    <!-- DataTables -->
    <script src="{{ asset('public/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
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
    <script>
        function goBack() {
          window.history.back();
        }
        </script>
@endpush
