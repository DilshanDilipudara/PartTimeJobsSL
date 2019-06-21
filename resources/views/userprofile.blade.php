
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Profile</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
    
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

         
     


<!-- banner -->
 @foreach($data as $value)
	<div class="w3-banner-top">
	<div class="agileinfo-dot">
			

		<div class="w3-banner-grids">
			<div class="col-md-6 w3-banner-grid-left">
				<div class="w3-banner-img">
					
					
					 <img src="/upload/{{$value->ProfilePicture}}"  alt="img"  style="width:290px; height:300px; float:left; border-radius:50%; margin-right:25px; backgroudcolor:white" class="rounded-circle">
				

				   &nbsp;
					<form method="post" action="{{url('/uploadfile')}}" enctype="multipart/form-data">
					{{ csrf_field() }}
					
					 <div class="form-group">
                      &nbsp; 
					<!--  <i class="fa fa-photo" style="font-size:40px;color:red"></i>  -->
					 
                      <input type="file" name="select_file" />
                    <input type="submit" name="upload" class="btn btn-primary" value="Upload">
       
        </div>		
			</form>
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
					<h3 class="test"> </h3> &nbsp;
				
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
										<li><span>:</span>{{$value->DOB}}</li>
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
										<li><span>:</span>{{$value->Address }}</li>
									</ul>
								</li>

								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>CURRENT LOCATION</b></li>
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
							
							<div class="ml-auto">
                               <a href="{{('/editprofile'.$value->id)}}" class="btn btn-success py-2">Edit Profile</a>
						  </div>
						
             
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
				
					<img src="/profileJobimage/{{$value->Jobphoto}}" alt="img" style="width:400px; height:400px;" >
		      
					<form method="post" action="{{url('/uploadJobfile')}}" enctype="multipart/form-data">
							
							{{ csrf_field() }}
							<div class="form-group">
							&nbsp; 
								<input type="file" name="select_file" />
								<input type="submit" name="upload" class="btn btn-primary" value="Upload">
					
						</div>		
		    	</form>
          
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
	<script src="js/modernizr.js"></script>	
	<script src="js/menu.js"></script>
<!-- //menu-js --> 	


<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript" src="js/easing.js"></script>
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
 
</body>
</html>