<?php

$id=$_GET['id'];
include 'include/connection.php';
$query="delete from ticket_issue where Ticket_no=$id";

	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	header('location:ticketlist.php');

	?>