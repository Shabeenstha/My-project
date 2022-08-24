<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		.approve{
			color:green;
			
		}
		.reject{
			color:red;
		}
	</style>
</head>
<body>
 

<table border="1">
	<tr>
		<th> Ticket_no </th>
		<th>Title</th>
		<th>Total Tickets Issued</th>
		<th>Venue</th>
		<th>Date and time</th>
		<th>price</th> 	
		<th>Organized by</th>
		<th>Uploader</th>
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
	echo "<td>".$arr['Ticket_no']."</td>";
	echo "<td>".$arr['Ticket_title']."</td>";
	echo "<td>".$arr['Total_tickets']."</td>";
	echo "<td>".$arr['venue']."</td>";
	echo "<td>".$arr['tdate'].', '.$arr['ttime']."</td>";
	echo "<td>".$arr['price']."</td>";
	echo "<td>".$arr['organizedby']."</td>";
	echo "<td>".$arr['uploader']."</td>";
	if ($status=="p") {
		echo "<td><a href='Approveticket.php?id=$id'    onclick='return confirm(\"Approve Ticket Issue request?\");'>  <div class=\"approve\"  >Approve </div>  </a></td>";
echo "<td><a href='deleteticketreq.php?id=$id' onclick='return confirm(\"Ticket will be permanently deleted\");'> <div class=\"reject\"  >  Reject</div></a></td>";
	
	} else {
	echo "<td>  <div class=\"approve\"  >Approved </div>  </a></td>";
echo "<td><a href='deleteticketreq.php?id=$id' onclick='return confirm(\"Remove Ticket? Other Informations may also be lost!!\");'> <div class=\"reject\"  >  Remove</div></a></td>";
	}
	

	echo "</tr>";
}


	

?>
</table>
<br>

</body>
</html>