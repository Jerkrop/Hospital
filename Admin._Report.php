<html>
<title>Admin Page</title>
<link rel="stylesheet" href="register.css">

<h1>Admin Report Page</h1>
<form  action="function_admin.php" method="POST">

<div class="flexbox-container1">
<label for="Date">Date:</label>
    <input type="Date" id="Date" name="Date" placeholder="any">
    </br>
    <h3> Missed Patient Activity </h3>
    <label for="Morn_med">Morning Medicine:</label>
    <input type="text" id="Morn_med" name="Morn_med" placeholder="any">
    </br>
    <label for="Afternoon_med">Afternoon Medicine:</label>
    <input type="text" id="Afternoon_med" name="Afternoon_med" placeholder="any">
    </br>
    <label for="Night_med">Night Medicine:</label>
    <input type="text" id="Night_med" name="Night_med" placeholder="any">
    </br>
    <label for="Break">Breakfast:</label>
    <input type="text" id="Break" name="Break" placeholder="any">
    </br>
    <label for="Lunch">Lunch:</label>
    <input type="text" id="Lunch" name="Lunch" placeholder="any">
    </br>
    <label for="Dinner">Dinner:</label>
    <input type="text" id="Dinner" name="Dinner" placeholder="any">
    </br>
    <button type="submit"  action="function_admin.php"  method="POST" class="btn" value="submit" name="submit">Submit</button>
  
    <button action="login.php"  method="POST" type="submit" >Cancel</button>


 

</form>

</div>


</html>
<?php
require "function_admin.php"
?>