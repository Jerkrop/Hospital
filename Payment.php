<html>
<link rel="stylesheet" href="register.css">
<body>
<header>
		<h1>Hospital</h1>
		<a id="accountIcon" href="#">
			<ion-icon name="person-circle-outline"></ion-icon>
		</a>
	</header>
	<contentContainer>
	<?php
	if($_SESSION['Access'] == 4){
		echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>Logout</li>
			  </a>
			  <a href='doc1.php'>
					<li>Home</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
	}
	else if($_SESSION['Access'] == 1){
		echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>Logout</li>
			  </a>
			  <a href='fam.php'>
					<li>Home</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
	}
	else if($_SESSION['Access'] == 3){
		echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>Logout</li>
			  </a>
			  <a href='caregiver.php'>
					<li>Home</li>
			  </a>
			  <a href='patient.php'>
					<li>Patient info</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
	}
	else if($_SESSION['Access'] == 2){
		echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>Logout</li>
			  </a>
			  <a href='pat.php'>
					<li>Home</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";		
	}
	else if($_SESSION['Access'] == 6){
		echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>logout</li>
			  </a>
			  <a href='fam.php'>
					<li>Home</li>
			  </a>
			  <a href='addRoster.php'>
					<li>Roster edit</li>
			  </a>
			  <a href='payment.php'>
					<li>Payment</li>
			  </a>
			  <a href='admin_report.php'>
					<li>Reports</li>
			  </a>
			  <a href='employee.php'>
					<li>Employee info</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
	}
	else if($_SESSION['Access'] == 5){
		echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>Logout</li>
			  </a>
			  <a href='fam.php'>
					<li>Home</li>
			  </a>
			  <a href='addRoster.php'>
					<li>Roster edit</li>
			  </a>
			  <a href='admin_report.php'>
					<li>Reports</li>
			  </a>
			  <a href='employee.php'>
					<li>Employee info</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
	}
	?>
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
  </contentContainer>
</body>
</html>
<?php
require "payment_function.php"
?>
