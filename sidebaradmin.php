
<head>
  <link rel="stylesheet" type="text/css" href="assets/css/admin1.css">
</head>

<?php
include 'include/connection.php';
if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="select count('1') from userinfo where Role='Admin'";
$sql1 = "select count('1') from userinfo where Role ='ORG'";
$sql2 = "select count('1') from userinfo where Role ='User'";
$sql3 = "select count('1') from ticket_issue where status ='s'";
$sql4 = "select sum(Total_tickets) from ticket_issue where status ='s'";
$sql5 = "select sum(qty) from bookings where status ='paid'";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
$result4=mysqli_query($conn,$sql4);
$result5=mysqli_query($conn,$sql5);

$row=mysqli_fetch_array($result);
$row1=mysqli_fetch_array($result1);
$row2=mysqli_fetch_array($result2);
$row3=mysqli_fetch_array($result3);
$row4=mysqli_fetch_array($result4);
$row5=mysqli_fetch_array($result5);
?>

<div class="box">
<div class="rectangle0"  > Brief Information</div>
<div class="rectangle"  > <?php echo "<h5 >Total Admin : $row[0]</h5></span>";?></div>

<div class="rectangle1"  > <?php echo "<h5 >Total organizer : $row1[0]</h5></span>";?></div>
<div class="rectangle2"  > <?php echo "<h5 >Total Users : $row2[0]</h5></span> "."<br>";?></div> 
<div class="rectangle5	" > Issued Tickets : <?php echo $row3[0]?>   </div>
<div class="rectangle3"  style="background-color:red; border: red;" >Total Issue qty:<?php echo $row4[0]?>  </div>
<div class="rectangle4" style="background-color:green; border: green;"> 
Total Booked qty:<?php echo $row5[0]?></div>

</div>

<?php
mysqli_close($conn);
?>
