<?php
session_start();
if(!isset($_SESSION['Username'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body   >
	<div style=" min-height: 100vh;">
	<?php include 'navorganizer.php';
	include 'include/usernamedisplay.php';

	?>
	<div style="margin-top: 35px">
	<?php include 'organizeranimation.php';?>
</div>

 </div>
 <?php include 'include/footer.php';?>
</body>

</html>


 </div>
</div>