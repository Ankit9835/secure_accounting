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
                        <h3 class="card-title">Edit Product</h3>
                        <div style="padding:0px 2px 0px 86%; display:block;"><a href="{{ url('admin/product') }}"><i
                                    class="fas fa-reply"> Go Back</i></a></div>
                    </div>
                  <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('product.update', [$product->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type = "hidden" name = "pcode" value = "{{ $product->pcode }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Name</span>
                                    <input type="text" name="name" value = "{{ $product->name }}" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                               
                               
                              
                                <div class="form-group">
                                    <span>Minimum Stock</span>
                                    <input type="number" name="mstock" value = "{{ $product->mstock }}" class="form-control @error('mstock') is-invalid @enderror">
                                    @error('mstock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <span>Purchase rate</span>
                                    <input type="number" name="prate" value = "{{ $product->prate }}" class="form-control @error('prate') is-invalid @enderror">
                                    @error('prate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <span>Sales Rate</span>
                                    <input type="number" name="srate" value = "{{ $product->srate }}" class="form-control @error('srate') is-invalid @enderror">
                                    @error('srate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span>Product Category</span>
                                    <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                    <option selected="true" disabled="disabled">Choose Category</option>
                                    @foreach(App\Models\Category::where('user_id', '=', Auth::User()->id)->get() as $category)
                                        <option value="{{ $category->id }}"@if($product->category_id==$category->id)selected @endif>{{ $category->name }}</option>
                                     @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <span>Expiry Date</span>
                                    <input type="date" name="exdate" value = "{{ $product->exdate }}" class="form-control @error('exdate') is-invalid @enderror">
                                    @error('exdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <span>Brand</span>
                                    <select class="form-control" name = "brand" value = "{{ $product->brand }}">
                                        <option value = "test">Test</option>
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <span>Size</span>
                                    <input type="text" name="size" class="form-control" value = "{{ $product->size }}">
                                </div>
                                <div class="form-group">
                                    <span>Status</span>
                                    <select class="form-control @error('status') is-invalid @enderror" name="status">
                                    <option selected="true" disabled="disabled">Choose Status</option>
                                        @foreach(App\Models\Product::where('user_id', '=', Auth::User()->id)->get() as $pro)
                                        <option value="{{ $pro->status }}"@if($pro->status==$product->status)selected @endif>{{ $pro->status }}</option>
                                     @endforeach
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <span>Image</span>
                                    <input type="file" name="image" class="form-control">
                                    
                                   <img src = "{{ (!empty($product->image)) ? asset($product->image) : url('upload/no_image.jpg') }}" width = "100px" height = "100px">
                                   <input type="hidden" name="old_logo" value = "{{ $product->image }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                            <span>Descrption</span>
                            <textarea id="summernote" name="description" class= "form-control @error('description') is-invalid @enderror">{{ $product->description }}</textarea>
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                            </div>
                        </div>
                       
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
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
    <script>
        function goBack() {
          window.history.back();
        }
        </script>
@endpush
