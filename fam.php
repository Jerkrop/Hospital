<?php require "famfun.php" ?>
<DOCTYPE html>
	<html>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="willcss.css">
		<title>family</title>
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
		<form action="fam.php" method="post">
			<input type="date" name="date">
			<input type="text" name="patid" placeholder="enter patient's id">
			<input type="text" name="famcode" placeholder="enter family code">
			<input type="submit" name="submit">
		</form>
		<table id="patientList">
			<tr>
				<th class="headRow">Doctor's name</th>
				<th class="headRow">Appointment</th>
				<th class="headRow">Caregiver's name</th>
				<th class="headRow">Morning Medicine</th>
				<th class="headRow">Afternoon Medicine</th>
				<th class="headRow">Night Medicine</th>
				<th class="headRow">Breakfast</th>
				<th class="headRow">Lunch</th>
				<th class="headRow">Dinner</th>
			</tr>
			<tr>
				<td><?php echo $docname; ?></td>
				<td><?php echo $appointment; ?></td>
				<td><?php echo $caregiver; ?></td>
				<td><?php echo $morning; ?></td>
				<td><?php echo $afternoon; ?></td>
				<td><?php echo $night; ?></td>
				<td><?php echo $breakfast; ?></td>
				<td><?php echo $lunch; ?></td>
				<td><?php echo $dinner; ?></td>
			</tr>
		</table>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	</body>

	</html>