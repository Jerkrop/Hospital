<html>
<link rel="stylesheet" href="register.css">
<div class="flexbox-container1">
   <title>Payment Page</title>
   
   <h1>Payment Page</h1>
   <form action="Payment.php" method="POST">
   <label for="Pat_ID">Patient ID:</label>
    <input type="text" id="Pat_ID" name="Pat_ID" placeholder="any">
    <input type="submit"action="payment.php" method="POST" name="submit1">
    </br>
    <label  id="Total_Due"  name="Total_Due" for="Total_Due">Total Due:</label>
      </br>
    <label for="NewPayment">New Payment:</label>
    <input type="text" id="NewPayment" name="NewPayment" placeholder="any">
    </br>
    <input type="submit" action="Payment.php" name="submit2" method="POST" >
  


</form>

</div>
</form>
</html>
<?php
require "payment_function.php"
?>
