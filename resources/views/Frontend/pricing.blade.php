 @extends('Frontend.master')

@section('content')

 <section class="pricing" id="pricingdiv">
      <div class="container headings text-center">
        <h1 class="txt3">Our Best Pricing</h1>
       </div>
       <div class="container">
           <div class="row">
          
            <div class="col-lg-6 col-12 card-second">
           <div class="card text-center">
                  <div class="card-header">BASIC</div>
                  <div class="card-body">
                     <li><span class="money">Free</span></li>
                      <li>5 Days Free Access</li>
                      <li>Technical Support For 5 Days</li>
                      <li>Webmail Support</li>
                      <li>Customer Support 24/7</li>
                  </div>
                  <div class="card-footer">
                   <a href="#">Purchase</a>
                  </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 card-second">
           <div class="card text-center">
                  <div class="card-header">ONE NATION ONE PRICE</div>
                  <div class="card-body">
                     <li>$<span class="money">5000</span>/software</li>
                     <li>LifeTime Free Access</li>
                     <li>Technical Support For 1 Year</li>
                     <li>Webmail Support</li>
                     <li>Customer Support 24/7</li>
                  </div>
                  <div class="card-footer">
                   <a href="#">Purchase</a>
                  </div>
                </div>
            </div>
           </div>
        </div>
    </section>

@endsection
