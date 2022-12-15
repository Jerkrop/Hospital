<?php require "doc1fun.php" ?>
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

		<contentContainer>
			<?php
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
			?>
			<div id="searchTables">
				<form action='doc1.php' method='POST'>
					<input name='name'>
					<input type='submit' name='namesearch' value='search name'>
				</form>
				<form action='doc1.php' method='POST'>
					<input type='date' name='date'>
					<input type='submit' name='datesearch' value='search date'>
					<table id="patientList">
						<tr>
							<th class="headRow">Patient's name</th>
							<th class="headRow">Date</th>
							<th class="headRow">Comment</th>
							<th class="headRow">Morning Medicine</th>
							<th class="headRow">Afternoon Medicine</th>
							<th class="headRow">Night Medicine</th>
						</tr>
						<?php
						for ($a = 0; $a < count($patname); $a++) {
							if ($date[$a] <= date('Y-m-d')) {
								echo "<tr>
		<td><form id='" . $a . "' action = 'doc1.php' method='POST'></form>
		<input size='1' form='" . $a . "' name='id' value='" . $patid[$a] . "' readonly='readonly' style='visibility:hidden'>
		<input form='" . $a . "' name='name' value='" . $patname[$a] . "' readonly='readonly'></td>
		<td><input form='" . $a . "' name='date' type='date' value='" . $date[$a] . "' readonly='readonly'></td>
		<td><input form='" . $a . "' name='comment' value='" . $comment[$a] . "' readonly='readonly'></td>
		<td><input form='" . $a . "' name='morning' value='" . $morn[$a] . "' readonly='readonly'></td>
		<td><input form='" . $a . "' name='afternoon' value='" . $aft[$a] . "' readonly='readonly'></td>
		<td><input form='" . $a . "' name='night' value='" . $night[$a] . "' readonly='readonly'></td>
		<td><input form='" . $a . "' type='submit' name='submit' value = 'patient page'></tr>";
							}
						}
						?>
					</table>
				</form>
				<form action='doc1.php' method='POST'>
					<input type='submit' value='show appointments up till'>
					<input type='date' name='lastdate'>
					<table id="appointmentTable">
						<tr>
							<th class="headRow">Patient</th>
							<th class="headRow">Date</th>
						</tr>
						<?php
						for ($a = 0; $a < count($patname); $a++) {
							if ($date[$a] > date('Y-m-d')) {
								if (isset($_POST['datetill'])) {
									if ($date[$a] <= $_POST['lastdate']) {
										echo "<tr>
					<td><p>" . $patname[$a] . "</p></td>
					<td><p>" . $date[$a] . "<p></td></tr>";
									}
								}
							}
						}
						?>

					</table>
				</form>
			</div>
		</contentContainer>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	</body>

	</html>