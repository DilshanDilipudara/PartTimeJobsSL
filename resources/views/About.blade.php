<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
      
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="/" class="text-black h2 mb-0">Job <strong> SL </strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="/">Home</a></li>
              
                @if(!auth()->guest())
                <li><a href="/ApplyJobs">Apply User</a></li>
               @endif
                <li><a href="/About">About</a></li>
                <!-- <li><a href="/Contact">Contact</a></li> -->
                <li><a href="/New_Post"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Post a Job</span></a></li>
                
                @if(!auth()->guest())
                 
               <li class="has-children">
                  <a href="/" class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">Setting</span></a>
                  <ul class="dropdown">
                    <li><a href="/Profile">Profile</a></li>
                    <li><a href="/AccountSetting">Account Setting</a></li>
                  </ul>
                </li> 


                 <li><a href="{{ route('logout') }}" class="rounded bg-primary py-2 px-3 text-white" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><span class="h5 mr-2">Logout</span></a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                     </li>
                     @if(Auth::user()->Position  =='Admin' || Auth::user()->Position  =='SuperAdmin' ) 
                     <li><a href="Admindashboard" class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">Admin</span></a></li>
                    @endif

                     @else
                 <li><a href="/login" class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">Login</span></a></li>
                <li><a href="/register" class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">Register</span></a></li> 
                @endif
              
             
              </ul>
            
              
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header> 

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">About</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>About</span></p>
      </div>
    </div>

    
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-5" data-aos="fade">
            <img src="images/img_1.jpg" class="img-md-fluid" alt="Placeholder image">
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="bg-white pl-lg-5 pl-0  pb-lg-5 pb-0">
            <h2 class="font-weight-bold text-black" data-aos="fade">About</h2>
            <p>Since we formed in 2019, we have become part of the Sri Lanka largest hiring website, offering jobseekers the chance to search, view and apply for live job adverts, in any industry,
             across the whole of the Sri Lanka.
             Would you like to get a job and do some extra job from the afford money?
             </p>
            <ul class="site-block-check">
              <li>You can find any type of jobs easily from this site.</li>
              <li>You can assure application job and confirmed job to vide the profile. And also,now you can
              vide photos of profile and find good user</li>
              <li>You can find any type of job,in any industry anywhere in the world from this site.</li>
            
            </ul>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END section -->




    <div class="site-section">
      <div class="container">
        
        <div class="row top-destination">
          

          <div class="col-lg-2 col-md-4 col-sm-6 col-12 center" data-aos="fade">
            <a href="#" class="place">
              <img src="images/dp.png" alt="Image placeholder" >
              <h2>Dilshan Dilip Udara </h2>
            </a>
          </div>
         
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-bold text-black" data-aos="fade">CEO of the Team</h2>
            <p>Dilshan is a thired year undergatuate student in university <br>
              of Jaffna.</p>
          </div>
        </div>
      </div>
    </div>

 <!-- END section -->



    <div class="site-section">
      <div class="container">
        
        <div class="row top-destination">
         
        @foreach($jobadmin as $value)
        <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade">
            <a href="#" class="place">
              <img src="/upload/{{$value->ProfilePicture}}" alt="Image placeholder">
              <h2>{{$value->name}}</h2>
             
            </a>
          </div>
         @endforeach
        
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-bold text-black" data-aos="fade">Our Team</h2>
            <p>Active and flexible team is in our company. We hope to provide good service.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- END section -->

    <div class="site-section border-top">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
        

        

        </div>
      </div>
    </div>

    
    <div class="site-blocks-cover" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-10">
          
          </div>
        </div>
      </div>
    </div>

    

    

    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">For Candidates</h3>
                <ul class="list-unstyled">
                  <li><a href="/register">Register</a></li>
                  <li><a href="/login">Login</a></li>
                  <li><a href="/">Find Jobs</a></li>
                  <li><a href="/">Search Jobs</a></li>
                  <li><a href="/Contact">Contact</a></li>
                  <li><a href="/">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">For Employers</h3>
                <ul class="list-unstyled">
                @if(!auth()->guest())
                  <li><a href="/Profile">Employer Account</a></li>
                  @endif
                  
                  <li><a href="/">Clients</a></li>               
                  <li><a href="/">Find Candidates</a></li>                  
                  <li><a href="/">Careers</a></li>
                </ul>
              </div>
             
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Company</h3>
                <ul class="list-unstyled">
                  <li><a href="/About">About</a></li>
                  <li><a href="/About">Team</a></li>
                  
                  <li><a href="/Contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li>
                <span class="d-block text-white">Address</span>
                 Embilipitiya, SriLanka.
              </li>
              <li>
                <span class="d-block text-white">Telephone</span>
                +94 71 73 78 668
              </li>
              <li>
                <span class="d-block text-white">Email</span>
                 parttimelk71@gmail.com
              </li>
            </ul>
            
          </div>
        </div>
        
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

  <script src="js/main.js"></script>
    
  </body>
</html>