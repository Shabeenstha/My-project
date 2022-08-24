<?php
session_start();
if(!isset($_SESSION['Username'])){
	header('location:login.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body    style="background-image= url (assets/img/'leo-bg.jpg')"     >
	<?php 
	include 'navadmin.php';
include 'include/usernamedisplay.php';
	 ?>
<div style="min-height: 100vh;"   >
<?php include 'sidebaradmin.php';?>

</div>
<?php include'include/footer.php' ?>

</body>
</html>