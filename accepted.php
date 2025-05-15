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
	<title>AWTECH | User_Detail</title>
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
  width:100%;
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
				<div class="two col-sm-12 container d-flex pb-3">
					<div class="one col-sm-2 pt-3">
						<a href="#" class="text-light">AWTECH<span class="text-warning">.</span> </a>
					</div>
					<div class="col-sm-8 link1 d-flex pt-3 justify-content-center">
					<div class="dropdown1">
					<button onclick="myFunction1()" class="dropbtn1 btn btn-outline-warning">&#9776;</button>
					<div id="myDropdown1" class="dropdown1-content">
					<i class="bx bx-user text-warning i" style="font-size: 30px;"></i>
					<span class="woo font-weight-bold"><?php echo $_SESSION["username"]?></span>
                    <!-- <a href="#home" class="woo nav nav-link">Account Setting</a> -->
				<a href="select_details.php" class="nav nav-link">User_Detail Information</a>
				<a href="accepted.php" class="nav nav-link">Accepted User</a>
                <a href="rejected.php" class="nav nav-link">Rejected User</a>
				<a href="anounce_in.php" class="nav nav-link">Announcement</a>
                <a href="logout1.php" class="woo nav nav-link">Logout</a>
				</div>
					</div>
				</div>
				<div class="col-sm-3 pt-3">
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn" style="border:none;background:none;"><span class="wo text-light font-weight-bold"><?php echo $_SESSION["username"]?></span><i class="bx bx-user text-warning ii" style="font-size: 30px;"></i></button>
					<div id="myDropdown" class="dropdown-content">
						<!-- <a href="#home">Account Setting</a> -->
    					<a href="logout1.php">Logout</a>
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
			<h1 class="text-center font-italic font-weight-bold pb-3 small">Accepted_User Information</h1>
            <table class="table table-bordered table-hover table-responsive">
                <tr>
                    <th class="text-warning">No</th>
                    <th class="text-warning">Firstname</th>
                    <th class="text-warning">Lastname</th>
                    <th class="text-warning">Email</th>
                    <th class="text-warning">Phone Number</th>
                    <th class="text-warning">School Name</th>
                    <th class="text-warning">Trade</th>
                    <th class="text-warning">Level</th>
                    <th class="text-warning">Date_Time</th>
                    <th class="text-warning">Condition</th>
                    <th class="text-warning" colspan="100%">Decision</th>
                </tr>
                <?php
                include "connection.php";
                $x=1;
                $select = mysqli_query($con,"SELECT * FROM accepted_user");
                while($rows=mysqli_fetch_array($select)){
                    ?>
                    <tr>
                        <td><?php echo $x?></td>
                        <td><?php echo $rows['firstname']?></td>
                        <td><?php echo $rows['lastname']?></td>
                        <td><?php echo $rows['telephone']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['school_name']?></td>
                        <td><?php echo $rows['trade']?></td>
                        <td><?php echo $rows['level']?></td>
                        <td><?php echo $rows['date_time']?></td>
                        <td><?php echo $rows['Task']?></td>
                        <td><a href="delete1.php?link=<?php echo $rows['accept_id']?>" class="text-warning small">Delete</a></td>
                    </tr>
                    <?php
                    $x++;

                }
                ?>
            </table>
		</div>
	</div>
</body>
</html>