@extends('AdminPanel.master')
@section('title', 'S A Admin| General Setting')
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
                            <li class="breadcrumb-item"><a href="{{ url('adminpanel/home') }}">Home</a></li>
                            <li class="breadcrumb-item active">General Setting</li>
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
                        <div class="card-primary">
                            <div class="card-header">
                                <h3 class="card-title">General Settings</h3>
                            </div>
                        </div>
                        <form action="{{route('gsetting')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                {{-- Insert Logo --}}
                                <div class="col-4" style="padding-top: 10px;">
                                    <div class="card">
                                        <div class="card-header" style="background-color:rgb(127, 228, 13);">
                                            <h3 class="card-title"><small>Upload Logo</small></h3>
                                        </div>
                                        <div class="card-body" style="padding: 39px;">
                                            <div class="form-group">
                                                <input type="file" name="logo_image" class="form-control"
                                                    style="padding: 5px 0px 35px 10px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- View Logo --}}
                                <div class="col-4" style="padding-top: 10px;">
                                    <div class="card" >
                                        <div class="card-header" style="background-color:rgb(127, 228, 13);">
                                            <h3 class="card-title"><small>Uploaded Logo</small></h3>
                                        </div>

                                        <div class="card-body" >
                                            <div class="form-group">
                                                <img src="{{ asset('public/storage/'.$data->logo_image) }}" alt="" width="300px" height="80px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Description --}}
                            <div class="col-12" style="padding-top: 10px;">
                                <div class="card">
                                    <div class="card-header" style="background-color:rgb(127, 228, 13);">
                                        <h3 class="card-title"><small>Description</small></h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <textarea name="description">{{$data->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-links">
                                {{-- Address Bar --}}
                                <div class="col-12" style="padding-top: 10px;">
                                    <div class="card">
                                        <div class="card-header" style="background-color:rgb(127, 228, 13);">
                                            <h3 class="card-title"><small>Address</small></h3>
                                        </div>

                                        <div class="card-body" style="margin-left:auto;">
                                            <div class="form-group">
                                                <a href="" class="twitter"><i class="fas fa-address-book"></i></a><input
                                                    type="text" name="address" value="{{$data->address}}" id="" Placeholder="Enter Address" size="130">
                                            </div>
                                            <div class="form-group">
                                                <a href="" class="twitter"><i class="fas fa-mobile"></i></a><input
                                                    type="text" name="phone" value="{{$data->phone}}" id="" Placeholder="Enter Phone Number"
                                                    size="130">
                                            </div>
                                            <div class="form-group">
                                                <a href="" class="twitter"><i class="fas fa-envelope-square"></i></a><input
                                                    type="email" name="email" value="{{$data->email}}"  id="" placeholder="Enter Email" size="130">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Social Links --}}
                                <div class="col-12" style="padding-top: 10px;">
                                    <div class="card">
                                        <div class="card-header" style="background-color:rgb(127, 228, 13);">
                                            <h3 class="card-title"><small>Social Links</small></h3>
                                        </div>
                                        <div class="card-body" style="margin-left:auto;">
                                            <div class="form-group">
                                                <a href="" class="twitter"><i class="fab fa-twitter"></i></a><input
                                                    type="text" name="twitter" value="{{$data->twitter}}"  Placeholder="Twitter" size="130">
                                            </div>
                                            <div class="form-group">
                                                <a href="#" class="facebook"><i class="fab fa-facebook"></i></a><input
                                                    type="text" name="facebook" value="{{$data->facebook}}" Placeholder="Facebook" size="130">
                                            </div>
                                            <div class="form-group">
                                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a><input
                                                    type="text" name="instagram" value="{{$data->instagram}}" Placeholder="Instagram" size="130">
                                            </div>
                                            <div class="form-group">
                                                <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a><input
                                                    type="text" name="gplus" value="{{$data->gplus}}" Placeholder="Google +" size="130">
                                            </div>
                                            <div class="form-group">
                                                <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a><input
                                                    type="text" name="linkedin" value="{{$data->linkedin}}" Placeholder="Linkedin" size="130">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
