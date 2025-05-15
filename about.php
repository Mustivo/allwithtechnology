<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="img/IMG-20240316-WA0057.jpg" rel="icon">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>AWTECH | Home</title>
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <style>
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
.dropdown a:hover {background-color: rgb(255, 196, 0);}

.show {display: block;}
.woo{
	display: none;
	color: white;
}
.dropbtn1{
	display: none;
}
.dropdown1-content{
	display: flex;
}
.i{
	display: none;
}
.one{
	font-size: 30px;
}.one a{
	text-decoration: none;
}
.logout{
	display: none;
}
.footer a{
	color: white;
}
.footer a:hover{
    color: rgb(255, 196, 0);
}
@media screen and (max-width:786px){
	.woo{
	display: block;
	padding-left: 17px;
	color:  rgb(255, 196, 0);
	border-bottom: 1px solid white;
	margin-bottom: 20px;
	
}.wo{
	display: none;
}
.logout{
	display: block;
}
.link{
	width: 100%;
}
.i{
	display: block;
	margin-left: 22%;
}.ii{
	display: none;
}
.two{
	width: 100%;
}.one{
	font-size: 25px;
	width: 100%;
}div .link1 a:hover{
    background-color: rgb(255, 196, 0);
	color: black;
}
.dropbtn1{
	display: block;
	margin-left: 100px;
}.dropbtn{
	display: none;
}
.dropdown1 {
  position: relative;
  display: inline-block;
}
.link{
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
.dropdown1-content a{
	font-weight: normal;
}

.show1 {display: block;}
}
.whatsapp {
			display: flex;
			flex-direction: row-reverse;
			width: 100%;
			padding: 20px;
		}

.whatsapp a i {
			color: white;
			font-size: 22px;
			width: 80px;
			height: 80px;
			background-color: rgb(0, 255, 0);
			padding: 15px;
			border-radius: 8px;
			text-align: center;
			letter-spacing: 3px;
		}
  </style>
</head>
<body>
	<div class="as3"></div>
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
				</div>
					</div>
				</div>
				<!-- dropdown to logout on navbar -->
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
		<div class="whatsapp jumbotron-fluid fixed-bottom font-weight-bold">
		<a href="https://wa.me/+250786974250" target="_blank" class="nav-link"><i class="bi-whatsapp">Chat</i></a>
	</div>
		<div class="pl-5 col-sm-12 pt-5">
			<h3 class="text-center text-light" style="font-size: 50px; padding-top: 150px;">About Us</h3>
		<p class="text-center text-light">We make many application to learn....</p>
		</div>
	<div class="at1" style="background-color: rgba(255, 255, 255, 0.973);">
		<div class="container col-sm-10">
			<!-- <h1 class="text-center font-italic font-weight-bold pb-5">IT Service</h1> -->
			<?php
			require "connection.php";
			$select = mysqli_query($con,"SELECT * FROM user1");
			$rows = mysqli_fetch_array($select);
			?>
			<div class="row">
				<h3>ABOUT</h3><br><br><br>
				<p>
					<div class="col-sm-12">
				<span class="font-weight-bold">At All With Technology (AWTECH) Company</span>, we are dedicated to shaping the future by empowering the next generation of innovators, 
					problem-solvers, and leaders. As a forward-thinking company, we recognize the importance of investing 
					in young talent and providing them with opportunities to gain hands-on experience in their chosen fields.
				</p>
				<p>
				Founded in 2020, <span class="font-weight-bold">All With Technology (AWTECH) Company</span> has quickly become a leader in company, specializing in Computer Training, 
				Industrial Attachment and Digital Offered Services. We work at the intersection of technology, 
				communication, engineering, etc.], driving innovation and delivering impactful solutions to our clients. 
				Our mission is to push the boundaries of what’s possible and help our clients succeed in an ever-evolving 
				global landscape.
				</p>
				<h4>Our Internship Program</h4><br><br>
				<p>
				As part of our commitment to nurturing talent, <span class="font-weight-bold">All With Technology (AWTECH) Company</span> offers internship programs across a variety of fields, 
				including Software Development, Computer System Architecture, Electronic and Telecommunication, and more. 
				Our internship program is designed to offer students and recent graduates the opportunity to work on real-world
				projects, collaborate with experts in the field, and develop skills that will set them up for success in their
			    careers.
				</p>
				<p>
				Our internships are more than just learning opportunities they are a pathway to professional growth. 
				We believe in providing our interns with:
				</p>
				<ul class="ml-5">
					<li><span class="font-weight-bold">Hands-on Experience:</span> Interns gain practical, on-the-job experience by working on meaningful projects 
						that contribute to our business success.</li>
					<li><span class="font-weight-bold">Mentorship:</span> Each intern is paired with a mentor who provides guidance, feedback, and career advice 
						throughout the program.</li>
					<li><span class="font-weight-bold">Training & Development:</span> Interns have access to a range of training opportunities, including workshops, 
						seminars, and industry insights that help them enhance their skills.</li>
					<li><span class="font-weight-bold">Networking Opportunities:</span> Interns are encouraged to engage with professionals within the company and
						 across industries, creating valuable connections for their future careers.</li>
				</ul>
				<h4>Our Values</h4><br><br>
				<p>
				<span class="font-weight-bold">At All With Technology (AWTECH) Company</span> our values are the foundation of everything we do. They drive our work culture, guide our decisions, 
				and shape our relationships with clients and employees alike. We believe in:
				</p>
				<ul class="ml-5">
					<li><span class="font-weight-bold">Innovation:</span> Continuously pushing boundaries and embracing new ideas to create solutions that matter.</li>
					<li><span class="font-weight-bold">Collaboration:</span> Building strong teams where diverse perspectives are valued and everyone works together toward a common goal.</li>
					<li><span class="font-weight-bold">Integrity:</span> Upholding the highest standards of honesty, transparency, and ethical behavior.</li>
					<li><span class="font-weight-bold">Excellence:</span> Committing to delivering exceptional results and continuously improving in everything we do.</li>
					<li><span class="font-weight-bold">Sustainability:</span> Creating long-term value not just for our clients, but also for society and the environment.</li>
				</ul>
				<h4>Why Intern with Us?</h4><br><br>
				<ol class="ml-5">
					<li><span class="font-weight-bold">Real-World Impact:</span> <span class="font-weight-bold">At All With Technology (AWTECH) Company</span> you won’t just be shadowing professionals; you’ll be contributing to actual projects that shape the future of our industry.</li>
					<li><span class="font-weight-bold">Supportive Environment:</span> We prioritize your growth by providing mentorship, training, and opportunities to interact with industry experts.</li>
					<li><span class="font-weight-bold">Culture of Innovation:</span> As a company that thrives on innovation, you will be working in an environment that encourages creativity, learning, and challenging the status quo.</li>
					<li><span class="font-weight-bold">Diverse Opportunities:</span> With internships available across multiple fields, you can explore various career paths and find the right fit for your passion and skills.</li>
					<li><span class="font-weight-bold">Global Exposure:</span> As a company with a global presence, our interns have the opportunity to work with teams from different countries, giving them valuable international experience.</li>
				</ol>
				<h4>Join Our Team</h4><br><br>
				<p>
				<span class="font-weight-bold">At All With Technology (AWTECH) Company</span> we are always looking for talented, motivated, and passionate individuals to join our team. 
				Our internships are designed to be a stepping stone for your career, providing you with the tools and 
				knowledge needed to excel in today’s competitive job market.
				</p>
				<p>
				Whether you are a student looking to gain practical experience or a recent graduate eager to start your career, 
				our internship program offers a unique opportunity to learn, grow, and contribute. 
				</p>
				<p>
				Ready to take the next step in your career journey? Apply now to become an intern <span class="font-weight-bold">At All With Technology (AWTECH) Company</span> and be part of a team that is shaping the future.
				</p>
				<p>
				Feel free to adjust any specifics like your company’s history, values, or program details to make this more aligned with your organization’s unique identity!
				</p>
				<button class="btn btn-warning mb-5 w-25">Join Us</button>
			</div>
		</div>
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
	<!-- <p class="text-center small text-light">Designed & Developed By <span class="text-warning">Mutiti Stivo</span></p> -->
	</div>
	</div>
</body>
</html>