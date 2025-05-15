<?php
include "connection.php";
$link = $_GET['link'];
$delete = mysqli_query($con,"DELETE FROM rejected_user WHERE reject_id='$link'");
header("location:rejected.php");
?>