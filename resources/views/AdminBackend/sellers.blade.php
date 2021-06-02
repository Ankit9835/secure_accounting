@extends('AdminBackend.master')
@section('title','S A Admin | Sellers')
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
              <li class="breadcrumb-item active">Seller's</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                      <h3 class="card-title">Add Seller</h3>
                      <div class="card-tools">
                        <button type="button" data-card-widget="collapse" style="background-color:#3c82ff;">ADD SELLER</button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="" method="post">
                      <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">Company Name *</label><br>
                                  <input type="text" name="" id="" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                  <label for="">Address</label><br>
                                  <input type="text" name="" id="" placeholder="Enter Address">
                                </div><br>
                                <div class="form-group">
                                  <select class="form-control select2" style="width: 50%;">
                                      <option>Select State</option>
                                      <option>Andaman and Nicobar Islands</option>
                                      <option>Andhra Pradesh</option>
                                      <option>Andhra Pradesh New</option>
                                      <option>Arunachal Pradesh</option>
                                      <option>Assam</option>
                                      <option>Bihar</option>
                                      <option>Chandigarh</option>
                                      <option>Chhattisgarh</option>
                                      <option>Dadra and Nagar Haveli</option>
                                      <option>Daman and Diu</option>
                                      <option>Delhi</option>
                                      <option>Goa</option>
                                      <option>Gujarat</option>
                                      <option>Haryana</option>
                                      <option>Himachal Pradesh</option>
                                      <option>Jammu and Kashmir</option>
                                      <option>Jharkhand</option>
                                      <option>Karnataka</option>
                                      <option>Kerala</option>
                                      <option>Lakshadweep Islands</option>
                                      <option>Ladakh</option>
                                      <option>Madhya Pradesh</option>
                                      <option>Maharashtra</option>
                                      <option>Manipur</option>
                                      <option>Meghalaya</option>
                                      <option>Mizoram</option>
                                      <option>Nagaland</option>
                                      <option>Odisha</option>
                                      <option>Pondicherry</option>
                                      <option>Punjab</option>
                                      <option>Rajasthan</option>
                                      <option>Sikkim</option>
                                      <option>Tamil Nadu</option>
                                      <option>Telangana</option>
                                      <option>Tripura</option>
                                      <option>Uttar Pradesh</option>
                                      <option>Uttarakhand</option>
                                      <option>West Bengal</option>
                                      <option>Other Territory</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="">Mobile No.</label><br>
                                  <input type="text" name="" id="" placeholder="Enter Mobile Number">
                                </div>
                                <div class="form-group">
                                  <label for="">Pan Card</label><br>
                                  <input type="text" name="" id="" placeholder="Enter Pan Card No.">
                                </div>
                                <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkbox">
                                  <span for="checkbox">
                                    Do you also sell items to this seller?
                                  </span>
                                  <br>
                                </div>
                              </div>
      
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="">GSTIN</label><br>
                                  <input type="text" name="" id="" placeholder="Enter GSTIN">
                                </div>
                                <div class="form-group">
                                  <label for="">Company City</label><br>
                                  <input type="text" name="" id="" placeholder="Enter Company City">
                                </div>
                                <div class="form-group">
                                  <label for="">Pin Code</label><br>
                                  <input type="text" name="" id="" placeholder="Enter Pin Code">
                                </div>
                                <div class="form-group">
                                  <label for="">Email</label><br>
                                  <input type="text" name="" id="" placeholder="Enter Email">
                                </div>
                              </div>
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary" value="save">Submit</button>
                                  <a href="{{url('admin/home')}}"><button type="submit" class="btn btn-primary">Cancel</button></a> 
                                </div>
                      </div>
                    </form>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Seller's List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Seller Name</th>
                                    <th>GSTIN</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Pin Code</th>
                                    <th>E-Mail</th>
                                    <th>Pan Card</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>1</td>
                                <td>Abhijeet Kumar</td>
                                <td>WIN5543WS34</td>
                                <td>Mal godam road</td>
                                <td>Patna</td>
                                <td>Bihar</td>
                                <td>800023</td>
                                <td>abhijeet@gmail.com</td>
                                <td>FKLPF6634D</td>
                                <td></td>
                                </tr>
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