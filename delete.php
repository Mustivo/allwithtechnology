<?php
include "connection.php";
$link = $_GET['link'];
$delete = mysqli_query($con,"DELETE FROM announce_user WHERE announceid='$link'");
header("location:anounce_in.php");
?>