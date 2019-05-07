<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jobstart &mdash; Colorlib Website Template</title>
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
                <li><a href="/ApplyJobs">Apply User</a></li>
               
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
        <h2 class="mb-0">Candidate</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Candidate</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <span class="text-gray-500">Candidate</span>
            <h2 class="font-weight-bold text-black">Location</h2>
          </div>
          <div class="col-md-3" data-aos="fade" data-aos-delay="200">
            <div class="select-wrap mr-auto">
              <span class="icon-keyboard_arrow_down arrow-down"></span>
              <select  type="text" name = "location" class="form-control" placeholder="eg. Colombo">
                            <option>Chose location</option>
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
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Frontend Development</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook, Inc.</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>
           </div>

         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Full Stack Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Google, Inc.</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-danger rounded-circle btn-favorite active"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>

           </div>
         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">New York Times</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>
              
              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>

           </div>
         </div>
        </div>
        
        <div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Frontend Development</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook, Inc.</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>
           </div>

         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Full Stack Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Google, Inc.</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>

           </div>
         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">New York Times</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>
              
              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>

           </div>
         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Frontend Development</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook, Inc.</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>
           </div>

         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Full Stack Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Google, Inc.</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>

           </div>
         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">New York Times</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>
              
              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>

           </div>
         </div>
        </div>
        
        <div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Frontend Development</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Facebook, Inc.</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>
           </div>

         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Full Stack Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">Google, Inc.</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>

              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>

           </div>
         </div>
        </div>

        <div class="row" data-aos="fade">
         <div class="col-md-12">
           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">Open Source Interactive Developer</h2>
                 <div class="badge-wrap">
                  <span class="bg-warning text-white badge py-2 px-4">Full Time</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">New York Times</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>New York City, USA</span></div>
               </div>
              </div>
              
              <div class="ml-auto">
                <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                <a href="#" class="btn btn-primary py-2">Apply Job</a>
              </div>

           </div>
         </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#"><i class="icon-keyboard_arrow_left h5"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="icon-keyboard_arrow_right h5"></i></a></li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </div>    


    

    

    

    
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-white h4 font-weihgt-normal mb-4">Subscribe Newsletter</h2>
          </div>
        </div>
        <form action="" class="row">
          <div class="col-md-9">
            <input type="text" class="form-control border-0 mb-3 mb-md-0" placeholder="Enter Your Email">
          </div>
          <div class="col-md-3">
            <input type="submit" value="Send" class="btn btn-dark btn-block" style="height: 45px;">  
          </div>
        </form>
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
                  <li><a href="#">Register</a></li>
                  <li><a href="#">Find Jobs</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Search Jobs</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">For Employers</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Employer Account</a></li>
                  <li><a href="#">Clients</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Find Candidates</a></li>
                  <li><a href="#">Terms &amp; Policies</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Archives</h3>
                <ul class="list-unstyled">
                  <li><a href="#">January 2018</a></li>
                  <li><a href="#">February 2018</a></li>
                  <li><a href="#">March 2018</a></li>
                  <li><a href="#">April 2018</a></li>
                  <li><a href="#">May 2018</a></li>
                  <li><a href="#">June 2918</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Company</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Terms &amp; Policies</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li>
                <span class="d-block text-white">Address</span>
                New York - 2398 10 Hadson Carl Street
              </li>
              <li>
                <span class="d-block text-white">Telephone</span>
                +1 232 305 3930
              </li>
              <li>
                <span class="d-block text-white">Email</span>
                info@yourdomain.com
              </li>
            </ul>
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
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