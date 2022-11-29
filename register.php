
<html>
    <link rel="stylesheet" href="register.css">
<title>Register Page </title>
<h1>  Register </h1>
<div class="flexbox-container1">

<form action="function.php" method="POST">
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
    <label for="Firstname">First Name:</label>
    <input type="text" id="Firstname" name="Firstname"   placeholder="any">
    </br>
    <label for="LastName">Last Name:</label>
    <input type="text" id="LastName" name="LastName" placeholder="any   ">
    </br>
    <label for="Email">Email:</label>
    <input type="email" id="Email" name="Email"   placeholder="example@email.com">
    </br>
    <label for="Phone">Phone:</label>
    <input type="number" id="Phone" name="Phone"  placeholder="123-4567-890">
    </br>
    <label for="Password">Password:</label>
    <input charset="utf8" type="password" id="Password" name="password_1, password_2" placeholder="any">
    </br>
    <label for="DoB">DoB:</label>
    <input type="date" id="DoB" name="DoB" placeholder="yes">
    </br>
    <label for="FamilyCode">FamilyCode:</label>
    <input type="number" id="FamilyCode" name="FamilyCode" placeholder="any">
    </br>
    <label for="Em_Contact">EmergencyContact:</label>
    <input type="number" id="Em_Contact" name="Em_Contact" placeholder="any">
    </br>
    <label for="Rel_Em_Contact">RealtiontoEmergencyContact:</label>
    <input type="text" id="Rel_Em_Contact" name="Rel_Em_Contact" placeholder="any">
    </br>
    <button  action="/function.php" method="POST" type="submit" class="btn" value="register" name="reg_user">Register</button>
    <p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>

</form>

</div>

</html>