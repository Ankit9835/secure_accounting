@extends('Frontend.master')

@section('content')

<style>
  .signUp{
    border:  rgb(25, 0, 255);
    padding: 30px 0px 13px 81px;
    margin: 24px 9px -8px 383px;
    /*margin-left: 489px;*/
    background-color: rgba(0, 183, 255, 0.644);
    width: 550px;
    box-sizing: border-box;
  }
  @media screen and (max-width:1014px){
    .signUp{
       border:  rgb(25, 0, 255);
    padding: 30px 0px 13px 81px;
    /*margin: 24px 9px -8px 283px;*/
    margin:auto;
    /*margin-left: 489px;*/
    background-color: rgba(0, 183, 255, 0.644);
    width: 550px;
    box-sizing: border-box;
    }
  }
  .register{
    margin-left: 65px;
  }
  .form-control{
    margin-left:40px;
  }
  #contact .php-email-form input {
    padding: 19px 16px;
    border-radius: 20px;
}
@media screen and (max-width:990px){
  #contact .php-email-form input{
     padding: 19px 16px;
    width: 200px;
    border-radius: 20px;
  }
  
}
.button1{
  margin-left:40px;

}
.a{
  background: #007bff;
    border: 0;
    border-radius: 20px;
    padding: 8px 10px;
    color: #fff;
    transition: 0.3s;
}
#contact .php-email-form button[type="submit"] {
    background: #007bff;
    border: 0;
    border-radius: 20px;
    padding: 8px 15px;
    color: #fff;
    transition: 0.3s;
}
.bgImage{
  background:url({{ asset('frontend/image/1.jpg') }});
}
.small, small {
    font-size: 80%;
    font-weight: 800;
}
</style>


<div class="bgImage">
<section id="contact">
    <div class="container-fluid" data-aos="fade-up">
      <div class="section-header">
        <h3 class="txt2">Sign Up</h3>
      </div>
      <div class="row">
          <div class="signUp">
            <div class="form">
              <form action="" method="post" role="form" class="php-email-form ">
              <!--   {{-- <div class="form-row"> --}} -->
                  <h3 class="register">Register Here!</h3>
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-lg-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                      <div class="validate"></div>
                  </div>
                  <div class="form-group col-lg-6">
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Mobile No." data-rule="phone" data-msg="Please enter a valid Mobile No." required />
                      <div class="validate"></div>
                  </div>
                  <div class="form-group col-lg-6">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" data-rule="password" data-msg="Please enter a valid password" required />
                      <div class="validate"></div>
                  </div>
                  <div class="form-group col-lg-6">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Confirm Password" data-rule="password" data-msg="Please enter a valid password" required />
                      <div class="validate"></div>
                  </div>
               <!--  {{-- </div> --}} -->
                <div class="button1"><button type="submit">Register</button>&nbsp;
                  <!-- {{-- <button type="submit">Login</button> --}} -->
                  <small>Already Registered?</small>&nbsp;<a href="#" class="a">Login Here!</a>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </section>
</div>

@endsection