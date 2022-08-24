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
<body  >
	<div style="min-height:90vh;"  >
	<?php 
	include 'usernav.php';
include 'include/usernamedisplay.php';
include 'useranimation.php';
	 ?>
	</div>
<?php include'include/footer.php' ?>
</body>
</html>
</body>
