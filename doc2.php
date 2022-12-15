<?php
require 'doc2fun.php'
?>
<DOCTYPE html>
	<html>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="willcss.css">
		<title>doctor</title>
	</head>

	<body>
	<header>
		<h1>Hospital</h1>
		<a id="accountIcon" href="#">
			<ion-icon name="person-circle-outline"></ion-icon>
		</a>
	</header>

		<?php
			if ($_SESSION['Access'] == 4) {
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
			} else if ($_SESSION['Access'] == 1) {
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
			} else if ($_SESSION['Access'] == 3) {
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
			} else if ($_SESSION['Access'] == 2) {
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
			} else if ($_SESSION['Access'] == 6) {
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
			} else if ($_SESSION['Access'] == 5) {
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
		<table id="patientList">
			<tr>
				<th class="headRow">Date</th>
				<th class="headRow">comment</th>
				<th class="headRow">Morning Med</th>
				<th class="headRow">Afternoon Med</th>
				<th class="headRow">Night Med</th>
			</tr>
			<tr>
				<th><?php echo $_SESSION['date']; ?></th>
				<th><?php echo $_SESSION['comment']; ?></th>
				<th><?php echo $_SESSION['morning']; ?></th>
				<th><?php echo $_SESSION['afternoon']; ?></th>
				<th><?php echo $_SESSION['night']; ?></th>
			</tr>
		</table>
		<table id="appointmentTable">
			<tr>
				<th class="headRow">comment</th>
				<th class="headRow">Morning Med</th>
				<th class="headRow">Afternoon Med</th>
				<th class="headRow">Night Med</th>
			</tr>
			<tr>
				<td>
					<form id='1' action='doc2.php' method='POST'></form><input form='1' name='comment'>
				</td>
				<td><input type='checkbox' form='1' name='morning'></td>
				<td><input type='checkbox' form='1' name='afternoon'></td>
				<td><input type='checkbox' form='1' name='night'></td>
			</tr>
		</table>
		<input form='1' type='submit' name='submit' value='add perscription'>
		<input form='1' type='submit' name='clear' value='clear'>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	</body>

	</html>