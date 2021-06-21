@extends('AdminBackend.master')
@section('title','S A Admin | Add Brand')

@php

Auth::User()->fill_product()

@endphp




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
                          
                                     <input type="text" class="form-control" id = "txtsubtotal" name = "txtsubtotal"  readonly>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                <span class="mb-2">Total</span>

                                <div class="input-group  mt-2 date">
                        
                      <input type="text" class="form-control pull-right" id="txttotal" name = "txttotal" readonly>
                    </div>
                             </div>
                         </div>  
                             
                               
                            
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                                <span class="mb-2">Tax</span>

                                 <div class="input-group mt-2">
                          
                                     <input type="text" class="form-control" id = "txttax" name = "txttax"  readonly>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                <span class="mb-2">Paid</span>

                                <div class="input-group  mt-2 date">
                        
                      <input type="text" class="form-control pull-right" id="txtpaid" name = "txtpaid">
                    </div>
                             </div>
                         </div>  
                             
                               
                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                             <div class="form-group">
                                <span class="mb-2">Discount</span>

                                 <div class="input-group mt-2">
                          
                                     <input type="text" class="form-control" id = "txtdiscount" name = "txtdiscount">
                                </div>
                             </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group">
                                <span class="mb-2">Due</span>

                                <div class="input-group  mt-2 date">
                        
                      <input type="text" class="form-control pull-right" id="txtdue" name = "txtdue" readonly>
                    </div>
                             </div>
                         </div>  
                             
                               
                            
                        </div>

                    <div class="row">
                        <div class="col-md-12 mx-auto">
                        <label> Payment Method </label>
                         <div class="form-group">

                            <label>
                            <input type="radio" name="rb" class="minimal-red" value = "Cash" checked> CASH
                            </label>
                            <label>
                            <input type="radio" name="rb" class="minimal-red" value = "Card"> CARD
                            </label>
                            <label>
                            <input type="radio" name="rb" class="minimal-red" value = "Cheque"> CHEQUE
                            
                            </label>
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
          html+='<td> <select style = "width:250px;"  class="form-control productid" name = "productid[]"> <option value = ""> Select Option  </option> <?php echo Auth::User()->fill_product() ?> </select> </td>';
          html+='<td> <input type="text" class="form-control mstock" name = "mstock[]" readonly> </td>';
          html+='<td> <input type="text" class="form-control price" name = "price[]" readonly> </td>';
          html+='<td> <input type="number" min = "1" class="form-control qty" name = "qty[]"> </td>';
          html+='<td> <input type="text" class="form-control total" name = "total[]" readonly> </td>';

          html+='<td> <center> <button type = "button" name = "remove" class = "btn btn-danger btn-sm btnremove" role = "button">  <span class = "fas fa-times"> </span> </button> </center> </td>';

       

          $('#producttable').append(html);

          
          $('.productid').on('change', function(e){
              var productid = this.value;
              var tr=$(this).parent().parent();

              $.ajax({
                  url:"/customer/getproduct",
                  dataType: "json",
                  method:"get",
                  data:{id:productid},
                  success:function(data){
                    console.log(data);
                   
                   
                      tr.find(".pname").val(data.name);
                      tr.find(".mstock").val(data.mstock);
                      tr.find(".price").val(data.srate);
                      tr.find(".qty").val(1);
                      tr.find(".total").val(tr.find(".qty").val() *  tr.find(".price").val());
                      calculate(0,0);
                  }
              })

          });
        

        });

        $(document).on('click','.btnremove',function(){

            $(this).closest('tr').remove();
          

        });

        $("#producttable").delegate(".qty","keyup change" ,function(){
       
       var quantity = $(this);
        var tr = $(this).parent().parent();
        
     if((quantity.val()-0)>(tr.find(".mstock").val()-0) ){
        
       
        
        alert('SORRY! This much of quantity is not available');
         quantity.val(1);
        
          tr.find(".total").val(quantity.val() *  tr.find(".price").val());
          calculate(0,0);
        }else{
            
            tr.find(".total").val(quantity.val() *  tr.find(".price").val());
            calculate(0,0);
        }    
        
        
        
     }); 


         function calculate(dis,paid){
         
                    var subtotal=0;
                    var tax=0;
                    var discount = dis;    
                    var net_total=0;
                    var paid_amt=paid;
                 var due=0;
         
         
            $(".total").each(function(){
                
                subtotal = subtotal+($(this).val()*1);    
                
            })
         
          tax = 0.05*subtotal;
          net_total = tax+subtotal;
          net_total = net_total-discount;
          due = net_total-paid_amt;    
         
   
          $("#txtsubtotal").val(subtotal.toFixed(2));
          $("#txttax").val(tax.toFixed(2));
          $("#txttotal").val(net_total.toFixed(2));
          //$("#txttotal").val(net_total.toFixed(2));
          $("#txtdiscount").val(discount);
          $("#txtdue").val(due.toFixed(2));
 
         
         
     }// function calculate end here   

     $("#txtdiscount").keyup(function(){
            var discount = $(this).val();
            calculate(discount,0);

        })
       
      $("#txtpaid").keyup(function(){
            var paid = $(this).val();
            var discount = $("#txtdiscount").val();
            calculate(discount,paid);

        })  

      
       
       
       
    });    
     
       
    
         
   
         
         
 
         
         
    


function goBack() {
    window.history.back();
}
</script>
@endsection