<?php
session_start();
if($emai = $_SESSION['email']=session_destroy()){
    header("location:login.php");
}
else{
    header("location:application.php");
}
?>