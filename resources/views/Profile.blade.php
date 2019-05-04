
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="C-Resume a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="profilestyle/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="profilestyle/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="profilestyle/css/bootstrap.min.css" type="text/css" media="all" />
<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="profilestyle/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="profilestyle/js/bootstrap.min.js"></script>
<!-- //Default-JavaScript-File -->

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
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
          <li><a href="/Candidates">Candidates</a></li>
         
          <li><a href="/About">About</a></li>
          <li><a href="/Contact">Contact</a></li>
          <li><a href="/New_Post"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Post a Job</span></a></li>
          
          @if(!auth()->guest())
           <li><a href="/Profile" class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">Profile</span></a></li>
           <li><a href="{{ route('logout') }}" class="rounded bg-primary py-2 px-3 text-white" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><span class="h5 mr-2">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
               </li>
               @if(Auth::user()->Position  =='Admin') 
               <li><a href="/" class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">Admin</span></a></li>
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




<!-- banner -->
 @foreach($data as $value)
	<div class="w3-banner-top">
	<div class="agileinfo-dot">
			

		<div class="w3-banner-grids">
			<div class="col-md-6 w3-banner-grid-left">
				<div class="w3-banner-img">
					<img src="profilestyle/images/ban661.jpg" alt="img">
					<h3 class="test"> {{$value->name}} </h3>
					<p class="test" >{{$value->name}}</p>
				</div>
			</div>
			<div class="col-md-6 w3-banner-grid-right">
			<div class="w3-banner-text">
				<h3> {{$value->name}}</h3>
				
			</div>
				<div class=" w3-right-addres-1">
				<ul class="address">
								<li>
									<ul class="agileits-address-text ">
										<li class="agile-it-adress-left"><b>D.O.B</b></li>
										<li><span>:</span>21-08-1987</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>PHONE</b></li>
										<li><span>:</span>{{$value-> Mobile_Number}}</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>ADDRESS</b></li>
										<li><span>:</span>{{$value->location }}</li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>E-MAIL</b></li>
										<li><span>:</span><a href="{{$value->email}}">{{$value->email}}</a></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>Gender</b></li>
										<li><span>:</span><a href="#">{{$value->Sex}}</a></li>
									</ul>
								</li>
							</ul> 

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>

	</div>
<!-- banner -->
<!-- /about -->

<div class="w3-about" id="about">
	<div class="container">
		<div class="w3-about-head">
			<h3>About me</h3>
		</div>
		<div class="w3-about-grids">
		<div class=" w3-about-grids1">
				<div class="col-md-6 w3-about-grid-left1">
					<img src="profilestyle/images/ab5.jpg" alt="img1">
		
				</div>
				<div class="col-md-4 w3-about-grid-right1">
					<h3>Discription</h3>
					<p> {{$value->Description}}</p>


        @endforeach        
					<h5>Participant</h5>
					<div class= "w3-about-grid-small-border">
					<div class="col-md-6 w3-about-grid-small">
						<h3 class="w3-head-project">{{$applyjob}}</h3>
						<h5>Apply Jobs</h5>
					</div>
					<div class="col-md-6 w3-about-grid-small">
					<h3 class="w3-head-project">{{$confirmjob}}</h3>
						<h5>Confirm Jobs</h5>
					</div>
					
				<div class="clearfix"></div>
				</div>
				</div>
				
		</div>
	</div>
</div>
</div>
<!-- //about  -->

<!-- contact -->
	 <div class="contact" id="contact">
	<div class="container">
		<div class="w3ls-heading">
			<h3>Contact me</h3>
		</div>
			<div class="contact-w3ls">
				<form action="#" method="post">
					<div class="col-md-7 col-sm-7 contact-left agileits-w3layouts">
						<input type="text" name="First Name" placeholder="Name" required="">
						<input type="email"  class="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Number" placeholder="Mobile Number" required="">
						<!-- <input type="text" class="email" name="Last Name" placeholder="Last Name" required=""> -->
					</div> 
					<div class="col-md-5 col-sm-5 contact-right agileits-w3layouts">
						<textarea name="Message" placeholder="Message" required=""></textarea>
						<input type="submit" value="Submit">
					</div>
					<div class="clearfix"> </div> 
				</form>
			</div>  

	</div>
</div>
<!-- //contact -->
<!-- footer -->

 @foreach($data as $val)
	<div class="w3l_footer">
		<div class="container">
			
			<div class="w3ls_footer_grids">
				
				<div class="w3ls_footer_grid">
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Location</h4>
							<p>{{$val->location }}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Email</h4>
							<a href="mailto:{{$value->email}}">{{$val->email}}</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>Call Me</h4>
							<p>{{$val-> Mobile_Number}}</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="w3l_footer_pos">
			<p>© 2019 Part Time Jobs Sri Lanka.</p>
		</div>
	</div>
    @endforeach
<!-- //footer -->
<script src="js/bars.js"></script>
<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- text-effect -->
		<script type="text/javascript" src="js/jquery.transit.js"></script> 
		<script type="text/javascript" src="js/jquery.textFx.js"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
					$('.test').textFx({
						type: 'fadeIn',
						iChar: 100,
						iAnim: 1000
					});
			});
		</script>
<!-- //text-effect -->
<!-- menu-js --> 	
	<script src="profilestyle/js/modernizr.js"></script>	
	<script src="profilestyle/js/menu.js"></script>
<!-- //menu-js --> 	


<script type="text/javascript" src="profilestyle/js/move-top.js"></script>

<script type="text/javascript" src="profilestyle/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

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
  
  <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  <script src="js/main.js"></script>

 
</body>
</html>