<section>
   
     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <!-- Uncomment below if you prefer to use an image logo -->
       <a href="{{ url('/') }}" class="logo me-auto me-lg-0"><img src="{{ asset('/img/Scinov Logo.png') }}" alt="" class="img-fluid "></a>
       <h2 class="logo me-auto m-2"><a href="{{ url('/') }}"><span>  SCINOV</span> AFRICA</a></h2>
       <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ url('/') }}" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>PROJECTS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/coding_education') }}">CODING EDUCATION</a></li>
              <li><a href="{{ url('/donations') }}">ICT DONATIONS</a></li>
              <li><a href="{{ url('/digital_exchange') }}">DIGITAL EXCHANGE</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/events') }}">EVENTS</a></li>
          <li><a href="{{ url('/contact_us') }}">CONTACT</a></li>
          <!-- Add the "btn" and "btn-get-started" classes to make it a button -->
          <li class="ml-auto"><a href="{{ url('/donate') }}" class="btn btn-get-started ">Donate</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
        <div class="header-social-links d-flex">
          <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
          <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        </div>
        
      </div>
      
    </header><!-- End Header -->
  
</section>