<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
		}
	</style>
</head>
<body >
	<div class="color">
	<?php 
	
	include 'usernav.php';
	session_start();
	include'include/usernamedisplay.php';
	?>
 <div class="l-wishlist l-pd-top-4">
        <div class="l-container"  >
<table border="1" style="margin-bottom:30px;" >
	<tr>
		
		<th>Title</th>
		<th>Total Tickets Issued</th>
		<th>Venue</th>
		<th>Date and time</th>
		<th>price</th> 	
		<th>Organized by</th>
		<th colspan="2"> Status </th>
		
		
<?php
include'include/connection.php' ?>
<?php
	$query="select*from ticket_issue ORDER BY Ticket_no DESC"  ;

	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	echo "<tr>";
	$id=$arr['Ticket_no'];
	$status = $arr['status'];
	echo "<td>".$arr['Ticket_title']."</td>";
	echo "<td>".$arr['Total_tickets']."</td>";
	echo "<td>".$arr['venue']."</td>";
	echo "<td>".$arr['tdate']."</td>";
	echo "<td>".$arr['price']."</td>";
	echo "<td>".$arr['organizedby']."</td>";
	if ($status=="s") {
		echo "<td><a href='booktickets.php?id=$id'>  <button  style = \" color:red; \"  >  Booknow  <button>  </div>  </a></td>";

	}
	if ($status=="p") {
		echo "<td><a href='#'>  <button  style = \" color:red; \"  >  Available soon  <button>  </div>  </a></td>";

	}

	echo "</tr>";
}


	
?>
</tr>
</table>
<?php include'include/footer.php' ?>
</body>
</html>