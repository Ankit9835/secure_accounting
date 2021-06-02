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
              <li class="breadcrumb-item active">Seller</li>
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
                            <h3 class="card-title text-uppercase"><small>Seller</small></h3>
                          </div>
                        <form action="{{ route('store.category') }}" method="post">
                            @csrf
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Company Name</label>
                                    <input type="text" name="cname" class="form-control" id="" placeholder="Enter company name" required>
                                  </div>
                                </div>
                                 <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">GSTIN</label>
                                    <input type="text" name="gstin" class="form-control" id="" placeholder="Enter gstin name" required>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Company City</label>
                                    <input type="text" name="ccity" class="form-control" id="" placeholder="Enter city name" required>
                                  </div>
                                </div>
                                 <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">PIN CODE</label>
                                    <input type="number" name="pincode" class="form-control" id="" placeholder="Enter pin code" required>
                                  </div>
                                </div>
                              </div>

                               <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Select State</label>
                                    <select name="state" id="state" class="form-control">
                                                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                  <option value="Assam">Assam</option>
                                                  <option value="Bihar">Bihar</option>
                                                  <option value="Chandigarh">Chandigarh</option>
                                                  <option value="Chhattisgarh">Chhattisgarh</option>
                                                  <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                  <option value="Daman and Diu">Daman and Diu</option>
                                                  <option value="Delhi">Delhi</option>
                                                  <option value="Lakshadweep">Lakshadweep</option>
                                                  <option value="Puducherry">Puducherry</option>
                                                  <option value="Goa">Goa</option>
                                                  <option value="Gujarat">Gujarat</option>
                                                  <option value="Haryana">Haryana</option>
                                                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                  <option value="Jharkhand">Jharkhand</option>
                                                  <option value="Karnataka">Karnataka</option>
                                                  <option value="Kerala">Kerala</option>
                                                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                  <option value="Maharashtra">Maharashtra</option>
                                                  <option value="Manipur">Manipur</option>
                                                  <option value="Meghalaya">Meghalaya</option>
                                                  <option value="Mizoram">Mizoram</option>
                                                  <option value="Nagaland">Nagaland</option>
                                                  <option value="Odisha">Odisha</option>
                                                  <option value="Punjab">Punjab</option>
                                                  <option value="Rajasthan">Rajasthan</option>
                                                  <option value="Sikkim">Sikkim</option>
                                                  <option value="Tamil Nadu">Tamil Nadu</option>
                                                  <option value="Telangana">Telangana</option>
                                                  <option value="Tripura">Tripura</option>
                                                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                  <option value="Uttarakhand">Uttarakhand</option>
                                                  <option value="West Bengal">West Bengal</option>
                                     </select>

                                  </div>
                                </div>
                                
                                </div>
                              

                               <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" id="" placeholder="Enter email" required>
                                  </div>
                                </div>
                                 <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Mobile</label>
                                    <input type="number" name="phone" class="form-control" id="" placeholder="Enter phone number" required>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">PAN CARD</label>
                                    <input type="text" name="pancard" class="form-control" id="" placeholder="Enter pan details" required>
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