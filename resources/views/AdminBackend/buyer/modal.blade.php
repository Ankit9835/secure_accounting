<div class="modal fade" id="exampleModal{{ $buyer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buyer Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          
          <p class="badge badge-pill badge-dark"> Role : {{ $buyer->user->role->name }} </p>
         <p> <strong> Company Name: </strong> {{ $buyer->cname }} </p>
         <p> <strong> GSTIN: </strong> {{ $buyer->gstin }} </p>
         <p> <strong> City: </strong> {{ $buyer->ccity }} </p>
         <p> <strong> Pincode: </strong> {{ $buyer->pincode }} </p>
         <p> <strong> State: </strong> {{ $buyer->state }} </p>
         <p> <strong> Country: </strong> {{ $buyer->country }} </p>
         <p> <strong> Email: </strong> {{ $buyer->email }} </p>
         <p> <strong> Contact No: </strong> {{ $buyer->mobile }} </p>
         <p> <strong> Address: </strong> {{ $buyer->address }} </p>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

 