<?php

$id=$_GET['id'];

include 'include/connection.php';

$query = "update ticket_issue set status='s'where Ticket_no = '$id'";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
header('location:ticketlist.php');
?>