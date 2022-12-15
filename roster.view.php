<?php
	if (!isset($_SESSION)) {
		session_start();
		require 'roster.php';
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="roster.css">
	<title>Roster</title>
</head>

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
					<li>logout</li>
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
					<li>logout</li>
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
					<li>logout</li>
			  </a>
			  <a href='caregiver.php'>
					<li>Home</li>
			  </a>
			  <a href='patient.php'>
					<li>patient info</li>
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
					<li>logout</li>
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
					<li>roster edit</li>
			  </a>
			  <a href='payment.php'>
					<li>rpayment</li>
			  </a>
			  <a href='admin_report.php'>
					<li>reports</li>
			  </a>
			  <a href='employee.php'>
					<li>employee info</li>
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
					<li>logout</li>
			  </a>
			  <a href='fam.php'>
					<li>Home</li>
			  </a>
			  <a href='addRoster.php'>
					<li>roster edit</li>
			  </a>
			  <a href='admin_report.php'>
					<li>reports</li>
			  </a>
			  <a href='employee.php'>
					<li>employee info</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
	}
	?>
		<roster>
			<h1 id="rosterHeader">Roster</h1>
			<datePicker>
				<form action="roster.view.php" id="dateForm" method="post">
					<label for="dateSelector">Choose a date:</label>
					<input type="date" id="dateSelector" name="dateSelector">
					<button type="submit">Select</button>
				</form>
			</datePicker>
			<table id="rosterTable">
				<tr>
					<th class="headRow">First Name</th>
					<th class="headRow">Last Name</th>
					<th class="headRow">Role</th>
					<th class="headRow">Group #</th>
				</tr>
				<?php
					makeTable();
				?>
			</table>
		</roster>
	</contentContainer>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>