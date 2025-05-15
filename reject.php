<?php
	session_start();
	if (!isset($_SESSION["username"])){
		header("location:user_admin.php");
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="img/IMG-20240316-WA0057.jpg" rel="icon">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>AWTECH | Approvement </title>
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

  </style>
</head>
<body>
		<div class="link jumbotron-fluid fixed-top font-weight-bold">
				<div class="two col-sm-12 container d-flex pb-3 justify-content-between">
					<div class="one col-sm-2 pt-3">
						<a href="#" class="text-light">AWTECH<span class="text-warning">.</span> </a>
					</div>
				<div class="col-sm-3 pt-3">
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn" style="border:none;background:none;"><span class="wo text-light font-weight-bold"><?php echo $_SESSION["username"]?></span><i class="bx bx-user text-warning ii" style="font-size: 30px;"></i></button>
					<div id="myDropdown" class="dropdown-content">
						<!-- <a href="#home">Account Setting</a> -->
    					<a href="logout.php">Logout</a>
					</div>
					</div>
					<!-- <span class="menu"  style="font-size:30px;cursor:pointer;" title="Menu" onclick="mytest()"></span> -->
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
	<div class="mt-5" style="background-color: rgba(255, 255, 255, 0.973);">
		<div class="container col-sm-12 pt-5">
            <div class="d-flex justify-content-center">
            <?php
    require "connection.php";
    $link = $_GET['link'];
    $select = mysqli_query($con,"SELECT * FROM user_detail WHERE userd_id='$link'");
    $rows=mysqli_fetch_array($select);
    ?>
                <form action="./approval/send1.php" method="POST"  class="col-sm-7 mb-4 border px-3 pb-3">
                <!-- <form action="" method="POST"  class="col-sm-7 mb-5 border p-3"> -->
					<a href="select_details.php" class="fs-3 link-dark nav-link text-warning" style="padding: 10px 10px;">&#8592;</a>
                <h1 class="text-center font-italic font-weight-bold pb-2 small">Text Anyone to Accept IAP Program</h1>
                    <input type="email" value="<?php echo $rows['email']?>" name="email" readonly class="form-control mb-4">
                    <input type="text" value="From AWTECH Company" name="subject" class="form-control mb-4" readonly>
                    <input type="text" value="Accepted!" name="accept" class="form-control mb-4" style="display:none;">
                    <input name="message" placeholder="text the approvement message" value="Hello <?php echo $rows['firstname']?>&nbsp;<?php echo $rows['lastname']?>, you have been rejected to work in AWTECH Company because your information does not match, you can try to apply with matched information to be accepted." class="form-control border-warning" required>
					<input type="text" name="fname" value="<?php echo $rows['firstname']?>" hidden>
                    <input type="text" name="lname" value="<?php echo $rows['lastname']?>" hidden>
                    <input type="email" name="email" value="<?php echo $rows['email']?>" hidden>
                    <input type="text" name="telephone" value="<?php echo $rows['telephone']?>" hidden>
                    <input type="text" name="school" value="<?php echo $rows['school_name']?>" hidden>
                    <input type="text" name="trade" value="<?php echo $rows['trade']?>" hidden>
                    <input type="text" name="level" value="<?php echo $rows['level']?>" hidden>
					<input type="text" name="user" value="<?php echo $rows['userd_id']?>" hidden>
                    <input type="text" name="task" value="Rejected" hidden>
                    <button type="submit" name="send" class="btn btn-warning mt-3 w-100">Reject</button>
                </form>
				<?php
				// require "connection.php";
				// if(isset($_POST['send'])){
				// 	$fname = $_POST['fname'];
				// 	$lname = $_POST['lname'];
				// 	$email = $_POST['email'];
				// 	$phone = $_POST['telephone'];
				// 	$school = $_POST['school'];
				// 	$trade = $_POST['trade'];
				// 	$level = $_POST['level'];
				// 	$task = $_POST['task'];

				// 	$insert=mysqli_query($con,"INSERT INTO rejected_user VALUES('','$fname','$lname','$phone','$email','$school','$trade','$level',NOW(),'$task')");
                //     if($insert){
                //         mysqli_query($con,"DELETE FROM user_detail WHERE userd_id='$link'");
                //     }else{
                //         echo "Undifined query";
                //     }
				
				// }
				
				?>

            </div>
		</div>
	</div>
</body>
</html><?php
	session_start();
	if (!isset($_SESSION["username"])){
		header("location:user_admin.php");
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="img/IMG-20240316-WA0057.jpg" rel="icon">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>AWTECH | Approvement </title>
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

  </style>
</head>
<body>
		<div class="link jumbotron-fluid fixed-top font-weight-bold">
				<div class="two col-sm-12 container d-flex pb-3 justify-content-between">
					<div class="one col-sm-2 pt-3">
						<a href="#" class="text-light">AWTECH<span class="text-warning">.</span> </a>
					</div>
				<div class="col-sm-3 pt-3">
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn" style="border:none;background:none;"><span class="wo text-light font-weight-bold"><?php echo $_SESSION["username"]?></span><i class="bx bx-user text-warning ii" style="font-size: 30px;"></i></button>
					<div id="myDropdown" class="dropdown-content">
						<!-- <a href="#home">Account Setting</a> -->
    					<a href="logout.php">Logout</a>
					</div>
					</div>
					<!-- <span class="menu"  style="font-size:30px;cursor:pointer;" title="Menu" onclick="mytest()"></span> -->
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
	<div class="mt-5" style="background-color: rgba(255, 255, 255, 0.973);">
		<div class="container col-sm-12 pt-5">
            <div class="d-flex justify-content-center">
            <?php
    require "connection.php";
    $link = $_GET['link'];
    $select = mysqli_query($con,"SELECT * FROM user_detail WHERE userd_id='$link'");
    $rows=mysqli_fetch_array($select);
    ?>
                <form action="./approval/send1.php" method="POST"  class="col-sm-7 mb-4 border px-3 pb-3">
                <!-- <form action="" method="POST"  class="col-sm-7 mb-5 border p-3"> -->
					<a href="select_details.php" class="fs-3 link-dark nav-link text-warning" style="padding: 10px 10px;">&#8592;</a>
                <h1 class="text-center font-italic font-weight-bold pb-2 small">Text Anyone to Accept IAP Program</h1>
                    <input type="email" value="<?php echo $rows['email']?>" name="email" readonly class="form-control mb-4">
                    <input type="text" value="From AWTECH Company" name="subject" class="form-control mb-4" readonly>
                    <input type="text" value="Accepted!" name="accept" class="form-control mb-4" style="display:none;">
                    <input name="message" placeholder="text the approvement message" value="Hello <?php echo $rows['firstname']?>&nbsp;<?php echo $rows['lastname']?>, you have been rejected to work in AWTECH Company because your information does not match, you can try to apply with matched information to be accepted." class="form-control border-warning" required>
					<input type="text" name="fname" value="<?php echo $rows['firstname']?>" hidden>
                    <input type="text" name="lname" value="<?php echo $rows['lastname']?>" hidden>
                    <input type="email" name="email" value="<?php echo $rows['email']?>" hidden>
                    <input type="text" name="telephone" value="<?php echo $rows['telephone']?>" hidden>
                    <input type="text" name="school" value="<?php echo $rows['school_name']?>" hidden>
                    <input type="text" name="trade" value="<?php echo $rows['trade']?>" hidden>
                    <input type="text" name="level" value="<?php echo $rows['level']?>" hidden>
					<input type="text" name="user" value="<?php echo $rows['userd_id']?>" hidden>
                    <input type="text" name="task" value="Rejected" hidden>
                    <button type="submit" name="send" class="btn btn-warning mt-3 w-100">Reject</button>
                </form>
				<?php
				// require "connection.php";
				// if(isset($_POST['send'])){
				// 	$fname = $_POST['fname'];
				// 	$lname = $_POST['lname'];
				// 	$email = $_POST['email'];
				// 	$phone = $_POST['telephone'];
				// 	$school = $_POST['school'];
				// 	$trade = $_POST['trade'];
				// 	$level = $_POST['level'];
				// 	$task = $_POST['task'];

				// 	$insert=mysqli_query($con,"INSERT INTO rejected_user VALUES('','$fname','$lname','$phone','$email','$school','$trade','$level',NOW(),'$task')");
                //     if($insert){
                //         mysqli_query($con,"DELETE FROM user_detail WHERE userd_id='$link'");
                //     }else{
                //         echo "Undifined query";
                //     }
				
				// }
				
				?>

            </div>
		</div>
	</div>
</body>
</html>