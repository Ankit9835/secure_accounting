@extends('Frontend.master')

@section('content')

<!---- slider start--->
<section class="slider">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('frontend/image/pexel-four.jpg') }}" class="img-responsive">
      <div class="carousel-text">
       <!--  <h3 class="txt text-warning font-weight-bold">We provide solutions for your business!</h3> -->
       <!--  <p><a href=""><button class="btn btn-warning">Get Start</button></a> <a href=""><button class="btn btn-success"> Our Services</button></a></p> -->
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{ asset('frontend/image/pexel-second.jpg') }}" class="img-responsive">
      <div class="carousel-text">
         <h3 class="txt text-white font-weight-bold">We provide solutions for your business!</h3> 
        <p><a href=""><button class="btn btn-warning">Get Start</button></a> <a href=""><button class="btn btn-success"> Our Services</button></a></p> 
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{ asset('frontend/image/pexel-five.jpg') }}" class="img-responsive">
      <div class="carousel-text">
        <h3 class="txt text-white font-weight-bold">We provide solutions for your business!</h3>
        
        <p><a href=""><button class="btn btn-warning">Get Start</button></a> <a href=""><button class="btn btn-success"> Our Services</button></a></p> 
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</section>
<!--- slider end--->
<!----about start--->
<section class="about_section container">
  <h1 class="txt1">About Us</h1>
  <div class="row mt-5 mb-5">
   <!--  <div class="col-md-6 col-sm-12 col-xs-12">
      <img src="image/about-second.jpg" class="abt-img">
    </div> -->
    <div class="col-md-12 col-sm-12 col-xs-12 mt-5">

          <p class="text-center text-uppercase"><em> Create professional and elegant looking Invoices, Quotations, Purchase orders. Manage your Inventory, Expenses and Ledgers. Send Payments reminders to your customers & much more in seconds.</em></p>
          <p>
            Download our app Easy Invoice Manger from Play store and start creating and sharing Invoices, Quotations, e-waybills, Payment receipts and much more. Also, manage your inventory and send instant Payment reminders to your customers for recovering your payments sooner.
          </p>
          <div class="text-center mt-5 mb-5">
            <button class="btn btn-warning" style = "font-size:20px; border-radius:10px;">
              Start Using It For Free
            </button>
        </div>

    </div>

</div>
<!-- <div class="container text-center"> -->
<!-- <div class="row">
<div class="col-md-6">
<div class="pray">
  <img src="image/about.jpg">
 </div>
 </div>
 <div class="col-md-6">
  <div class="panel text-left">
  <h3>NewBiz About</h3>
  <p class="pt-4">
 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque tincidunt laoreet. Aliquam at bibendum ligula. Vestibulum sagittis ligula nec velit venenatis, convallis mattis ligula facilisis. Nulla quis diam ac urna convallis mattis. Vivamus ullamcorper turpis quis dolor facilisis dictum at quis nulla. Nulla malesuada, lectus ac pharetra lobortis, nulla tortor sagittis urna, ut euismod ante purus id nunc.
  </p>
  <p>
  Suspendisse potenti. Suspendisse vitae turpis et elit porttitor consequat. Etiam laoreet diam congue, ultricies dolor quis, vestibulum augue. Maecenas mollis euismod dui. Duis eu erat et mi porttitor fringilla sit amet a lorem. Sed auctor porttitor ante, at fermentum sapien mattis vitae. Sed lacus mauris, euismod vitae sapien ac, blandit ultricies velit. Morbi sodales placerat ultricies. Ut sagittis augue non ipsum efficitur, ut tempor nisi varius. Suspendisse tortor justo. 
  </p>
 </div>
</div>
</div> -->
 
</section>

