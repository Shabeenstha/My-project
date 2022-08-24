<?php
session_start();
$id=$_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/LEO-2.png">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/brands.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/solid.css">
    <title>Leo</title>

<style type="text/css">
	.input-form{
		color:green;

	}
</style>

</head>
<body>
 <?php include 'usernav.php'?>
 <?php

include 'include/usernamedisplay.php'

 ?>
<?php
include 'include/connection.php';
$query = "select * from ticket_issue where Ticket_no='$id' ";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));

$q = "select * from bookings";


$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
$ars=mysqli_fetch_array($res,MYSQLI_ASSOC);
$t = $ars['Ticket_no'];
$q1 = "select sum(b.qty), b.Ticket_no ,a.Ticket_no from bookings b INNER JOIN ticket_issue a ON b.Ticket_no = a.Ticket_no  where b.Ticket_no='$id'  ";
$res1=mysqli_query($conn,$q1) or die(mysqli_error($conn));
$ars1=mysqli_fetch_array($res1,MYSQLI_ASSOC);

	$arr=mysqli_fetch_array($result,MYSQLI_ASSOC);
$date=$arr['tdate'];



?>
<?php
//SET THE TIME ZONE
date_default_timezone_set('Asia/Kathmandu');
 
//CREATE TIMESTAMP VARIABLES
$current_ts  = date("Y-m-d");
$deadline_ts =  $date;

// echo $current_ts;
// echo $deadline_ts;
// exit();
//IF THE DEADLINE HAS PASSED, LET USER KNOW...ELSE, DISPLAY THE REGISTRATION FORM
if($current_ts < $deadline_ts) {
    include 'bookingform.php';
} else {
	
echo"<script> alert('tickets expired'); window.history.back()   </script>  ";

        
            
    
    
}
?>



</body>
</html>