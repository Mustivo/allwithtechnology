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
	<title>All | With | Technology</title>
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
}.for{
	padding: 48px;
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
.hide{
	width:100%;
}
.for{
	padding: 10px;
}
.dropdown1-content a{
	font-weight: normal;
}

.show1 {display: block;}
}
  </style>
</head>
<body>
	<div class="link jumbotron-fluid fixed-top font-weight-bold">
		<div class="two col-sm-12 container d-flex">
		<div class="one col-sm-5 pt-3">
					<img src="img/IMG-20240316-WA0057.jpg" style="width: 70px;" alt="">
					<span><a href="#" class="text-light">AWTECH<span class="text-warning">.</span> </a></span>
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
		
	<div class="at">
		<div class="container pt-5 mt-5">
			
            <div class="d-flex justify-content-center">
                <div class="col-sm-10 border border-2 rounded p-4" style="background: rgba(226, 226, 226, 0.82);">
                    <p>
                        <span class="font-weight-bold">At, All With Technology (AWTECH) Company</span>
						 we are excited to offer dynamic internship opportunities to passionate students 
						and recent graduates in the fields of Software Development, Computer System Architecture, 
						and Electronic and Telecommunication. This is a unique chance to gain hands-on experience in 
						cutting-edge technologies and work alongside industry professionals who are shaping the future.
                    </p>
					<h5>Internship Program Overview</h5>
					<h6>Internship Duration</h6>
					<p>
						-The internship program lasts 1 month, depending on the department and the intern's academic 
						requirements. Interns are expected to work Part-time in the Morning either Afternoon It depend on 
						shift during the internship period.
					</p>
					<h6>Required Documents for Application:</h6>
					<p>
					To apply for our internship program, candidates must behave the following documents for attending internship:
					</p>
					<ol type='1'>
						<li><span class="font-weight-bold">Cover Letter:</span> Explaining why you’re interested in the internship and how it aligns with your career goals.</li>
						<li><span class="font-weight-bold">Log Book :</span> the student must behave the following logbook :
							<ul>
								<li>Company supervisor logbook</li>
								<li>Student logbook</li>
							</ul>
						</li>
					</ol>
					<h6>Internship Fields and Relevant Courses:</h6>
						<ol type='1'>
							<li><span class="font-weight-bold">Software Development</span>
								<ul>
									<li>Mobile application With Java.</li>
									<li>Website Deployment (Web Hosting)</li>
									<li>Website Application with Python</li>
									<li>Web Application with ReactJS</li>
									<li>Programming with NodeJS</li>
									<li>Database Development with MongoDB</li>
									<li>Flatter </li>
								</ul>
							</li>
							<p>Interns will assist in developing software applications, writing and testing code, debugging, and collaborating on feature development. You’ll gain exposure to the entire software development lifecycle.</p>
							<li><span class="font-weight-bold">Computer System and Architecture</span>
								<ul>
									<li>Computer Hardware Architecture Design with CAD and Solid Work software</li>
									<li>System Automation</li>
									<li>Hobby Kernel Development using C Program</li>
									<li>Develop Computer Power System</li>
									<li>Electronics Enclosure</li>
									<li>Embedded systems Hardware development </li>
									<li>Firmware Development </li>
									<li>Computer Refurbishment </li>
									<li>LED and LCD screen setup   </li>
								</ul>
							</li>
							<p>Interns will work on system-level projects, such as designing computer systems, analyzing performance, and optimizing hardware and software integration. This field will involve hands-on experience with computer architecture design and troubleshooting.</p>
							<li><span class="font-weight-bold">Electronics and Telecommunication</span>
								<ul>
									<li>Artificial intelligence integration into Electronic Devices</li>
									<li>Electronic Devices Enclosure Production </li>
									<li>Electronic control system for industry automation</li>
									<li>Radio and TV broadcasting system installation (Practice at RBA Muhanga)</li>
									<li>Mobile Communication system installation ( Expert from MTN RWANDA)</li>
									<li>Embedded system development </li>
									<li>Hardware maintenance </li>
									<li>Telecommunication transmission system</li>
									<li>Electronic Security System installation.</li>
								</ul>
							</li>
							<p>Interns will assist in the development, testing, and maintenance of telecommunication systems. This includes working on network infrastructure, wireless communication systems, signal processing, and troubleshooting.</p>
							</ol>
							<h6>Start Date:  </h6>
							<p>  
								- The internship program will start on <span class="font-weight-bold">24/03/2025</span> for L 5 students and <span class="font-weight-bold">09/04/2025</span> for L4 students   
							</p>
							<h6>Application Deadlines</h6>
							<p>All applications must be submit application on <span class="font-weight-bold">23/03/2025</span> for L5 and <span class="font-weight-bold">08/04/2025</span> for L4. Late applications may not be considered unless you have a valid reason.</p>
							<h6>Total Fees for the Internship</h6>
							<p>For all Field student must pay <span class="font-weight-bold">35,000 frw per Month </span> for the internship program</p>
							<h6>Why Intern at All With Technology (AWTECH)?</h6>
							<ol>
								<li><span class="font-weight-bold">Real-World Experience:</span> Gain hands-on experience in cutting-edge projects and technologies in a collaborative and supportive environment.</li>
								<li><span class="font-weight-bold">Professional Development:</span> Participate in training sessions, workshops, and networking events that will enhance your skills and career prospects.</li>
								<li><span class="font-weight-bold">Mentorship:</span> Each intern is assigned a mentor who will guide them through the program, offering career advice and technical support.</li>
								<li><span class="font-weight-bold">Post-Internship Opportunities:</span> High-performing interns may be considered for full-time roles after graduation.</li>
							</ol>
							<p>We look forward to seeing your application and welcoming you to All With Technology (AWTECH), where your growth and future in technology begins.</p>
                    <button class="btn btn-rounded btn-warning mr-5"><a href="addimision.php" class="nav-link">Back</a></button>
                    <button class="btn btn-rounded btn-warning"><a href="applicationform.php" class="nav-link">Next</a></button>
                </div>

            </div>
			
		</div>
		