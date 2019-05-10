
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title> Edit Profile</title>
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



</head>
<body>

<!-- banner -->
 @foreach($data as $value)
	<div class="w3-banner-top">
	<div class="agileinfo-dot">
			
       <form action="/editdetails" method = "POST">
         {{csrf_field()}}  
		<div class="w3-banner-grids">
			<div class="col-md-6 w3-banner-grid-left">	
				<div class="w3-banner-img">
					<img src="images/{{$value->ProfilePicture }}" alt="img">
                     
				
					<h3 class="test">  </h3>
                    
					
				</div>
			</div>
			<div class="col-md-6 w3-banner-grid-right">
			<div class="w3-banner-text">
				
				
			</div>
				<div class=" w3-right-addres-1">
				<ul class="address">

                                  <li>
									<ul class="agileits-address-text ">
										<li class="agile-it-adress-left"><b>Name</b></li>
                                        <li> <input id="name" type="text" class="form-control" name="name" value="{{$value-> name}}" required autofocus  ></li>
									</ul>
								</li>

								<li>
									<ul class="agileits-address-text ">
										<li class="agile-it-adress-left"><b>D.O.B</b></li>
                                        <li> <input id="dob" type="date" class="form-control" name="dob" value="01/01/2019" required autofocus ></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>PHONE</b></li>
                                        <li> <input id="phone" type="number" class="form-control" name="mobile" value="{{$value-> Mobile_Number}}" required autofocus  ></li>
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>ADDRESS</b></li>
                                        <li> <input id="phone" type="text" class="form-control" name="address" value="{{$value->Address}}" placeholder = "No.03,colombo." required autofocus  ></li>
									</ul>
								</li>
                                <li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>CURRENT LOCATION</b></li>
										<li> 
                                        <select id="phone" type="text" class="form-control" name="location" value="{{$value->location}}" required autofocus>
                                                <option value="{{$value->location}}">{{$value->location}}</option>
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
                                        
                                        </li>
									</ul>
								</li>
                                <li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>NIC</b></li>
                                        <li> <input id="NIC" type="text" class="form-control" name="NIC"  value="{{$value->NIC_NO}}"  required autofocus  ></li>
										
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>E-MAIL</b></li>
                                        <li> <input id="email" type="email" class="form-control" name="email" readonly="readonly" value="{{$value->email}}"  required autofocus  ></li>
										
									</ul>
								</li>
								<li>
									<ul class="agileits-address-text">
										<li class="agile-it-adress-left"><b>Gender</b></li>
                                        <li> <input id="gender" type="text" class="form-control" name="gender" readonly="readonly" value="{{$value->Sex}}"  required autofocus  ></li>
										
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
					<img src="images/{{$value->Jobphoto}}" alt="img1">
		
				</div>
				<div class="col-md-4 w3-about-grid-right1">
					<h3>Discription</h3>
							
                  <input id="description" type="text" class="form-control" name="description" value="{{$value->Description}}" placeholder = "I am works at prattime.lk"  required autofocus  >				
                   &nbsp;	
				<div class="clearfix"></div>
                    <div class="ml-auto">
                         <input type="submit" value="Post" class="btn btn-success py-2 px-5">
                    </div>
				 </div>	  
			</div>
				
		</div>
	</div>
    </form>
</div>
</div>
@endforeach

</body>
</html>