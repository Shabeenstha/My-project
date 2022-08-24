<?php
session_start();
include 'navorganizer.php';
include 'include/usernamedisplay.php';


include'include/connection.php' ?>
		
<div class="l-wishlist l-pd-top-4">
        <div class="l-container" style="min-height: 50vh;"  >
<table border="1" style="margin-bottom:30px;"  >
	<tr>
		
		<th> Ticket no</th>
		<th>TIcket Title</th>
		<th>Venue</th>
		<th>Date and time</th>
		<th>price</th> 	
		<th>Qty</th> 	
		<th>Total Cost</th>
		<th>Organizer</th>
		<th> Booked by </th>
		<th> Payement Status</th>
		

<?php
$user = $_SESSION['Username'];
	$query="select t.Ticket_no,t.uploader,t.Ticket_title,t.venue,t.tdate,t.ttime,t.price,t.organizedby,b.qty,b.Username,b.cost ,b.Username,b.b_id from  ticket_issue t INNER JOIN bookings b  ON t.Ticket_no=b.Ticket_no where uploader='$user'  "  ;

	$q ="select c.status  ,c.bookingid,d.b_id from paymentdetail c INNER JOIN bookings d ON d.b_id = c.bookingid   ";
	$result1=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$arr1=mysqli_fetch_array($result1,MYSQLI_ASSOC);
	$status = $arr1['status'];
	

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
		echo "<td>".$arr['Username']."</td>";

		if ($status=="0") {
			echo "<td><a href='#'>  <button  style = \" color:green; \"  >  payment completed <button>  </div>  </a></td>";
		} else {
				echo "<td><a href='#'>  <button  style = \" color:red; \"  >  payment pending <button>  </div>  </a></td>";
		}
		
	

	

	echo "</tr>";
	
}


	
?>
</tr>
</table>
</div>
</div>
<?Php include 'include/footer.php';?>