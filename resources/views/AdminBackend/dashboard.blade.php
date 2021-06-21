@extends('AdminBackend.master')
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
                                <h3 class="card-title">Category</h3>
                                <a href="{{route('customer.category')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Category</span>
                                    <span class="text-bold text-lg">{{ $category }}</span>
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
                                <h3 class="card-title">Brand</h3>
                                <a href="{{route('brands.list')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Brand</span>
                                    <span class="text-bold text-lg">{{ $brand }}</span>
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
                                <h3 class="card-title">Expense</h3>
                                <a href="{{route('expense.list')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Expense</span>
                                    <span class="text-bold text-lg">&#8377; {{ $expense }}</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                    
                </div>
                </div>
                <div class="row">

                     <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Sellers</h3>
                                <a href="{{route('sellers.list')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Sellers</span>
                                    <span class="text-bold text-lg">{{ $seller }}</span>
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
                                <h3 class="card-title">Buyers</h3>
                                <a href="{{route('buyer.index')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Buyers</span>
                                    <span class="text-bold text-lg">{{ $buyer }}</span>
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
                                <h3 class="card-title">Products</h3>
                                <a href="{{route('products.list')}}">View Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                <span>Total Products</span>
                                    <span class="text-bold text-lg">{{ $product }}</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                    
                </div>

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