<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/IMG-20240316-WA0057.jpg" rel="icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<title>AWTECH | Contact Us</title>
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<style>
		.social-links i {
			color: white;
			padding: 10px;
			background-color: rgb(49, 47, 47);
			border-radius: 5px;
		}

		.social-links i:hover {
			background-color: rgb(255, 196, 0);
			color: black;
		}

		input:hover {
			border-color: rgb(255, 196, 0);
		}

		textarea:hover {
			border-color: rgb(255, 196, 0);
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			overflow: auto;
			z-index: 1;
			margin-top: 5px;
			border-radius: 6px;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}
		.show {
			display: block;
		}

		.woo {
			display: none;
			color: white;
		}

		.dropbtn1 {
			display: none;
		}

		.dropdown1-content {
			display: flex;
		}
		.dropdown1-content i{
			display: none;
		}
		.i {
			display: none;
		}

		.h {
			font-family: 'sans-serif';
			font-size: 30px;
			padding-top: 150px;
		}

		.one a {
			text-decoration: none;
		}

		.one a img {
			width: 80px;
			height: 70px;
			border-radius: 5px;
			background: transparent;
		}

		.logout {
			display: none;
		}

		.footer a {
			color: white;
		}

		.footer a:hover {
			color: rgb(255, 196, 0);
		}
	.slideshow-container1 {
			box-shadow: 1px 1px 1px black;
			/* margin-bottom: 40px; */
			padding: 10px;
			width: 30%;
		}
		@media screen and (max-width:786px) {
			.bot {
				display: none;
			}

			.woo {
				display: block;
				padding-left: 17px;
				color: rgb(255, 196, 0);
				border-bottom: 1px solid white;
				margin-bottom: 20px;

			}

			.at {
				width: 100%;
			}

			.wo {
				display: none;
			}

			.logout {
				display: block;
			}

			.link {
				width: 100%;
			}

			.i {
				display: block;
				margin-left: 22%	;
			}

			.ii {
				display: none;
			}

			.two {
				width: 100%;
			}

			.one {
				font-size: 20px;
				width: 100%;
			}

			div .link1 a:hover {
				background-color: rgb(255, 196, 0);
				color: black;
			}

			.dropbtn1 {
				display: block;
				margin-left: 95px;
			}

			.dropbtn {
				display: none;
			}

			.dropdown1 {
				position: relative;
				display: inline-block;
			}

			.link {
				width: 100%;
			}

			.dropdown1-content {
				display: none;
				position: absolute;
				background-color: rgba(0, 0, 0, 0.888);
				width: 300px;
				overflow: auto;
				z-index: 1;
				margin-top: 15.6px;
				border-radius: 6px;
			}
			.dropdown1-content i{
				display: inline;
			}
			.dropdown1-content a {
				font-weight: normal;
			}

			.show1 {
				display: block;
			}
			.slideshow-container1 {
			width: 100%;
			
		}
		}

		body {
			font-family: Verdana, sans-serif;
		}

		.mySlides1 {
			display: block;
		}

		img {
			vertical-align: middle;
		}

		/* Slideshow container */

		/* Next & previous buttons */
		.prev,
		.next {
			cursor: pointer;
			position: absolute;
			top: 35%;
			width: auto;
			padding: 16px;
			margin-top: -22px;
			color: white;
			font-weight: bold;
			font-size: 18px;
			transition: 0.6s ease;
			border-radius: 0 3px 3px 0;
			user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
			right: 12px;
			border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover,
		.next:hover {
			background-color: rgb(255, 196, 0);
			color: black;
		}

		.fade1 img {
			object-fit: cover;
			height: 250px;
			margin-top: 40px;
		}

		.active,
		.dot:hover {
			background-color: #717171;
		}

		/* Fading animation */
		.fade1 {
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1.5s;
			animation-name: fade;
			animation-duration: 1.5s;
		}

		@-webkit-keyframes fade1 {
			from {
				opacity: .4
			}

			to {
				opacity: 1
			}
		}

		@keyframes fade1 {
			from {
				opacity: .4
			}

			to {
				opacity: 1
			}
		}
		.whatsapp a i {
			color: white;
			font-size: 40px;
			width: 80px;
			height: 80px;
			background-color: rgb(0, 255, 13);
			padding: 15px;
			border-radius: 50%;
			text-align: center;

		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {

			.prev,
			.next,
			.text {
				font-size: 11px;
			}
			
		}

		.house {
			color: rgb(26, 26, 26);
			font-size: 16px;
		}

		.house h6 {
			font-weight: bold;
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
		}

		.house p {
			padding: 0px 20px;
		}

		.whatsapp {
			display: flex;
			flex-direction: row-reverse;
			width: 100%;
			padding: 20px;
		}

	</style>
</head>

<body>
	<div class="as1"></div>
	<div class="link jumbotron-fluid fixed-top font-weight-bold">
		<div class="two col-sm-12 container d-flex pb-3">
			<div class="one col-sm-5 pt-3">
			<img src="img/IMG-20240316-WA0057.jpg" style="width: 70px;" alt="">
			<span><a href="#" class="text-light">AWTECH<span class="text-warning">.</span> </a></span>
			</div>
			<div class="col-sm-7 link1 d-flex pt-3 justify-content-center">
			<div class="dropdown1">
			<button onclick="myFunction1()" class="dropbtn1 btn btn-outline-warning">&#9776;</button>
			<div id="myDropdown1" class="dropdown1-content">
		<a href="home.php" class="nav nav-link">Home</a>
		<a href="about.php" class="nav nav-link">About Us</a>
		<a href="contact.php" class="nav nav-link">Contact Us</a>
		<a href="announcement.php" class="nav nav-link">Announcement</a>
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
			<!-- dropdown to all link except logout on navbar -->
			<script>
			/* When the user clicks on the button, 
			toggle between hiding and showing the dropdown content */
			function myFunction1() {
			  document.getElementById("myDropdown1").classList.toggle("show1");
			}
			
			// Close the dropdown if the user clicks outside of it
			window.onclick = function(event) {
			  if (!event.target.matches('.dropbtn1')) {
				var dropdowns = document.getElementsByClassName("dropdown1-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
				  var openDropdown = dropdowns[i];
				  if (openDropdown.classList.contains('show1')) {
					openDropdown.classList.remove('show1');
				  }
				}
			  }
			}
			</script>
		</div>
			</div>
		</div>
	<div class="whatsapp jumbotron-fluid fixed-bottom font-weight-bold">
		<a href="https://wa.me/+250798895465" target="_blank"><i class="bi-whatsapp"></i></a>
	</div>
	<div class="container">
		<div class="row">
		<div class="page col-sm-6 pt-5">
		<p class="">
			<span class="font-weight-bold">Welcome to All With Technology (AWTECH) Company</span>, we're committed to empowering individuals and
			businesses to thrive in the digital age. Offering a comprehensive range of services,
			 we specialize in internships, computer training, digital services, and expert guidance
			  on all things tech. Whether you're a student looking to launch your career, 
			  a professional aiming to upskill, or a business in need of cutting-edge digital solutions,
			   we've got you covered.

		</p>
		</div>
		<div class="as col-sm-6 rounded"></div>
	</div>
	</div>
	<div class="at" style="background-color: rgba(255, 255, 255, 0.973);">
		<div class="container pt-5">
			<div class="row p-3 mb-3">
		<div class="col-sm-4 py-3 my-3">
			<div class="mySlides1 fade1">
				<img id="slideshow-img" src="img/CT.jpg" class="mb-4 rounded w-100">
			</div>	
			<div class="house col-sm-12">
			<h6 class="font-italic font-weight-bold">Computer Training</h6>
			<p class="small"> computer training, digital services, and expert guidance
				on all things tech. Whether you're a student looking to launch your career, 
				a professional aiming to upskill, or a business in need of cutting-edge digital solutions,
				we've got you covered.</p>
			</div>

					<button type="submit" class="btn btn-outline-warning w-100"><a class="nav-link" href="#">Apply Now</a></button>
				</div>
				<div class="col-sm-4 py-3 my-3">

				<div class="mySlides1 fade1">
				<img id="slideshow-img" src="img/IAP.jpg" class="mb-4 rounded w-100">
				</div>
							
			<div class="house col-sm-12">
					<h6 class="font-italic font-weight-bold">Industrial Attachment Program</h6>
					<p class="small">Our tailored internship programs provide hands-on experience in fields like computer systems,
						telecommunications and electronics, giving the next generation of engineers and tech 
						professionals a chance to apply their knowledge in real-world.</p>
					</div>
		<button type="submit" class="btn btn-outline-warning w-100"><a class="nav-link" href="iap.php">Apply Now</a></button>
		</div>
			<br>
	<div class="col-sm-4 py-3 my-3">
		<div class="mySlides1 fade1">
			<img id="slideshow-img" src="img/2.jpg" class="mb-4 rounded w-100">
					</div>
					<div class="house col-sm-12">	
								<p class="small">As a full-service digital agency, we offer web design, digital marketing, app development, 
									and IT consulting to help businesses enhance their online presence and streamline their 
									tech solutions. Our team of experts ensures your business stays ahead in the fast-evolving
									 digital landscape.</p>
							</div>

					<button type="submit" class="btn btn-outline-warning w-100"><a class="nav-link" href="#">Apply Now</a></button>
				</div>
			</div>
		</div>
		<div class="al1 jumbotron col-sm-12 row border rounded p-3">
			<h3 class="text-center p-4 font-weight-bold">Director Manager</h3>
			<img src="img/001.jpg" style="width: 250px; height: 210px; border-radius: 50%;" alt="">
			<h6 class="text-center pt-2 font-weight-bold">NIYOMWUNGERI Alexis</h6>
			<span class="text-center font-weight-bold">Managing Director</span>
			<span class="text-center font-weight-bold">+250 783 402 769</span>
			</div>
			</div>
		<div class="container-fluid pt-5 text-light" style="background-color: rgba(0, 0, 0, 0.902);">
			<div class="row">
				<div class="col-sm-3 pb-4" >
					<div class="col-sm-2">
			<h5 class="pb-2 font-weight-bold">AWTECH<span class="text-warning">.</span></h5>
				<p>Muhanga,<span>Nyamabuye</span></p>
				<p><span class="font-weight-bold">Phone:</span>&nbsp;+250783402769</p>
				<p><span class="font-weight-bold">Email:</span>&nbsp;allwithtechno@gmail.com</p>
				
			</div>
			<div class="social-links ml-3">
				<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
				<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
			  </div>
		</div>
		  <div class="footer pb-2 col-sm-2">
			<h6 class="text-light font-weight-bold">Useful Link Service</h6>
			<a href="#" class="nav nav-link"><i class="bx bx-chevron-right text-warning"></i> Home</a>
			<a href="#" class="nav nav-link"><i class="bx bx-chevron-right text-warning"></i> About Us</a>
			<a href="#" class="nav nav-link"><i class="bx bx-chevron-right text-warning"></i> Contact</a>
			<a href="#" class="nav nav-link"><i class="bx bx-chevron-right text-warning"></i> Announcement</a>
		</div>
		  <div class="footer col-sm-3 pb-2">
			<h6 class="pb-2 text-light font-weight-bold">Our Service</h6>
			<a href="#" class="nav nav-link" id=""><i class="bx bx-chevron-right text-warning"></i> Computer Training</a>
			<a href="#" class="nav nav-link" id=""><i class="bx bx-chevron-right text-warning"></i> Industrial Attachment</a>
			<a href="#" class="nav nav-link" id=""><i class="bx bx-chevron-right text-warning"></i> Offers Digital Agent Services</a>
		</div>
		  <div class="col col-sm-4">
			<div class="col pb-4">
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
		</div>
		</div>
</body>

</html>