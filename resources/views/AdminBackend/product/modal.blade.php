<div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          
         
        <p> <strong> Product Code: </strong> {{ $product->pcode }} </p>
        <p> <strong> Product Image: </strong>  <img src = "{{ (!empty($product->image)) ? asset($product->image) : url('upload/no_image.jpg') }}" width = "100px" height = "100px"> </p>
         <p> <strong> Product Name: </strong> {{ $product->name }} </p>
         <p> <strong> Category: </strong> {{ $product->category->name }} </p>
        
         <p> <strong> Expiry Date: </strong> {{ $product->exdate }} </p>
         <p> <strong> Brand: </strong> {{ $product->brand }} </p>
         <p> <strong> Size: </strong> {{ $product->size }} </p>
         <p> <strong> Stock: </strong> {{ $product->mstock }} </p>
         <p> <strong> Purchase Rate: </strong> {{ $product->prate }} </p>
         <p> <strong> Selling Rate: </strong> {{ $product->srate }} </p>
         <p> <strong> Description: </strong> {!! $product->description !!} </p>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

 