<?php
	if (!isset($_SESSION)) {
		session_start();
		require 'addRoster.php';
	}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Manage Roster</title>
	</head>

	<body>
		<header>
			<h1>Hospital</h1>
			<a id="accountIcon" href="#">
				<ion-icon name="person-circle-outline"></ion-icon>
			</a>
		</header>
		<contentContainer>
			<sidebar>
				<div id="sidebarContainer">
					<ul id="sidebarList">
						<a href="#">
							<li>Home</li>
						</a>
						<a href="roster.view.php">
							<li>Roster</li>
						</a>
					</ul>
				</div>
			</sidebar>
			<rosterManager>
				<h1 id="managerHeader">Roster Manager</h1>
				<form method="post" action="addRoster.view.php">
					<div id="datePicker">
						<label for="dateSelector">Choose a date:</label>
						<input type="date" id="dateSelector" name="dateSelector">
					</div>

					<div id="inputs">
						<form action="addRoster.view.php" method="post">
							<p id="inputHeader">Enter an employee's ID in an input below:</p>
							<?php
								if (!isset($_SESSION['inputs'])) {
									$_SESSION['inputs'] = 0;
								}

								if (array_key_exists('addInput', $_POST)) {
									$_SESSION['inputs']++;
								} elseif (array_key_exists('removeInput', $_POST)) {
									if ($_SESSION['inputs'] !== 0){
										$_SESSION['inputs']--;
									}
								}

								for ($i = 0; $i <= $_SESSION['inputs']; $i++) {
									echo "<input type='text' name='employee$i'>";
								}
							?>
							<button type="submit" name="addInput" value="addInput">Add Input</button>
							<button type="submit" name="removeInput" value="removeInput">Remove Input</button>
							<input type="submit" value="submit" name="submit">
							<?php
								if (isset($error)) {
									echo "<p id='errorMessage'>Please fill all inputs with available employee Ids</p>";
								}
							?>
						</form>
					</div>
				</form>
			</rosterManager>
		</contentContainer>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
</html>