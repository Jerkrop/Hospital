<html>
<title>Patient Search Page</title>
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
<h1>Patient Search<h1>
		<div class="flexbox-container1">
			<form action="Patient.php" method="POST">

				<div class="input-group mb-3">
					<input type="text" name="search" required value="<?php if (isset($_POST['search'])) {
																			echo $_POST['search'];
																		} ?>" class="form-control" placeholder="Search data">
					<button type="submit" class="btn btn-primary">Search</button>

			</form>
		</div>
	</contentContainer>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
<?php
require "output_patient.php"
?>