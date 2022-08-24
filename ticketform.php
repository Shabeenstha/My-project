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
    <title>Leo</title>

    <style type="text/css">
        label{
            color: green;
        }
    </style>
</head>
<body>
 <?php
session_start();
$uploader = $_SESSION['Username'];

  include 'navorganizer.php';
include 'include/usernamedisplay.php';?>
    <div class="l-login l-pd-top-4">
        <div class="l-container">
            <div class="l-row">
                <div class="l-grid-2">
                    <div class="l-login-detail">
                        <div class="l-header-ingo l-pd-bottom-1">
                            <h3  style="color:orange;" >Issue New Ticket </h3>
                        </div>
                        <form action="ticketprocess.php" method="post">
                          
                            <div class="input-form">
                                <label for="">Ticket Title</label>
                                <input type="text" class="input-text" name="ttitle" id="" placeholder="Enter Title for ticket that describes the sports event properly" required >
                            </div>
                             <div class="input-form">
                                <label for="">Total no. of tickets </label>
                                <input type="text" class="input-text" name="totalticket" id="" placeholder="total tickets available for booking" required >
                               
                            </div>
                             <div class="input-form">
                                <label for="">Venue</label>
                                <input type="text" class="input-text" name="venue" id="" placeholder="venue where the sports event will be held" required  >
                            </div>
                             <div class="input-form">
                                <label for="">Date </label>
                                <input type="date" class="input-text" name="dat" id="date1" 
                                onblur="return datecheck()" placeholder="  " required  >
                            </div>
                             <div class="input-form">
                                <label for="">Time </label>
                                <input type="text" class="input-text" name="tim" id="" placeholder=" 12:00 am/pm " required  >
                            </div>
                            <div class="input-form">
                                <label for="">Ticket Price(per unit)</label>
                             <input type="number" class="input-text" name="price" id="" placeholder="unit price for ticket"  required >
                                
                            </div>
                               <div class="input-form">
                                <label for="">Organized by</label>
                                <input type="text" class="input-text" name="organizer" id="" placeholder=" Name of organizing club , institution, organizations" required  >
                            </div>
                            
                            
                            <input type="hidden" name="uploader" value="<?php echo $uploader ?>" >
                            
                            <div class="input-form l-flex-wrap">
                                <button type="submit" class="l-mg-top-2 l-mg-right-1" name="save_account_details" value="Save changes">Submit</button>
                                 <button type="Reset" class="l-mg-top-2 l-mg-right-1" name="save_account_details" value="Save changes">Reset</button>
                                
                            </div>


                        </form>
                    </div>
                </div>
                <div class="l-grid-2 l-create-new">
                    <div class="l-header-ingo">
                        <h3 style="color:orange;"  >Issue Tickets with few steps </h3>
                        
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        <div class="l-info-icon l-pd-right-1">
                         
                        </div>
                        <div class="l-info-content">
                            <h5>1.Fill up the form </h5>
                            <p> provide details using the form</p>
                        </div>
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        <div class="l-info-icon l-pd-right-1">
                           
                        </div>
                        <div class="l-info-content">
                            <h5>2.Be patient for Admin's Approval</h5>
                            <p>Admin will verify and approve the details </p>
                        </div>
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        <div class="l-info-icon l-pd-right-1">
                            
                        </div>
                        <div class="l-info-content">
                            <h5>3.View tickets</h5>
                            <p>Tickets can be viewed after approval from admin is given</p>
                        </div>
                       
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        <div class="l-info-icon l-pd-right-1">
                            
                        </div>
                        <div class="l-info-content">
                              <h5>4. Be Careful</h5>
                              <p>   Tickets will be disapproved upon finding wrong  detail</p>
                        </div>
                       
                    </div>
                    <!-- <div class="l-create-account l-pd-top-1">
                        <a href="create-new.php">Create an account <i class="fas fa-chevron-right"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

<footer>
    <div class="l-container">
        <div class="l-footer-wrap">
            <div class="l-row">
                <div class="l-grid-4">
                    <div class="l-footer-catagory">
                        <h4>Leo Furniture</h4>
                    </div>
                    <div class="l-footer-discription">
                        <p>Leo Furniture brings you the best home experience.</p>
                    </div>
                    <div class="l-footer-contact">
                        <div class="l-flex-wrap">
                            <div class="l-footer-icon">
                                <span><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <div class="l-footer-content l-pd-left-1">
                                <p>2 Perry Street, Campsie, NSW</p>
                            </div>
                        </div>
                        <div class="l-flex-wrap">
                            <div class="l-footer-icon">
                                <span><i class="fas fa-phone-volume"></i></span>
                            </div>
                            <div class="l-footer-content l-pd-left-1">
                                <p>+61409211335</p>
                            </div>
                        </div>
                    </div>
                    <div class="l-footer-link">
                        <a href="#">www.leo.com</a>
                    </div>
                </div>
                <div class="l-grid-2">
                    <div class="l-footer-quicklink">
                        <div class="l-row">
                            <div class="l-grid-3">
                                <div class="l-footer-catagory">
                                    <h4>Menu</h4>
                                </div>
                                <div class="l-footer-quicklink-list">
                                    <ul>
                                        <li><a href="bedroom.html">bedroom</a></li>
                                        <li><a href="dining.html">dining</a></li>
                                        <li><a href="living.html">living</a></li>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="l-grid-3">
                                <div class="l-footer-catagory">
                                    <h4>Account</h4>
                                </div>
                                <div class="l-footer-quicklink-list">
                                    <ul>
                                        <li><a href="dashboard.html">my account</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="cart.html">my cart</a></li>
                                        <li><a href="wishlist.html">my wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="l-grid-3">
                                <div class="l-footer-catagory">
                                    <h4>Stay Connect</h4>
                                </div>
                                <div class="l-footer-quicklink-list">
                                    <ul>
                                        <li><a href="#">facebook</a></li>
                                        <li><a href="#">instagram</a></li>
                                        <li><a href="#">twiiter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-grid-4">
                    <div class="l-footer-catagory">
                        <h4>Stay updated</h4>
                    </div>
                    <div class="l-subscribe">
                        <form action="" class="l-flex-wrap">
                            <div class="input-form">
                                <input type="text" name="" id="" placeholder="Enter your email">
                            </div>
                            <div class="input-form">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

    
    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/top.js"></script>
    <script src="assets/js/toggle.js"></script>

    <script type="text/javascript">
       function datecheck() {
    var UserDate = document.getElementById("date1").value;
    var ToDate = new Date();

    if (new Date(UserDate).getTime() <= ToDate.getTime()) {
          alert("The Date must be Bigger or Equal to today date");
          return false;
     }
    return true;
}
    </script>

}
</body>
</html>