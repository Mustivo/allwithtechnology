<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="img/IMG-20240316-WA0057.jpg" rel="icon">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>All | With | Technology</title>
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <style>
	*{
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
		font-family: sans-serif;
	}
	.social-links i{
	color: white; 
	padding: 10px;
	background-color: rgb(49, 47, 47); 
	border-radius: 5px;
	}
	.social-links i:hover{
		background-color: rgb(255, 196, 0);
		color: black;
	}
	.one{
		font-size:30px;
	}
	.one a{
		text-decoration: none;
		padding-top: 100px;
		}.footer a{
	color: white;
}
.footer a:hover{
    color: rgb(255, 196, 0);
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgba(0, 0, 0, 0.888);
  min-width: 160px;
  overflow: auto;
  z-index: 1;
  margin-top: 5px;
}

.dropdown-content a {
  color: white;
  border-bottom: 1px solid white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown a:hover {background-color: rgb(255, 196, 0);}

.show {display: block;}
.dropbtn{
	width: 100px;
}
	@media screen and (max-width:786px){
		.one{
			font-size: 20px;
		}
	}
  </style>
</head>
<body>
	<div class="as"></div>
		<div class="link jumbotron-fluid fixed-top font-weight-bold pb-2">
				<div class="two col-sm-12 d-flex justify-content-between">
					<div class="one col-sm-2 mt-3">
						<a href="#" class="text-light">AWTECH<span class="text-warning">.</span></a>
					</div>
				<div class="three col-sm-3 d-flex mt-3">
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn btn btn-outline-warning">Login</button>
						<div id="myDropdown" class="dropdown-content">
							<a href="login.php">Student</a>
							<a href="user_admin.php">Admin</a>
						</div>
						</div>
					<form action="" method="POST">
					<button class="btn btn-warning ml-3" name="logo1">SignUp</button>
					</form>
					<?php
					if(isset($_POST['logo1'])){
						header("location:signup.php");
					}
					?>
				</div>
			</div>
		</div>
		<script>
			/* When the user clicks on the button, 
			toggle between hiding and showing the dropdown content */
			function myFunction() {
			  document.getElementById("myDropdown").classList.toggle("show");
			}
			
			// Close the dropdown if the user clicks outside of it
			window.onclick = function(event) {
			  if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
				  var openDropdown = dropdowns[i];
				  if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				  }
				}
			  }
			}
			</script>
		<div class="pl-5 col-sm-12 pt-5">
			<h3 class="text-center text-light" style="font-family: 'pristina'; font-size: 50PX; padding-top: 150px;">All With Technology</h3>
		<p class="text-center text-light">We are team of talented digital marketers</p>

		</div>
	<div class="at" style="background-color: rgba(255, 255, 255, 0.973);">
		<div class="col-sm-12 pt-5">
			<h1 class="text-center font-italic font-weight-bold pb-5">All With Technology</h1>
			<div class="col-sm-12 d-flex justify-content-center">
				<img src="img/IMG-20240316-WA0057.jpg" class="w-50 h-50" alt="">
			</div>
			<div class="col-sm-12">
			<p class="pb-5 font-italic" style="font-size: 16px; line-height: 27px;">
			<span class="font-weight-bold">All With Technology (AWTECH)</span>, is a tech company that provides different
			IT services including Computer training, industrial attachment in Software
			development and computer system and architecture and offers digital agent
			services. It is situated in Nyamabuye, Muhanga City.
			</p>
		</div>
		</div>
	<div class="container-fluid pt-5 text-light" style="background-color: rgba(0, 0, 0, 0.902);">
		<div class="row">
			<div class="col-sm-3 pb-4" >
				<div class="col-sm-2">
		<h5 class="pb-2 font-weight-bold">AWTECH<span class="text-warning">.</span></h5>
			<p>Muhanga,<span>Nyamabuye</span></p>
			<p><span class="font-weight-bold">Phone:</span>&nbsp;+250786974250</p>
			<p><span class="font-weight-bold">Email:</span>&nbsp;allwithtechno@gmail.com</p>
			
		</div>
		<div class="social-links ml-3">
			<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
			<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
			<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
			<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
			<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
		  </div>
	</div>
	  <div class="footer pb-2 col-sm-2">
		<h6 class="text-light font-weight-bold">Useful Link Service</h6>
		<a href="#" class="nav nav-link"><i class="bx bx-chevron-right text-warning"></i> Home</a>
		<a href="#" class="nav nav-link"><i class="bx bx-chevron-right text-warning"></i> Application</a>
		<a href="#" class="nav nav-link"><i class="bx bx-chevron-right text-warning"></i> Contact</a>
		<a href="#" class="nav nav-link"><i class="bx bx-chevron-right text-warning"></i> Announcement</a>
	</div>
	  <div class="footer col-sm-3 pb-2">
		<h6 class="pb-2 text-light font-weight-bold">Our Service</h6>
		<a href="#" class="nav nav-link" id=""><i class="bx bx-chevron-right text-warning"></i> Computer Training</a>
		<a href="#" class="nav nav-link" id=""><i class="bx bx-chevron-right text-warning"></i> Industrial Attachment</a>
		<a href="#" class="nav nav-link" id=""><i class="bx bx-chevron-right text-warning"></i> Offers Digital Agent Services</a>
	</div>
	  <div class="col  col-sm-4">
		<div class="col pb-5">
		<h6 class="pb-2 text-light font-weight-bold">Our NewsLetter</h6>
			<p class="small">
				All With Technology (AWTECH), It is situated in Nyamabuye, Muhanga City.
			 </p>
			 <form action="" method="POST" class="d-flex">
				<input type="text" name="sub" class="form-control">
				<button type="submit" name="save" class="btn btn-warning">Subscribe</button>
			</form>
		
	</div>
	</div>
	</div>
</div>
<div class="all pb-4">
	<p class="text-center small pt-5 text-light">&copy; Copyright AWTECH. All right Reserved </p>
	<p class="text-center small text-light">Developed By <span class="text-warning">Mutiti Stivo</span></p>
	</div>
	</div>
</body>
</html>