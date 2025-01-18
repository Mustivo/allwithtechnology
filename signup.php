<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="img/IMG-20240316-WA0057.jpg" rel="icon">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>All | With | Technology</title>
    <style>
        .form{
            margin-top: 130px;
        }
    input:hover{
        border-color: rgb(255, 196, 0);
    }textarea:hover{
        border-color: rgb(255, 196, 0);
    }
    .for{
	padding: 48px;
    }
    @media screen and (max-width:786px){
		.for{
	padding: 10px;
    margin-bottom:40px;
    }
}
    </style>
</head>
<body>
		<div class="link jumbotron-fluid fixed-top font-weight-bold">
                <div class="link1 col-sm-12 d-flex pt-3 justify-content-around">
						<a href="#" class="nav nav-link text-center text-light" style="font-size: 30px;">AWTECH<span class="text-warning">.</span> </a>
					<a href="Index.php" class="nav nav-link pt-4 active">Home</a>
				</div>
		</div>
		
	<div class="form" style="background-color: rgba(255, 255, 255, 0.973);">
		<div class="col-sm-12 d-flex justify-content-center">
            <form action="" method="POST" class="for border col-sm-6" style="background: rgba(255, 251, 251, 0.975);">
                <h4 class="pb-5 font-weight-bold text-center">Create An Account Here <span class="text-warning font-weight-bold">*</span></h4>
                <label for="">Name <span class="text-warning">*</span></label>
                <input type="text" name="name" placeholder="Write your Full name" class="form-control"><br>
                <label for="">Email Address <span class="text-warning">*</span></label>
                <input type="email" name="email" placeholder="Email Address" class="form-control"><br>
                <label for="">Password <span class="text-warning">*</span></label>
                <input type="password" maxlength="8" name="password" placeholder="Password" class="form-control"><br>
                <label for="">Re-type Your Password <span class="text-warning">*</span></label>
                <input type="password" maxlength="8" name="cpassword" placeholder="Confrim Your Password" class="form-control"><br>
                <button type="submit" name="save" class="btn btn-warning mt-4">Create</button>
                <p class="text-center">
                    I have an account?<a href="login.php" class="text-warning">Login</a>
                </p>
                <?php
                require "connection.php";
                if(isset($_POST['save'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $cpassword = $_POST['cpassword'];
                    if(empty($name)){
                        echo "<p class='text-center text-danger small'>Empty field</p>";
                    }elseif(empty($email)){
                        echo "<p class='text-center text-danger small'>Empty field</p>";
                    }elseif(empty($password)){
                        echo "<p class='text-center text-danger small'>Empty field</p>";
                    }elseif(empty($cpassword)){
                        echo "<p class='text-center text-danger small'>Empty field</p>";
                    }else{
                        if($password != $cpassword){
                            echo"<p class='text-center text-danger small'>Password does not match</p>";
                        }else{
                            $select = mysqli_query($con,"SELECT * FROM user1 WHERE email='$email'");
                            if(mysqli_num_rows($select)>0){
                                echo "<p class='text-center text-danger small'>The email have been taken</p>";
                            }else{
                                $insert = mysqli_query($con,"INSERT INTO user1 VALUES('','$name','$email','$password','$cpassword')");
                                header("location:login.php");
                                
                            }
                        }
                       
                    }
                }
                ?>
            </form>
		</div>
	
</body>
</html>