<!---about end--->
<!---- service start---->
<section class="test">

  <div class="container ser">
    <div class="Services">
    <h1 class="txt2 mt-2 mb-2"> Our Service</h1>
  <div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12 text-center">
      <div class="icon text-black">
        <img src = "https://gimbooks-media-prod-bucket.s3.ap-south-1.amazonaws.com/media/launcher_imz/Group.png">
      </div>
      <h5>Create and share GST Invoices & E-waybills with customers</h5>
     <!--  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
    </div>
     <div class="col-md-4 col-sm-12 col-xs-12  text-center">
      <div class="icon text-black">
      <img src = "https://gimbooks-media-prod-bucket.s3.ap-south-1.amazonaws.com/media/launcher_imz/Group-17.png">
      </div>
      <h5>Manage and check your Inventory instantly</h5>
      <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
    </div>
     <div class="col-md-4 col-sm-12 col-xs-12 text-center">
      <div class="icon text-black">
         <img src = "https://gimbooks-media-prod-bucket.s3.ap-south-1.amazonaws.com/media/launcher_imz/Group-11.png">
      </div>
      <h5>Manage and Track Purchase, Expenses and Ledgers</h5>
     <!--  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12  text-center">
      <div class="icon text-black">
        <img src = "https://gimbooks-media-prod-bucket.s3.ap-south-1.amazonaws.com/media/launcher_imz/Group.png">
      </div>
      <h5>Send Gentle Payment Reminders to Customers</h5>
      <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
    </div>
     <div class="col-md-4 col-sm-12 col-xs-12  text-center">
      <div class="icon text-black">
      <img src = "https://gimbooks-media-prod-bucket.s3.ap-south-1.amazonaws.com/media/launcher_imz/Group-17.png">
      </div>
      <h5>Keep a live track of various business reports</h5>
     <!--  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
    </div>
     <div class="col-md-4 col-sm-12 col-xs-12  text-center">
      <div class="icon text-black">
         <img src = "https://gimbooks-media-prod-bucket.s3.ap-south-1.amazonaws.com/media/launcher_imz/Group-11.png">
      </div>
      <h5>Make your GST Filing simpler and faster</h5>
     <!--  <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
    </div>
     
  </div>
</div>
</div>
</section>

<!----service end--->
  <!----section2 start---->
     <section class="sec2">
       <!-- Tabs -->
