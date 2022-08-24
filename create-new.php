<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/LEO-2.png">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/brands.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/solid.css">
    <title>Stbs</title>

</head>
<body>

   <?php include 'include/nav1.php'?>

    <div class="l-login l-create-new l-pd-top-4"     >
        <div class="l-container">
            <div class="l-row">
                <div class="l-grid-2">
                    <div class="l-login-detail">
                        <div class="l-header-ingo l-pd-bottom-1">
                            <h3>Create an account</h3>
                             <form action="registrationprocess.php" method="post" name="myform" onsubmit=" return validation1()  "  >
                            <div class="l-billing-detail">
                                <div class="input-form">
                                    <label for="">Username</label>
                                    <input type="text" class="input-text" name="Username" id="" placeholder="" required=""   >
                                </div>
                                <div class="input-form">
                                    <label for="">FullName</label>
                                    <input type="text" class="input-text" name="FullName" id="" placeholder="" required=""  >
                                </div>
                                
                                <div class="input-form">
                                    <label for="">Email Address</label>
                                    <input type="text" class="input-text" name="Email" id="" placeholder="" required=""  >
                                </div>
                                <div class="input-form">
                                    <label for="">Password</label>
                                    <input type="password" class="input-text" name="Password" id="" placeholder="" required=""  >
                                </div>
                                <div class="input-form">
                                    <label for="">Contact</label>
                                    <input type="number" class="input-text" name="Contact" id="" placeholder="" required=""  >
                                </div>
                                
                                </div>
                                 <div class="input-form">
                                   <?php include 'regformpart.php';?>
                                    
                                </div>

                                <div class="input-form">
                                    <button type="submit" class="" name="save_account_details" value="Save changes">Create account</button>
                                </div>
                            </div>
                        </form>
                        </div>
                       
                    </div>
                  <div class="l-grid-2 l-create-new">
                    <div class="l-header-ingo">
                        <p>Follow instructions and Register</p>
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                       
                        <div class="l-info-content">
                            <h5>Provide Correct Information</h5>
                            <p>Your Information is your identity    </p>
                        </div>
                    </div><br>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                       
                        <div class="l-info-content">
                            <h5>Select Role</h5>
                            <p>Different role provides different ability</p>
                        </div>
                    </div><br>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                       
                        <div class="l-info-content">
                            <h5>Be aware before doing any wrong</h5>
                            <p>Admin can remove users permanently .</p>
                        </div>

                    </div><br>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        
                        <div class="l-info-content">
                            <h5>Login to the system</h5>
                            <p>Now login to access into the system</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
 

             


<?php  include 'include/footer.php';  ?>
</body>
    
     <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/top.js"></script>
    <script src="assets/js/toggle.js"></script>


<script type="text/javascript">
  function validation1(){
var u=document.myform.Username.value; 
  
  if (u.length>25){
alert(" User Name too long! ") ;
     return false;  
  }  
  
  if(u == "") {  
    alert(" Username cannot be empty   ") ;
     return false;  
  }  
if(u.length<4)
{
    alert("Name too short");
    return false;
}





var f = document.myform.FullName.value;  
   
   if(f.length<4) {  
    alert(" Provide fullname   ") ;
     return false;  
  } 
    



    var contact=document.myform.Contact.value;
  
  if(contact.length < 10) {  
     alert("Contact number must contain 10 digits") ; 
     return false;  
  }  
   if(contact.length > 10) {  
       alert("Contact number must not exceed more than 10 digits") ;
     return false;  

}




  var pw=document.myform.Password.value;
  if(pw.length < 4) {  
     alert("password too short!password must contain more than more characters") ; 
     return false;  
  }  
   
 



var x=document.myform.Email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address");  
  return false;  
  }
  
  else{
    alert("registration successful. please login into the system")
  }   
}
</script>
   





</body>
</html>