<?php
if (!isset($_SESSION)) {
	session_start();
	require 'newUser.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="newUser.css">
	<title>Accept User | Admin</title>
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
				if (isset($_SESSION['access'])) {
		if ($_SESSION['Access'] == 4) {
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
		} else if ($_SESSION['Access'] == 1) {
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
		} else if ($_SESSION['Access'] == 3) {
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
		} else if ($_SESSION['Access'] == 2) {
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
		} else if ($_SESSION['Access'] == 5) {
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
	}
		?>
		<div id="userForms">
			<form action="newUser.view.php" method="post">
				<table id="newUsers">
					<tr>
						<th class="headRow">Name</th>
						<th class="headRow">Role</th>
						<th class="headRow" id="approvedHeader">Approve</th>
					</tr>
					<?php
					makeUserTable()
					?>
				</table>
				<input type="submit" name="submitAccount">
			</form>
			<div id="addInfoForm">
				<form action="newUser.view.php" method="post">
					<label for="patientId">Patient Id:</label>
					<input type="text" name="patientId" id="idInput">
					<label for="patientGroup">Patient Group:</label>
					<input type="text" name="patientGroup" id="groupInput">
					<label for="admissionDate">Admission Date:</label>
					<input type="date" name="admissionDate" id="admissionDate">
					<input type="submit" name="additionalInfo">
				</form>
			</div>
		</div>
		<?php
		if (isset($_SESSIO['access'])) {
			if ($_SESSION['access'] == 6) {
				echo '
				<div id="roleManager">
				<table id="rolesTable">
					<tr>
						<th class="headRow">Role</th>
						<th class="headRow">Access Level</th>
					</tr>
					<?php
						makeRolesTable()
					?>
				</table>
				<form action="newUser.view.php" method="post" id="addRoleForm">
					<p id="newRoleHeader">New Role</p>
					<div class="newRoleInputs">
						<label for="roleName">Name: </label>
						<input class="roleInput" type="text" name="roleName" id="nameInput" form="addRoleForm">
					</div>
					<div class="newRoleInputs">
						<label for="accessLevel">Access Level: </label>
						<input type="text" name="accessLevel" id="accessLevel" class="roleInput" form="addRoleForm">
					</div>
					<input type="submit" name="submitRole" id="submitRole" form="addRoleForm">
				</form>
			</div>
	
				';
			}
		}
		?>
	</contentContainer>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>