<!-- <section id="tabs">
  <div class="container">
   
    <div class="row">
      <div class="col-xs-12 ">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-invoice-tab" data-toggle="tab" href="#nav-invoice" role="tab" aria-controls="nav-invoice" aria-selected="true">Invoicing</a>
            <a class="nav-item nav-link" id="nav-expanse-tab" data-toggle="tab" href="#nav-expanse" role="tab" aria-controls="nav-expanse" aria-selected="false">Expenses</a>
            <a class="nav-item nav-link" id="nav-tracking-tab" data-toggle="tab" href="#nav-tracking" role="tab" aria-controls="nav-tracking" aria-selected="false">Time Tracking</a>
            <a class="nav-item nav-link" id="nav-project-tab" data-toggle="tab" href="#nav-project" role="tab" aria-controls="nav-project" aria-selected="false">Projects</a>
            <a class="nav-item nav-link " id="nav-payment-tab" data-toggle="tab" href="#nav-payment" role="tab" aria-controls="nav-payment" aria-selected="true">Payments</a>
            <a class="nav-item nav-link" id="nav-reporting-tab" data-toggle="tab" href="#nav-reporting" role="tab" aria-controls="nav-reporting" aria-selected="false">Reporting</a>
            <a class="nav-item nav-link" id="nav-accounting-tab" data-toggle="tab" href="#nav-accounting" role="tab" aria-controls="nav-accounting" aria-selected="false">Accounting</a>
            <a class="nav-item nav-link" id="nav-mobile-tab" data-toggle="tab" href="#nav-mobile" role="tab" aria-controls="nav-mobile" aria-selected="false">Mobile</a>
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-invoice" role="tabpanel" aria-labelledby="nav-invoice-tab">
            <div class="row" style="color: white;">
              <div class="col-md-6">
                <h4 class="txt4 ">Seamlessly Collaborate on Projects</h4>
                <p class="txt5 ">Keep all your conversations, files and feedback in one place. You’ll keep your team in sync and your projects on schedule.</p>
                <button class="button">Learn More About Invoicing</button>
              </div>
               <div class="col-md-6">
               <h4 class="txt2 "><img src="image/1.png" style="width: 400px;"></h4>
               
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-expanse" role="tabpanel" aria-labelledby="nav-expanse-tab">
           <div class="row" style="color: white;">
              <div class="col-md-6">
                <h4 class="txt4 ">Organize Expenses Effortlessly</h4>
                <p class="txt5 ">Wave goodbye to that shoebox of receipts. Easily log and organize expenses in FreshBooks to track every dollar spent so you're always ready for tax time.</p>
                <button class="button">Learn More About Expenses</button>
              </div>
               <div class="col-md-6">
               <h4 class="txt2 "><img src="image/2.png" style="width: 400px;"></h4>
               
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-tracking" role="tabpanel" aria-labelledby="nav-tracking-tab">
            <div class="row" style="color: white;">
              <div class="col-md-6">
                <h4 class="txt4 ">Insightful Time Tracking</h4>
                <p class="txt5 ">You’ll always invoice for exactly what you’re worth when you track time using FreshBooks. You and your team can log your hours and then automatically put them onto an invoice.</p>
                <button class="button">Learn More About Tracking</button>
              </div>
               <div class="col-md-6">
               <h4 class="txt2 "><img src="image/3.png" style="width: 400px;"></h4>
               
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-project" role="tabpanel" aria-labelledby="nav-project-tab">
           <div class="row" style="color: white;">
              <div class="col-md-6">
                <h4 class="txt4">Seamlessly Collaborate on Projects</h4>
                <p class="txt5 ">Keep all your conversations, files and feedback in one place. You’ll keep your team in sync and your projects on schedule.</p>
                <button class="button">Learn More About Project</button>
              </div>
               <div class="col-md-6">
               <h4 class="txt2"><img src="image/4.png" style="width: 400px;"></h4>
               
              </div>
            </div>
          </div>
           <div class="tab-pane fade" id="nav-payment" role="tabpanel" aria-labelledby="nav-payment-tab">
           <div class="row" style="color: white;">
              <div class="col-md-6">
                <h4 class="txt4">Get Paid Faster</h4>
                <p class="txt5">Get paid up to 11 days faster when you accept credit cards online in FreshBooks. Say hello to automatic deposits, and goodbye to chasing clients for checks.</p>
                <button class="button">Learn More About Payments</button>
              </div>
               <div class="col-md-6">
               <h4 class="txt4"><img src="image/5.png" style="width: 400px;"></h4>
               
              </div>
            </div>
          </div>
           <div class="tab-pane fade" id="nav-reporting" role="tabpanel" aria-labelledby="nav-reporting-tab">
           <div class="row" style="color: wh;">
              <div class="col-md-6">
                <h4 class="txt4">Easy To Understand Reports</h4>
                <p class="txt5">Reports in FreshBooks are simple enough for you to understand but powerful enough for your accountant to love. It’s a win-win.</p>
                <button class="button">Learn More About Reporting</button>
              </div>
               <div class="col-md-6">
               <h4 class="txt2"><img src="image/6.png" style="width: 400px;"></h4>
               
              </div>
            </div>
          </div>
            <div class="tab-pane fade" id="nav-accounting" role="tabpanel" aria-labelledby="nav-accounting-tab">
           <div class="row" style="color: white;">
              <div class="col-md-6">
                <h4 class="txt4">Easy-To-Use Double-Entry Accounting</h4>
                <p class="txt5">Use automatic checks and balances to ensure accuracy and compliance, while financial info helps you make smart business decisions and working with your accountant even easier.</p>
                <button class="button">Learn More About Accounting</button>
              </div>
               <div class="col-md-6">
               <h4 class="txt4"><img src="image/7.png" style="width: 400px;"></h4>
               
              </div>
            </div>
          </div>
           <div class="tab-pane fade" id="nav-mobile" role="tabpanel" aria-labelledby="nav-mobile-tab">
           <div class="row" style="color: white;">
              <div class="col-md-6">
                <h4 class="txt4 " >Work Anywhere with the FreshBooks Mobile App</h4>
                <p class="txt5">With the FreshBooks mobile app you will easily stay connected with your clients and be able to take care of your accounting anywhere.</p>
                <button class="button">Learn More About Mobile</button>
              </div>
               <div class="col-md-6">
               <h4 class="txt2"><img src="image/8.png" style="width: 400px;"></h4>
               
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</section>
./Tabs -->
    <!--  </section> -->
 
   <!-----section2 end--->
    <!----why choose us start---->
