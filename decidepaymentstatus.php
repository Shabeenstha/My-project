<?php
include 'include/connection.php';

$query = " select * from paymentdetail";
$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
$arrs=mysqli_fetch_array($result,MYSQLI_ASSOC);

$status = $arrs['status'];
?>