<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Show Hide Elements Using Select Box</title>
<style>
    .box{
        color:red;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }



    
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
</head>
<body>
    <div>
        Category:<select   required aria-required="true"  name="Role"     >
            <option value=""  >Please select category </option>
            
         
            <option value="ORG" onclick='checkAll(this)'    >Organizer</option>
            <option value="User"  onclick='checkAll(this)'    >User</option>
        </select>
  
    
   
    <div class="ORG box">Organizer issues tickets and invites bookings<br><br>
   
    </div>  </div>
</body>
</html>
