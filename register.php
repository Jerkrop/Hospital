<html>
    <link rel="stylesheet" href="register.css">
<title>Register Page </title>
<h1>  Register </h1>
<div class="flexbox-container1">

<<<<<<< HEAD
<form action="login.php" method="POST">
=======
<form action="register.php" method="POST">
>>>>>>> 7a6e397ac6e27fd9ebcc42ad4bf89e20a608d372
<label for="roles">Choose A Role</label>
<select name="roles" id="roles">
    <option  value ="Family"> Family</option>
    <option value ="Caregiver"> Caregiver</option>
    <option value ="Doctor"> Doctor</option>
    <option value ="Patient"> Patient</option>
    <option value ="Admin"> Admin</option>
    <option value ="Supervisor"> Supervisor</option>
</select>
</br>
<<<<<<< HEAD
=======
<form   action="register.php" method="POST">
>>>>>>> 7a6e397ac6e27fd9ebcc42ad4bf89e20a608d372
    <label for="Firstname">First Name:</label>
    <input type="text" id="Firstname" name="Firstname" placeholder="any">
    </br>
    <label value="LastName">Last Name:</label>
    <input type="text" id="LastName" name="LastName" placeholder="any   ">
    </br>
    <label value="Email">Email:</label>
    <input type="email" id="Email" name="Email"   placeholder="example@email.com">
    </br>
    <label value="Phone">Phone:</label>
    <input type="number" id="Phone" name="Phone"  placeholder="123-4567-890">
    </br>
    <label value="Password">Password:</label>
    <input charset="utf8" type="password" id="Password" name="Password" placeholder="any">
    </br>
    <label value="DoB">DoB:</label>
    <input type="date" id="DoB" name="DoB" placeholder="yes">
    </br>
    <label value="FamilyCode">FamilyCode:</label>
    <input type="number" id="FamilyCode" name="FamilyCode" placeholder="any">
    </br>
    <label value="Em_Contact">EmergencyContact:</label>
    <input type="number" id="Em_Contact" name="Em_Contact" placeholder="any">
    </br>
    <label value="Rel_Em_Contact">RealtiontoEmergencyContact:</label>
    <input type="text" id="Rel_Em_Contact" name="Rel_Em_Contact" placeholder="any">
    </br>
    <input type="submit" value="Register" name="reg_user">
  
  

</form>

</div>

</html>
<?php
require "function_register.php"
?>