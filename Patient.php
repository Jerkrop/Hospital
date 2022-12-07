
<html>
<title>Patient Search Page</title>
<link rel="stylesheet" href="register.css">

<h1>Patient Search<h1>
<div class="flexbox-container1">
<form action="output_patient.php" method="POST">
    
<div class="input-group mb-3">
 <input type="text" name="search" required value="<?php if(isset($_POST['search'])){echo $_POST['search']; } ?>" class="form-control" placeholder="Search data">
<button type="submit" class="btn btn-primary">Search</button>

</form>
</form>
</div>
</html>