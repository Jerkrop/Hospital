<html>
<link rel="stylesheet" href="register.css">
<div class="flexbox-container1">
   <title>Payment Page</title>
   
   <h1>Payment Page</h1>
   <form action="payment.php" method="POST">
   <label for="Pat_ID">Patient ID:</label>
    <input type="text" id="Pat_ID" name="Pat_ID" placeholder="any">
    <button type="submit"action="payment.php" method="POST" name="submit"> ok</button>
    </br>
    <label  id="Total_Due"  name="Total_Due" for="Total_Due">Total Due:</label>
      </br>
    <label for="New Payment">New Payment:</label>
    <input type="text" id="New Payment" name="New Payment" placeholder="any">
    </br>
    <button type="submit" action="payment.php" name="submit" method="POST" >Pay</button>
  


</form>

</div>
</form>
</html>
<?php
require "payment_function.php"
?>
