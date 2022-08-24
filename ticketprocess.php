<?php
include 'include/connection.php';

$ttitle= $_POST['ttitle'];
$totalticket= $_POST['totalticket'];
$venue= $_POST['venue'];
$organizer= $_POST['organizer'];
$date=$_POST['dat'];
$time = $_POST['tim'];
$price= $_POST['price'];
$organizer= $_POST['organizer'];
$uploader = $_POST['uploader'];
$q1= "select * from ticket_issue where Ticket_title='$ttitle'  ";
$res=mysqli_query($conn,$q1);   
 $rowcount=mysqli_num_rows($res);
 if ($rowcount>0){
      echo " <script type=\"text/javascript\">
            alert('same again');
            </script> ";
            header('location:ticketform.php');

       } 
       else
       {

 $query = "insert into ticket_issue(Ticket_title,Total_tickets,venue,tdate,ttime,price,organizedby,status,uploader) values('$ttitle','$totalticket','$venue','$date','$time','$price','$organizer','p','$uploader')  ";
    
 $result = mysqli_query($conn,$query);
 header('location:ticketview.php');
}


?>