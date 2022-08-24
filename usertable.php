<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
 <div style="min-height:60vh;"  >


<table border="1">
	<tr>
		<th>Username</th>
		<th>FullName</th>
		<th>Email</th>
		<th>Contact</th>
		
		
		<th   >Action</th>
<?php
include'include/connection.php' ?>
<?php
	$query="select*from userinfo where Role ='User'";

	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	echo "<tr>";
	$id=$arr['u_id'];
	echo "<td>".$arr['Username']."</td>";
	echo "<td>".$arr['FullName']."</td>";
	echo "<td>".$arr['Email']."</td>";
	echo "<td>".$arr['Contact']."</td>";
	
	echo "<td><a href='delete.php?id=$id' onclick='return confirm(\"Remove Organizer account permanently?\");'>  <div  style=\"color:red;\" >  Remove </div>  </a></td>";

	
	echo "</tr>";
}


	

?>

</tr>
</table>
</div>
<br>

</body>
</html>