<?php
session_start();
$id=$_GET['id'];

include 'include/connection.php';
$query = "select * from bookings where b_id='$id' ";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
    
    $arr=mysqli_fetch_array($result,MYSQLI_ASSOC);

    $total = $arr['cost'];

 $bid = $arr['b_id'];
 if($result)
    {
        if ( mysqli_num_rows($result) == 1)
        {
            
        
            $query = "update bookings set status = 'paid'where b_id= $id";
                  
            if( !mysqli_query($conn, $query))
            {
                die('Error!');
            }
        }
    }

?>
<body>
    <form action="https://uat.esewa.com.np/epay/main" method= "POST"  >
    <input value="<?php echo $total;?>"  name="tAmt" type="hidden">
    <input value="<?php echo $total;?>"  name="amt" type="hidden">
    <input value="0" name="txAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?php echo $bid;?>" name="pid" type="hidden">
    <input value="http://localhost/stbs/success.php?q=su" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    <input value="pay using esewa" type="submit" name="pay using esewa"  class="btn btn-primary">
   
    </form>
</body>