<?php
  include('include/connection.php');
 
  
     $email  = $_POST['Email'];
     
     $uname  = $_POST['Username'];
     $Fname  = $_POST['FullName'];
   

     $password = $_POST['Password'];

$Contact=$_POST['Contact'];
$Role = $_POST['Role'];


$q1= "select * from userinfo where Username='$uname' and Role = '$Role'	";
$res=mysqli_query($conn,$q1);		
 $rowcount=mysqli_num_rows($res);
 if ($rowcount>0){
      echo "Username already registered . Please use another username";

       } 
       else
       {

  
     $query = "INSERT INTO userinfo(Username,FullName,Email,Password,Contact,Role) VALUES ('$uname','$Fname','$email','$password','$Contact','$Role')";
    
 $result = mysqli_query($conn,$query);
header('location:login.php');
}
 ?>