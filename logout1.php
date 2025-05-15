<?php
session_start();
if($username = $_SESSION['username']=session_destroy()){
    header("location:user_admin.php");
}
else{
    header("location:select_details.php");
}
?>