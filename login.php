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
</head>
<body>
 <?php include 'include/nav1.php'?>
    <div class="l-login l-pd-top-4">
        <div class="l-container">
            <div class="l-row">
                <div class="l-grid-2">
                    <div class="l-login-detail">
                        <div class="l-header-ingo l-pd-bottom-1">
                            <h3>Login</h3>
                        </div>
                        <form action="loginprocess.php" method="post">
                            <div class="input-form">
                                <label for="">Username </label>
                                <input type="text" class="input-text" name="Username" id="" placeholder="">
                            </div>
                            <div class="input-form">
                                <label for="">Password</label>
                                <input type="password" class="input-text" name="Password" id="" placeholder=""  >
                            </div>
                             <div class="input-form">
                                <label for="">Log In as</label>
                                 
                                    <select name="Role"  required aria-required="true"  ><option  value="Admin" onclick='checkAll(this)'     >Admin</option> <option  value="ORG" onclick='checkAll(this)'       >Organizer</option> <option  value="User" onclick='checkAll(this)'      >User</option> </select>
                            </div>
                            <div class="input-form l-flex-wrap">
                                <button type="submit" class="l-mg-top-2 l-mg-right-1" name="save_account_details" value="Save changes">Sign In</button>
                                <a class="l-mg-top-1" href="#">Forgot Password ?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="l-grid-2 l-create-new">
                    <div class="l-header-ingo">
                        <h3>Don't have an account?</h3>
                        <p>Here are some of the benefits you'll enjoy.</p>
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        
                        <div class="l-info-content">
                            <h5>Issue or Book Tickets</h5>
                            <p>Tickets can be booked or sold </p>
                        </div>
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        <div class="l-info-content">
                            <h5>View Bookings</h5>
                            <p>Keep an eye on your bookings.</p>
                        </div>
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        
                        <div class="l-info-content">
                            <h5>Payments and Reports </h5>
                            <p>Make payments and view reports</p>
                        </div>
                    </div>
                    
                    <div class="l-create-account l-pd-top-1">
                        <a href="create-new.php">Create an account <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div style="margin-top:35px" >
    <?php include'include/footer.php'?>
</div>

    
    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/top.js"></script>
    <script src="assets/js/toggle.js"></script>
</body>
</html>