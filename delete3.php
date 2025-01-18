<?php
include "connection.php";
$link = $_GET['link'];
$delete = mysqli_query($con,"DELETE FROM user_detail WHERE userd_id='$link'");
header("location:select_details.php");
?>