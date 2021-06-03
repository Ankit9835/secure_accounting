@extends('AdminPanel.master')
@section('title','S A Admin | EditBanner')
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
              <li class="breadcrumb-item"><a href="{{url('adminpanel/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Banner</li>
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
                            <h3 class="card-title"><small>Edit Banner</small></h3>
                          </div>
                        <form action="{{url('admin/editbanner',$datas->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                  <div class="form-group">
                                    <label for="">Upload Banner</label>
                                    <input type="file" name="bimage" class="form-control" style="padding: 5px 0px 35px 10px; !important" required>
                                  </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{url('adminpanel/banner')}}"><button type="button" class="btn btn-primary">Cancel</button></a> 
                                  </div>
                                  <div style="color:red">Uploaded Image</div>
                                  <img src="{{asset('storage/'.$datas->bimage)}}" alt="" width="300px" height="200px"> 
                            </div> 
                    </form>
                  </div>
            </div>
        </section>
</div>
@endsection