<section class="why_choose_us"> 
<div class="why_choose_us pt-4 pb-4">
   <div class="container">
      <h2 class="text-center">Why choose us</h2>
      <p class="text-center mb-5 max-width150">Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit.</p>
        <div class="row">
         <div class="col-lg-4 col-md-6"> 
         <ul>
           <li>
             <div class="icon" style="color: white;"><i class="fa fa-diamond"></i></div>
              <div class="inner">
              <h3>Corporis dolorem</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.<button class="button">Read More</button></p>

           </li>
          <li>
           <div class="icon" style="color: white;"> <i class="fa fa-language"></i></div>
            <div class="inner">
             <h3>Voluptates dolores</h3>
             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <button class="button">Read More</button></p>
            </div>
           </li>
        </ul>
       </div>
      <div class="col-lg-4 col-md-12 text-center "><img src="{{ asset('frontend/image/why_choose_us.jpg') }}" alt="" style="width: 350px; height: 300px; border-radius: 30px;"></div>
      <div class="col-lg-4 col-md-6"> 
      <ul>
       <li>
      <div class="icon" style="color: white;"><i class="fa fa-object-group"></i></div>
        <div class="inner">
          <h3>Eum ut aspernatur</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <button class="button">Read More</button></p>   
          </div>
          </li>
          <li>
        <div class="icon" style="color: white;"><i class="fa fa-adjust"></i></div>
          <div class="inner">
            <h3>Lorem ipsum</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <button class="button">Read More</button></p>    
            </div>
         </li>
        </ul>
      </div>
            
      </div>
    </div>
    </div>
    </section>   

    <!-----why choose us end--->

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



<!---testimonial start-->

 <section class="testimonial text-center" style="background:url({{ asset('frontend/image/1.jpg') }});">
    <div class="heading white-heading">
           <h3 class="txt2"> Testimonial</h3>    
            </div>
        <div class="container">

          
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="{{ asset('frontend/image/team.jpg') }}" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 1</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ asset('frontend/image/team.jpg') }}" class="img-circle img-responsive" /><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 2</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="{{ asset('frontend/image/team.jpg') }}" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 3</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>

<!-----textimonil end--->
    <!---our client say start--->


    <!-----our client say end--->
     <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h3 class="txt2">Contact Us</h3>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
             @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif

             <span id="alert" style="color:red; font-size:20px;"></span>
            <span id="success" style="color:green; font-size:20px;"></span>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.647601591451!2d85.04746131433643!3d25.616623720843616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed576b52730a51%3A0xa89f0fd8d549edf4!2skorawan%20india%20multiventure%20ltd!5e0!3m2!1sen!2sin!4v1620976676158!5m2!1sen!2sin" width="600" height="450" style="border:0; width: 100%; height: 312px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="fa fa-map-marker"></i>
                <p>A108 Adam Street, NY 535022</p>
              </div>
              <div class="col-md-4 info">
                <i class="fa fa-envelope-square"></i>
                <p>info@example.com</p>
              </div>
              <div class="col-md-3 info">
               <i class="fa fa-phone"></i>
                <p>+1 5589 55488 55</p>
              </div>
            </div>

            <div class="form">
              <form id = "contactform" class="php-email-form">
                @csrf
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
      

<script>
    $(document).ready(function(){
    $('#addform').on('submit', function(e){
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "subscription",
        data: $('#addform').serialize(),
        success: function(response){
          console.log(response)
          document.getElementById('success').innerHTML = 'You are successfully subscribed!';
        },
        error: function(error) {
          console.log(error)
          document.getElementById('alert').innerHTML = 'Email already exists!';
        }
      });
    });
    });
  </script>

  <script>
    $(document).ready(function(){
    $('#contactform').on('submit', function(e){
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "contact",
        data: $('#contactform').serialize(),
        success: function(response){
          console.log(response)
          document.getElementById('success').innerHTML = 'Thanks For Contacting With Us, Shortly We Will Reach You';
        },
        error: function(error) {
          console.log(error)
          document.getElementById('alert').innerHTML = 'Something Went Wrong!';
        }
      });
    });
    });
  </script>

  @endsection