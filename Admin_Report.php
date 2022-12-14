<html>
<title>Admin Page</title>
<link rel="stylesheet" href="register.css">

<h1>Admin Report Page</h1>
<form  action="Admin_report.php" method="POST">

<div class="flexbox-container1">
<label for="Date">Date:</label>
    <input type="Date" id="Date" name="Date" placeholder="any">
    <button type="submit"  action="Admin_report.php"  method="POST" class="btn" value="submit" name="submit">Submit</button>
<table>
    <tr>
  
    <h3> Missed Patient Activity </h3>
    <th  id="Morn_med"name="Morn_med" for="Morn_med">Morning Medicine:</th>
 
   
    <th id="Afternoon_med"name="Afternoon_med" for="Afternoon_med">Afternoon Medicine:</th>

 
    <th  id="Night_med"name="Night_med" for="Night_med">Night Medicine:</th>
  
 
    <th id="Break"name="Break" for="Break">Breakfast:</th>


    <th id="Lunch"name="Lunch" for="Lunch">Lunch:</th>

    <th  id="Dinner"name="Dinner" for="Dinner">Dinner:</th>

</tr>
</table>



 

</form>

</div>


</html>
<?php
require "function_admin.php"
?>