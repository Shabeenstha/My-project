<?php
include 'include/connection.php';

$ticketno = $_POST['ticket_no'];
$price=$_POST['price'];
$qty = $_POST['qty'];
$cost = $qty * $price;
$user = $_POST['user'];
$serial = $_POST['serialno'];


// $q1= "select * from ticket_issue where Ticket_title='$ttitle'  ";
// $res=mysqli_query($conn,$q1);   
//  $rowcount=mysqli_num_rows($res);
//  if ($rowcount>0){
//       echo " <script type=\"text/javascript\">
//             alert('same again');
//             </script> ";
//             header('location:ticketform.php');

//        } 
//        else
//        {

 $query = "insert into bookings(Ticket_no,qty,cost,Username,status,serial) values('$ticketno','$qty','$cost','$user','unpaid','$serial')  ";
    
 $result = mysqli_query($conn,$query);
 echo '<script>alert("Booking complete!")</script>';
 header('location:MyBooking.php');
// }


?>