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
		
		<!-- <div class="pl-5 col-sm-12 pt-5">
			<h3 class="text-center text-light" style="font-family: 'pristina'; font-size: 50PX; padding-top: 150px;">Apply Now</h3>
		<p class="text-center text-light">We make many application to learn....</p>
		</div> -->
	<div class="at" style="background-color: rgba(255, 255, 255, 0.973);">
		<div class="container pt-5 mt-5">
			
            <div class="d-flex justify-content-center">
				<?php
				// require "connection.php";
				// $user = $_GET['user'];
				// $select = mysqli_query($con,"SELECT * FROM user1 WHERE userid='$user'");
				// mysqli_fetch_array($select);
				?>
                <form action="" method="POST" enctype="multipart/form-data" class="for mb-5 border rounded col-sm-9" style="background: rgba(226, 226, 226, 0.82);">
				<div class="hide">
                    <h5 class="text-center font-weight-bold pb-3">Submittion Form </h5>
                    <label for="">FirstName <span class="text-danger">*</span></label>
                    <input type="text" name="firstname" placeholder="Enter Your Firstname" class="form-control mb-4" required>
                    <label for="">LastName <span class="text-danger">*</span></label>
                    <input type="text" name="lastname" placeholder="Enter Your Lastname" class="form-control mb-4" required>
                    <label for="">PhoneNumber <span class="text-danger">*</span></label>
                    <input type="text" name="telephone" placeholder="Enter You Phonenumber" class="form-control mb-4" required>
                    <label for="">Email Address <span class="text-danger">*</span></label>
                    <input type="email" name="email" placeholder="examply@gmail.com" class="form-control" required>
					<span class="small text-success mb-4">Mak sure that your email is active</span><br>
                    <label for="">School Name <span class="text-danger">*</span></label>
                    <input type="text" name="school" placeholder="Enter Your School Name" class="form-control mb-4" required> 
                    <label for="">Trade <span class="text-danger">*</span></label>
                    <select name="trade" class="form-control mb-4" required>
						<option value="">-Select Your Trade-</option>
						<option value="Software Development">Software Development</option>
						<option value="Computer System Architecture">Computer System Architecture</option>
						<option value="Electronic And Telecommunication">Electronic And Telecommunication</option>
					</select>
                    <label for="">Level RTQF <span class="text-danger">*</span></label>
                    <select name="level" class="form-control mb-4" required>
						<option value="">-Select Your Level-</option>
						<option value="L4">L4</option>
						<option value="L5">L5</option>
					</select>
					<label for="">Application Letter Document</label>
                    <input type="file" name="image" class="form-control">
					<span class="small text-success">If you have application letter you can attach, if not Submit Your application</span>
                    <input type="text" name="apply" value="Applyed" class="form-control mb-4" hidden>
					<p class="small text-success mt-4"><span class="text-dark">NOTE: </span>
					- Make sure that your application letter is formed well <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <span class="text-danger">*</span> signs means that all field is required
				</p>
                    <button type="submit" name="send" class="btn btn-warning">Submit</button>
					</div>
					<?php
				require "connection.php";
				if(isset($_POST['send'])){
					$fname = $_POST['firstname'];
					$lname = $_POST['lastname'];
					$phone = $_POST['telephone'];
					$email = $_POST['email'];
					$school = $_POST['school'];
					$trade = $_POST['trade'];
					$level = $_POST['level'];
					$_FILES['image'];
                    @copy ($_FILES["image"] ["tmp_name"],"img/".$_FILES["image"]["name"]);
                    $file = $_FILES["image"]["name"];
					$apply = $_POST['apply'];
					$select=mysqli_query($con,"SELECT * FROM user_detail WHERE email='$email'");
					if(mysqli_num_rows($select)>0){
						echo "<h4 class='pb-5 text-center text-warning small'>You Have Already  Submit Your Application Letter Form</h4>";
					}else{
					$insert=mysqli_query($con,"INSERT INTO user_detail VALUES('','$fname','$lname','$phone','$email','$school','$trade','$level','$file',NOW(),'$apply')");
					if($insert){
						echo"<style>
						.hide{
							display:none;
						}
						</style>";
						echo "<h6 class='text-center pb-3'>Thank You For your submission!! you will receive an email confirming that your application has been successfully accepted in 3 Days.</h6>";
						echo"<button  style='margin-left:240px;' class='btn btn-warning w-25'><a href='home.php' class='p-3 text-dark' style='text-decoration:none;'>Okay</a></button>";
					}else{
						echo "error";
					}
				}
				}
				?>
                </form>

            </div>
			
		</div>
		