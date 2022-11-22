<?php
	if (!isset($_SESSION)) {
		session_start();
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
		<h1>Josef Mengele Memorial</h1>
		<ion-icon name="person-circle-outline"></ion-icon>
	</header>
	<contentContainer>
		<sidebar>
			<ul id="sidebarList">
				<li>Home</li>
				<li>Roster</li>
			</ul>
		</sidebar>
		<roster>
			<table id="rosterTable">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Role</th>
					<th>Group #</th>
				</tr>
				<?php require "roster.php"?>
			</table>
		</roster>
	</contentContainer>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>