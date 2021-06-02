@extends('AdminBackend.master')
@section('title','S A Admin | EditCategory')
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
              <li class="breadcrumb-item active">Edit Category</li>
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
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title"><small>Edit Category</small></h3>
                          </div>
                        <form action="{{url('customer/editcategory',$datas->id)}}" method="post">
                            @csrf
                            <div class="card-body">
                                  <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{$datas->name}}" class="form-control" id="" placeholder="Enter name" required>
                                  </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{url('admin/category')}}"><button type="submit" class="btn btn-primary">Cancel</button></a> 
                                  </div>
                            </div> 
                    </form>
                  </div>
            </div>
        </section>
</div>
@endsection
