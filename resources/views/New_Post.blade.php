<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job &mdash; Post</title>
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
                <!-- <li class="has-children">
                  <a href="/Candidate">Candidate</a>
                  <ul class="dropdown">
                    <li><a href="#">Full Time</a></li>
                    <li><a href="#">Part Time</a></li>
                    <li><a href="#">Freelance</a></li>
                    <li><a href="#">Internship</a></li>
                    <li><a href="#">Termporary</a></li>
                  </ul>
                </li> -->
                @if(!auth()->guest())
                <li><a href="/ApplyJobs">Apply User</a></li>
               @endif
                <li><a href="/About">About</a></li>
                <li><a href="/Contact">Contact</a></li>
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
        <h2 class="mb-0">Post a Job</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Post a Job</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          @if (count($errors) > 0)
						<div class="alert alert-danger">
							Upload Validation Error<br><br>
							<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
							</ul>
						</div>
						@endif
						@if ($message = Session::get('success'))
						<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>{{ $message }}</strong>
						</div>
					
           @endif
				
            
          
            <form action="/jobpost" method = "POST" class="p-5 bg-white">
                   {{csrf_field()}}

              <!-- <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-price-1">
                    <input type="checkbox" id="option-price-1"> <span class="text-success">$300</span> For 30 days
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-price-2">
                    <input type="checkbox" id="option-price-2"> <span class="text-success">$200</span> / Monthly Recurring
                  </label>
                </div>
              </div> -->



            
             
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Job Title/Event</label>
                  <input type="text" id="fullname" name = "event" class="form-control" placeholder="eg. Mobile app promote">
                </div>
              </div>

              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Start Date</label>
                  <input type="date" id="fullname" name = "startdate" class="form-control" placeholder="eg. 2019/01/01">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">End Date</label>
                  <input type="date" id="fullname" name = "enddate" class="form-control" placeholder="eg. Mobile app promote">
                </div>
              </div>
               
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Per Day Payment</label>
                  <input type="int" idint="fullname" name = "perdaypayment" class="form-control" placeholder="eg. 1500">
                </div>
              </div>
             
               
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Quantity</label>
                  <input type="int" idint="fullname" name = "quantity" class="form-control" placeholder="eg. 4">
                </div>
              </div>


<!-- 
              <div class="row form-group">
                <div class="col-md-12"><h3>Job Type</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-1">
                    <input type="radio" id="option-job-type-1" name="job-type"> Full Time
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-2">
                    <input type="radio" id="option-job-type-2" name="job-type"> Part Time
                  </label>
                </div>

                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-3">
                    <input type="radio" id="option-job-type-3" name="job-type"> Freelance
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-4">
                    <input type="radio" id="option-job-type-4" name="job-type"> Internship
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-4">
                    <input type="radio" id="option-job-type-4" name="job-type"> Termporary
                  </label>
                </div>

              </div> -->

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Location</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                   <select  type="text" name = "location" class="form-control" placeholder="eg. Colombo">
                      <option value="">Chose location</option>
                      <option>Ampara</option>
                      <option>Anuradhapura</option>
                      <option>Badulla</option>
                      <option>Batticaloa</option>
                      <option>Colombo</option>
                      <option>Galle</option>
                      <option>Gampaha</option>
                      <option>Hambantota</option>
                      <option>Jaffna</option>
                      <option>Kalutara</option>
                      <option>Kandy</option>
                      <option>Kegalle</option>
                      <option>Kilinochchi</option>
                      <option>Kurunegala</option>
                      <option>Mannar</option>
                      <option>Matale</option>
                      <option>Matara</option>
                      <option>Monaragala</option>
                      <option>Mullativu</option>
                      <option>Nuwara Eliya</option>
                      <option>Polonnaruwa</option>
                      <option>Puttalam</option>
                      <option>Ratnapura</option>
                      <option>Trincomalee</option>
                      <option>Vavuniya</option>
                  </select> 
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Job Description</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea  name = "discription" class="form-control" id="" cols="30" rows="5" placeholder="eg. We provide lanch and transport."></textarea>
                </div>
              </div>
            
              @if(!auth()->guest())
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Post" class="btn btn-primary  py-2 px-5">
                  </div>
                </div>  
              @else
              <div class="row form-group">
              <div class="col-md-12">
              <a href="/register" class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">Register</span></a>
              <a href="/login" class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">Login</span></a>
              </div>
             </div>
              
              
              @endif
  
            </form>

  



          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">No.346/6, 6 canel, Moraketiya, Embilipitiya, Sri Lanka.</p>

              <p class="mb-0 font-weight-bold">Mobile Number</p>
              <p class="mb-4"><a href="#">+94 71 73 78 668</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">gunawardhanaudara@gmail.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Part Time Job SL is the bigest largest prat time job in Sri Lanka.If you want find a part time job or you want to find worker for your work you can easy to do.</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

   


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">How much pay for 3  months?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to register?  <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
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
                  <li><a href="#">Terms &amp; Policies</a></li>
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