<div class="modal fade" id="exampleModal{{ $seller->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seller Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          
          <p class="badge badge-pill badge-dark"> Role : {{ $seller->user->role->name }} </p>
         <p> <strong> Company Name: </strong> {{ $seller->cname }} </p>
         <p> <strong> GSTIN: </strong> {{ $seller->gstin }} </p>
         <p> <strong> City: </strong> {{ $seller->ccity }} </p>
         <p> <strong> Pincode: </strong> {{ $seller->pincode }} </p>
         <p> <strong> State: </strong> {{ $seller->state }} </p>
         <p> <strong> Pan Card: </strong> {{ $seller->country }} </p>
         <p> <strong> Email: </strong> {{ $seller->email }} </p>
         <p> <strong> Contact No: </strong> {{ $seller->mobile }} </p>
         <p> <strong> Address: </strong> {{ $seller->address }} </p>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

 