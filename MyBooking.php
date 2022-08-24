<?php
session_start();
include 'usernav.php';
include 'include/usernamedisplay.php';


include'include/connection.php' ?>
		
<div class="l-wishlist l-pd-top-4">
        <div class="l-container" style="margin-bottom:30px;min-height:50vh;   "  >
<table border="1"  >
	<tr>
		
		<th> Ticket no</th>
		<th>TIcket Title</th>
		<th>Venue</th>
		<th>Date and time</th>
		<th>price</th> 	
		<th>Qty</th> 	
		<th>Total Cost</th>
		<th>Organized by</th>
		<th> Payement Status</th>
		<th> Cancellation </th>
		

<?php
$user = $_SESSION['Username'];
	$query="select t.Ticket_no,t.Ticket_title,t.venue,t.tdate,t.ttime,t.price,t.organizedby,b.qty,b.Username,b.cost,b.status ,b.b_id from  ticket_issue t INNER JOIN bookings b  ON t.Ticket_no=b.Ticket_no where Username= '$user' order by b_id DESC"  ;

	$q ="select c.status  ,c.bookingid,d.b_id from paymentdetail c INNER JOIN bookings d ON d.b_id = c.bookingid   ";
	

	


	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	echo "<tr>";
	$id=$arr['b_id'];
	
	echo "<td>".$arr['Ticket_no']."</td>";
	echo "<td>".$arr['Ticket_title']."</td>";
	echo "<td>".$arr['venue']."</td>";
	echo "<td>".$arr['tdate'].",  ".$arr['ttime']."</td>";
	echo "<td>"."Rs. ".$arr['price']."</td>";
	echo "<td>".$arr['qty']."</td>";
	echo "<td>"."Rs. ".$arr['cost']."</td>";
		echo "<td>".$arr['organizedby']."</td>";

		if ($arr['status']=='paid') {
			echo "<td><a href='pdf/generate.php?id=$id'>  <button  style = \" color:green; \"  >  paid(view report)  </button>  </div>  </a></td>";
		} else {
				echo "<td><a href='payment.php?id=$id'>  <button  style = \" color:blue; \"  >  pay now  </button>  </div>  </a></td>";
		}
		
	
		if ($arr['status']!='paid') {

	echo "<td><a href='cancelpayment.php?id=$id'> <button  style = \" color:red; \" >  cancel </button></a> </td>";}
	else{
		echo"<td><a href='#'> <button  style = \" color:red; \" >  </button></a> </td>";
	
	}

	echo "</tr>";
}


	
?>
</tr>
</table>
</div>
</div>
<?php include 'include/footer.php';?>