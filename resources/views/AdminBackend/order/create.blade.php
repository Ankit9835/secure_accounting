@extends('AdminBackend.master')
@section('title','S A Admin | Add Brand')
@section('body')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
                        <li class="breadcrumb-item active">Orders</li>
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
                    <h3 class="card-title">Create Orders</h3>
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
                                <span class="mb-2">Customer Name</span>

                                 <div class="input-group mt-2">
                          
                                     <input type="text" class="form-control" name = "txtcustomer" placeholder="Enter Customer Name" required>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                <span class="mb-2">Date</span>

                                <div class="input-group  mt-2 date">
                        
                      <input type="date" class="form-control pull-right" id="datepicker" name = "orderdate" value = "<?php echo date("Y-m-d") ?>" data-date-format = "yyyy-mm-dd">
                    </div>
                             </div>
                         </div>  
                             
                               
                            
                        </div>
                    <br>
                <div class = "box-body">
                <div class = "col-md-12">
                  <div style = "overflow-x:auto;">
                  <table id = "producttable"  class = "table table-striped">
                    <thead>
                       <tr>
                 
                          <th> # </th>
                          <th> Search Product </th>
                          <th> Stock </th>
                          <th> Price </th>
                          <th> Enter Quantity </th>
                          <th> Total </th>
                          <th>
                               <center> <button type = "button" name = "add" class = "btn btn-success btn-sm btnadd" role = "button">  <span class = "fas fa-plus"> </span> </button>  </center>

                          </th>
                 
                 
                       </tr>
                    </thead>
                  </table>
                  </div>
                 </div>
               </div> <!-- This is for table -->


               <div class="row mt-5">
                            <div class="col-md-6">
                             <div class="form-group">
                                <span class="mb-2">Subtotal</span>

                                 <div class="input-group mt-2">
                          
                                     <input type="text" class="form-control" name = "txtcustomer"  readonly>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                <span class="mb-2">Total</span>

                                <div class="input-group  mt-2 date">
                        
                      <input type="text" class="form-control pull-right" id="datepicker" name = "orderdate" readonly>
                    </div>
                             </div>
                         </div>  
                             
                               
                            
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                                <span class="mb-2">Tax</span>

                                 <div class="input-group mt-2">
                          
                                     <input type="text" class="form-control" name = "txtcustomer"  readonly>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                <span class="mb-2">Paid</span>

                                <div class="input-group  mt-2 date">
                        
                      <input type="text" class="form-control pull-right" id="datepicker" name = "orderdate">
                    </div>
                             </div>
                         </div>  
                             
                               
                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                                <span class="mb-2">Discount</span>

                                 <div class="input-group mt-2">
                          
                                     <input type="text" class="form-control" name = "txtcustomer">
                                </div>
                             </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                <span class="mb-2">Due</span>

                                <div class="input-group  mt-2 date">
                        
                      <input type="text" class="form-control pull-right" id="datepicker" name = "orderdate" readonly>
                    </div>
                             </div>
                         </div>  
                             
                               
                            
                        </div>


                        
                        <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary text-center">Save Order</button>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
 //Date picker


    $(document).ready(function(){
        $(document).on('click','.btnadd',function(){
          var html='';
          html+='<tr>';
          html+='<td> <input type="hidden" class="form-control pname" name = "productname[]" readonly> </td>';
          html+='<td> <select style = "width:250px;"  class="form-control productid" name = "productid[]"> <option value = ""> Select Option  </option>  </select> </td>';
          html+='<td> <input type="text" class="form-control stock" name = "stock[]" readonly> </td>';
          html+='<td> <input type="text" class="form-control price" name = "price[]" readonly> </td>';
          html+='<td> <input type="number" min = "1" class="form-control qty" name = "qty[]"> </td>';
          html+='<td> <input type="text" class="form-control total" name = "total[]" readonly> </td>';

          html+='<td> <center> <button type = "button" name = "remove" class = "btn btn-danger btn-sm btnremove" role = "button">  <span class = "fas fa-times"> </span> </button> </center> </td>';

       

          $('#producttable').append(html);

          

        

        })

        $(document).on('click','.btnremove',function(){

            $(this).closest('tr').remove();
          

        })

      
       
       
       
    });    
     
       
    
         
   
         
         
 
         
         
    


function goBack() {
    window.history.back();
}
</script>
@endsection