<?php

$id=$_GET['id'];
include 'include/connection.php';
$query="delete from bookings where b_id=$id";

	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	header('location:MyBooking.php');

	?>