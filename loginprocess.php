<?php
include 'include/connection.php';
$uname = $_POST['Username'];
$password = $_POST['Password'];
$role = $_POST['Role'];
session_start();

$query="select * from userinfo where Username='$uname' and Password='$password' and Role ='$role'    ";

	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	$arr=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(isset($arr)){
		$_SESSION['Username'] = $uname;
  $_SESSION['password'] = $password;
  $_SESSION['Role'] =$role ;


if($_SESSION['Role'] == 'Admin'){
   header("Location: Admin.php");
   }
else if($_SESSION['Role'] == 'ORG'){
   header("Location:organizer.php");
   }
else if($_SESSION['Role'] == 'User'){

   header("Location:userportal.php");
   
   }
 }
else{
   echo "Error/ wrong information supplied";
   }

?>