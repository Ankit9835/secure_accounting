@extends('AdminPanel.master')
@section('title','S A Admin | Dashboard')
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Users</h3>
                                <a href="{{route('all.users')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Users</span>
                                    <span class="text-bold text-lg">{{ $user }}</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                    
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Roles</h3>
                                <a href="{{route('all.roles')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Roles</span>
                                    <span class="text-bold text-lg">{{ $roles }}</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                 <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Contacts</h3>
                                <a href="{{route('all.contacts')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Messages</span>
                                    <span class="text-bold text-lg">{{ $contacts }}</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->

             <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Banners</h3>
                                <a href="{{route('all.banners')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Banners</span>
                                    <span class="text-bold text-lg">{{ $banner }}</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                    
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Subscriptions</h3>
                                <a href="{{route('all.subs')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Messages</span>
                                    <span class="text-bold text-lg">{{ $subsription }}</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                
            </div>

            
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection