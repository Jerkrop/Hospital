<html>
<link rel="stylesheet" href="employee.css">
<body>
<header>
		<h1>Hospital</h1>
		<a id="accountIcon" href="#">
			<ion-icon name="person-circle-outline"></ion-icon>
		</a>
	</header>
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

<title>Employee Page</title>
<h1>Employee</h1>
<div class="flexbox-container1">
	<p> ID </p>
	<p> Name </p>
	<p> Role </p>
	<p> Salary </p>
	<label for="Emp_ID">Emp ID:</label>
	<input type="text" id="Emp_ID" name="Emp_ID" placeholder="any">
	</br>
	<label for="New_Salary">New Salary:</label>
	<input type="text" id="New_Salary" name="New_Salary" placeholder="any">
	</br>
	<button type="submit">Submit</button>



	</form>
	<form>
		<button type="submit">Cancel</button>

</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>