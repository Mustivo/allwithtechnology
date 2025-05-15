<?php
// 	session_start();
// 	if (!isset($_SESSION["email"])){
// 		header("location:index.php");
	
// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/IMG-20240316-WA0057.jpg" rel="icon">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>AWTECH | Contact Us</title>
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
        input:hover{
            border-color: rgb(255, 196, 0);
        }textarea:hover{
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
}.footer a{
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
	<div class="as4"></div>
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
			<h3 class="text-center text-light" style="font-size: 50px; padding-top: 150px;">Contact Us</h3>
		<p class="text-center text-light">We can get in to talk....</p>
		</div>
	<div class="at2" style="background-color: rgba(255, 255, 255, 0.973);">
		<div class="container pt-5">
			<h1 class="text-center font-italic font-weight-bold pb-5">Get In Touch</h1>
			<div class="col-sm-12 mb-5">
			<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3987.166568857828!2d29.756829999999997!3d-2.0890629999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMsKwMDUnMjAuNiJTIDI5wrA0NScyNC42IkU!5e0!3m2!1sen!2srw!4v1738180616272!5m2!1sen!2srw" class="col-sm-12" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="d-flex justify-content-between">
				<div class="row col-sm-12">
				<div class="col-sm-4">
					<i class="bi bi-geo-alt" style="color: black;background-color: rgb(255, 196, 0);border-radius: 5px;padding: 10px 15px;"></i>
                    <p class="font-weight-bold mt-2">Location:<br>
                    <span class="text-dark small">Rwanda,Muhanga,Nyamabuye</span></p>
					<i class="bi bi-envelope" style="color: black;background-color: rgb(255, 196, 0);border-radius: 5px;padding: 10px 15px;"></i>
                    <p class="font-weight-bold mt-2">Email:<br>
                        <span class="text-dark small">allwithtechno@gmail.com</span></p>
						<i class="bi bi-phone" style="color: black;background-color: rgb(255, 196, 0);border-radius: 5px;padding: 10px 15px;"></i>
                        <p class="font-weight-bold mt-2">Call:<br>
                            <span class="text-dark small">+250 783 402 769</span></p>
                </div>
                <div class="col-sm-8">
                    <form action="" method="POST">
                        <div class="row">
                        <div class="col-sm-6">
                        <input type="text" name="name" class="form-control py-2 mb-4" placeholder="Your Name"> 
                    </div>
                    <div class="col-sm-6 mb-4">
                        <input type="text" name="email" class="form-control py-2" placeholder="Your Email">
                        </div>
                        </div>
                        <input type="text" name="subject" class="form-control mb-4 py-2" placeholder="Subject">
                        <textarea name="message" id="" rows="5" class="form-control" placeholder="Message"></textarea>
                        <button type="submit" name="save" class="btn btn-warning my-4">Send Message</button>
                    </form>
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
	<!-- <p class="text-center small text-light">Designed & Developed By <span class="text-warning">Mutiti Stivo</span></p> -->
	</div>
	</div>
</body>
</html>