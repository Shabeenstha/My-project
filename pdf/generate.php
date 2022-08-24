<?php

require('FPDF/fpdf.php');

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(252,3,3);
$pdf->SetLeftMargin(10);

$pdf->Cell(20,20,'                                   Matchday Ticket Details ','0','1','c');



//table column

$image1="../assets/img/LEO-2.jpg";
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Image($image1, 5, 5, 33.78);

$pdf->Cell(30,10,"Ticket id","1","0","c");
$pdf->Cell(20,10,"qty","1","0","c");

$pdf->Cell(30,10,"EventDate","1","0","c");
$pdf->Cell(60,10,"EventTitle","1","0","c");
$pdf->Cell(50,10,"venue","1","1","c");


$host = 'localhost';
$db = 'stbs';
$username = 'root';
$password = '';
// Create the connection
$conn = new mysqli($host,$username,$password,$db);


// $conn = mysqli_connect($host,$username,$password,$db);
// if(mysqli_connect_error()){
//   die("failed connection".mysqli_connect_error());
// }

session_start();
$user = $_SESSION['Username'];
	
$id=$_GET['id'];



$query="select t.Ticket_no,t.Ticket_title,t.venue,t.tdate,t.ttime,t.price,t.organizedby,b.qty,b.Username,b.cost ,b.b_id ,b.serial from  ticket_issue t INNER JOIN bookings b  ON t.Ticket_no=b.Ticket_no where Username= '$user' and b_id = '$id' "  ;
$result = mysqli_query($conn,$query);
	
	
	while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{    
		$serial = $rows['serial'];
		$date = $rows['tdate'];
		$title=$rows['Ticket_title'];
		$ticketno = $rows['Ticket_no'];
		$venue = $rows['venue'];
		$qty = $rows['qty'];
		$time=$rows['ttime'];
$pdf->SetFont('Arial','B',11);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(30,10, $serial  ,"1","0","c");
$pdf->Cell(20,10,$qty,"1","0","c");

$pdf->Cell(30,10, $date  ,"1","0","c");
$pdf->Cell(60,10,$title,"1","0","c");
$pdf->Cell(50,10,$venue,"1","1","c");



}
$pdf->SetFont('Arial','I',11);
$pdf->SetTextColor(0,204,0);
$pdf->Cell(5,30,' Note: Tickets will be valid only when presented on  matchday ','0','1','c');
$pdf->Output();

?>