 <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
    <div class="container">
      <a class="navbar-brand" rel="nofollow" target="_blank" href="{{ url('/') }}" style="text-transform: uppercase;"> <img src="{{ asset('frontend/image/account_logo.jpg') }}"style="width: 137px; height:68px; border-radius:6%;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto ">

          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>

         <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/pricing-list') }}">Pricing</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Team</a>
          </li>

          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li> &nbsp;
           <li class="nav-item">
            <a class="btn btn-warning" style="border-radius: 10px;" href = "{{ url('/signup') }}"> Sign In </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>