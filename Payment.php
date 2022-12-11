<html>
<link rel="stylesheet" href="register.css">
<div class="flexbox-container1">
   <title>Payment Page</title>
   
   <h1>Payment Page</h1>
   <form action="payment_function.php">
   <label for="Pat_ID">Patient ID:</label>
    <input type="text" id="Pat_ID" name="Pat_ID" placeholder="any">
    </br>
    <label for="Total_Due">Total Due:</label>
    <input type="text" id="Total_Due" name="Total_Due" placeholder="any">
    </br>
    <label for="New Payment">Patient ID:</label>
    <input type="text" id="New Payment" name="New Payment" placeholder="any">
    </br>
    <button type="submit" >Pay</button>
  


</form>

</div>
</form>
</html>
<?php
require "payment_function.php"
?>