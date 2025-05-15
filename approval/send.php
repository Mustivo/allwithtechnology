<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpm/src/Exception.php';
require 'phpm/src/PHPMailer.php';
require 'phpm/src/SMTP.php';
require '../connection.php';

if (isset($_POST['send'])) {

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'allwithtechno@gmail.com';
    $mail->Password = 'm l b k q s s n n y t y j q q m';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('allwithtechno@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();
	if(isset($_POST['send'])){
        $link = $_POST['user'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['telephone'];
		$school = $_POST['school'];
    	$trade = $_POST['trade'];
		$level = $_POST['level'];
		$task = $_POST['task'];
		$insert = mysqli_query($con,"INSERT INTO accepted_user VALUES('','$fname','$lname','$phone','$email','$school','$trade','$level',NOW(),'$task')");
		if($insert){
            mysqli_query($con,"DELETE FROM user_detail WHERE userd_id='$link'");
        }else{
            echo "Undifined query";
        }
	
	}

    echo
    "
    <script>
    alert('Sent successfully');
    document.location.href = '../select_details.php';
    </script>
    ";

}

?>