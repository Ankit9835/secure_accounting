@extends('AdminBackend.master')
@section('title', 'S A Admin | Company')
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
                        <li class="breadcrumb-item active">Company </li>
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
                    <h3 class="card-title">Company Detail</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('update.company.profile') }}" method="post">
                        @csrf
                       
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span>Company Name</span>
                                    <input type="text" name="cmpnyname"
                                        value="{{ !empty($data->cmpnyname) ? $data->cmpnyname :  ''}}" class="form-control"
                                        >
                                </div>
                                <div class="form-group">
                                    <span>State</span>
                                    <input type="text" name="state" value="{{ !empty($data->state) ? $data->state :  ''}}" class="form-control"
                                        >
                                </div>
                                <div class="form-group">
                                    <span>Email Id</span>
                                    <input type="email" name="email" value="{{ !empty($data->email) ? $data->email :  ''}}" class="form-control"
                                        >
                                </div>
                                <div class="form-group">
                                    <span>Phone</span>
                                    <input type="text" name="phone" value="{{ !empty($data->phone) ? $data->phone :  ''}}" class="form-control"
                                        >
                                </div>
                                <div class="form-group">
                                    <span>Address</span>
                                    <textarea name="address" cols="69" rows="2">{{ !empty($data->address) ? $data->address :  ''}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span>Country Name</span>
                                    <input type="text" name="cntryname" value="{{ !empty($data->cntryname) ? $data->cntryname :  ''}}" class="form-control"
                                        >
                                </div>
                                <div class="form-group">
                                    <span>Mailing Name</span>
                                    <input type="text" name="mailname" value="{{ !empty($data->mailname) ? $data->mailname :  ''}}" class="form-control"
                                        >
                                </div>
                                <div class="form-group">
                                    <span>Website</span>
                                    <input type="text" name="website" value="{{ !empty($data->website) ? $data->website :  ''}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>CST No</span>
                                    <input type="text" name="cst" value="{{ !empty($data->cst) ? $data->cst :  ''}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span>PIN Code</span>
                                    <input type="number" name="pin" value="{{ !empty($data->pin) ? $data->pin :  ''}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>TIN No</span>
                                    <input type="text" name="tin" value="{{ !empty($data->tin) ? $data->tin :  ''}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>Financial Year From</span>
                                    <input type="date" name="fyearfrom" value="{{ !empty($data->fyearfrom) ? $data->fyearfrom :  ''}}"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>Current Date</span>
                                    <input type="date" name="cdate" value="{{ !empty($data->cdate) ? $data->cdate :  ''}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>Descriptions</span>
                                    <textarea name="description" cols="69" rows="2">{{ !empty($data->description) ? $data->description :  ''}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span>Mobile Number</span>
                                    <input type="text" name="mobile" value="{{ !empty($data->mobile) ? $data->mobile :  ''}}" class="form-control"
                                        >
                                </div>
                                <div class="form-group">
                                    <span>PAN No</span>
                                    <input type="text" name="pan" value="{{ !empty($data->pan) ? $data->pan :  ''}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>Financial Year To</span>
                                    <input type="date" name="fyearto" value="{{ !empty($data->fyearto) ? $data->fyearto :  ''}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>Books Begining From</span>
                                    <input type="date" name="bkbeginfrom" value="{{ !empty($data->bkbeginfrom) ? $data->bkbeginfrom :  ''}}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                      
                        
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
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