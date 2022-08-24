 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
 </head>
 <body>
 
 

  <div class="l-login l-pd-top-4">
        <div class="l-container">
            <div class="l-row">
                <div class="l-grid-2">
                    <div class="l-login-detail">
                        <div class="l-header-ingo l-pd-bottom-1">
                            <h3 style="color: orange"  >Book Tickets</h3>
                        </div>
                        <form    name="myform" action="bookingprocess.php"  method="post" onsubmit="return ticketcheck()"    >


<input type="hidden" name="serialno" value="<?php echo uniqid('stbs');  ?>" >

                            <input type="hidden" name="user" value=  "<?php echo $_SESSION['Username'];  ?>" >
                            <input type="hidden" name="ticket_no" value="<?php echo $arr['Ticket_no'];?>"  >
                          
                            <div class="input-form">
                                <label for="">Ticket Title</label>
                                <input type="text" class="input-text" value="<?php echo $arr['Ticket_title'];?>" name="ttitle" id="" placeholder="Enter Title for ticket that describes the sports event properly" required    >
                            </div>
                             <div class="input-form">
                                <label for="">Total no. of tickets Issued</label>
                                <input type="text"  value="<?php echo $arr['Total_tickets'];?>"  class="input-text" name="totalticket" id="t1" placeholder="total tickets available for booking" required  readonly  >
                            </div>
                            <div class="input-form">
                                <label for=""> Available tickets now</label>
                                <input type="text"  value="<?php echo $arr['Total_tickets']-$ars1['sum(b.qty)'];?>"  class="input-text" name="availableticket" id="t2" placeholder="total tickets available for booking" required  readonly  >
                            </div>
                             <div class="input-form">
                                <label for="">Venue</label>
                                <input type="text" class="input-text"  value="<?php echo $arr['venue'];?>"  name="venue" id="" placeholder="venue where the sports event will be held" required  readonly  >
                            </div>
                             <div class="input-form">
                                <label for="">Date and Time</label>
                                <input type="text" class="input-text"  value="<?php echo $arr['tdate'].','.' '.     $arr['ttime'];?>" name="dateandtime" id="" placeholder=" exact date and time for the event " required  readonly >
                            </div>
                            <div class="input-form">
                                <label for="">Ticket Price(per unit)</label>
                                <input type="number"   value="<?php echo $arr['price'];?>"  class="input-text" name="price" id="" placeholder="unit price for ticket"  required readonly >
                            </div>
                               <div class="input-form">
                                <label for="">Organized by</label>
                                <input type="text" class="input-text" name="organizer" id="" placeholder=" Name of organizing club , institution, organizations" value="<?php echo $arr['organizedby'];?>"    required readonly  >
                            </div>
                                <div class="input-form">
                                <label for="">Ticket Qty</label>
                                <input type="number" class="input-text" name="qty" id="qty" placeholder=" Enter no of tickets to book"     required=""  >

                            </div>
                                    
                            
                            
                            <div class="input-form l-flex-wrap">
                                <button type="submit" class="l-mg-top-2 l-mg-right-1" name="save_account_details" value="Save changes"    >Book</button>
                                 <button type="Reset" class="l-mg-top-2 l-mg-right-1" name="save_account_details" value="Save changes">Reset</button>
                                
                            </div>

                            
                            


                        </form>
                    </div>
                </div>
                <div class="l-grid-2 l-create-new">
                    <div class="l-header-ingo">
                        <h3 style="color: orange" >Book Tickets with few steps </h3>
                        
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        <div class="l-info-icon l-pd-right-1">
                         
                        </div>
                        <div class="l-info-content">
                            <h5>1.Fill up the form </h5>
                            <p> Add few Details only</p>
                        </div>
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        <div class="l-info-icon l-pd-right-1">
                           
                        </div>
                        <div class="l-info-content">
                            <h5>2. Choose quantity of tickets to book</h5>
                            <p>Buy desired number of tickets  </p>
                        </div>
                    </div>
                    <div class="l-info-section l-flex-wrap l-pd-top-2">
                        <div class="l-info-icon l-pd-right-1">
                            
                        </div>
                        <div class="l-info-content">
                            <h5>3.Payments</h5>
                            <p>Make Payments to finalize booking</p>
                        </div>
                    </div>
                    <!-- <div class="l-create-account l-pd-top-1">
                        <a href="create-new.php">Create an account <i class="fas fa-chevron-right"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

   



    
    <script type="text/javascript">
        function ticketcheck() {
            
        
        var x = document.getElementById("qty").value;
         var y = document.getElementById("t2").value;

        if (x>y) {
            alert("sorry! cannot book more tickets than available no of tickets");
            return false;
        }
        if (x==0 || x<0) {
            alert("Invalid no of tickets");
            return false;
        }
        if (x>4) {
            alert("cannot book more than 4 tickets at once");
            return false;


        }
}
    </script>
    </body>
 </html>
