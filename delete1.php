<?php
include "connection.php";
$link = $_GET['link'];
$delete = mysqli_query($con,"DELETE FROM accepted_user WHERE accept_id='$link'");
header("location:accepted.php");
?>