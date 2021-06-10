@extends('AdminBackend.master')
@section('title','S A Admin | Add Brand')
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
                        <li class="breadcrumb-item active">Brands</li>
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
                    <h3 class="card-title">Add Brands</h3>
                    <div style="padding:0px 2px 0px 86%; display:block;"><a href="{{ url('admin/brand') }}"><i
                                class="fas fa-reply"> Go Back</i></a></div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('brands.store') }}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Brand Name</span>
                                    <input type="text" name="bname" class="form-control @error('bname') is-invalid @enderror">
                                    @error('bname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Manufacturer</span>
                                    <input type="text" name="manufacturer" class="form-control @error('manufacturer') is-invalid @enderror">
                                    @error('manufacturer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                              </div>  
                              <div class="col-md-6"> 
                                <div class="form-group">
                                    <span>Description</span>
                                    <textarea name="description" cols="69" rows="3" class="form-control @error('description') is-invalid @enderror"></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <span>Status</span>
                                    <select class="form-control @error('status') is-invalid @enderror" name="status">
                                    <option selected="true" disabled="disabled">Choose State</option>
                                        <option value="active">active</option>
                                        <option value="inactive">inactive</option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
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
<script>
function goBack() {
    window.history.back();
}
</script>
@endsection