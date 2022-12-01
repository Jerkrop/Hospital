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
		<a id="accountIcon" href="#"><ion-icon name="person-circle-outline"></ion-icon></a>
	</header>
	<contentContainer>
		<sidebar>
			<form action="roster.php" method="post" id="sidebar">
				<ul id="sidebarList">
					<a href="#"><li>Home</li></a>
					<a href="roster.view.php"><li>Roster</li></a>
				</ul>
			</form>
		</sidebar>
		<roster>
			<h1 id="rosterHeader">Roster</h1>
			<table id="rosterTable">
				<tr>
					<th class="headRow">First Name</th>
					<th class="headRow">Last Name</th>
					<th class="headRow">Role</th>
					<th class="headRow">Group #</th>
				</tr>
				<?php require "roster.php"?>
			</table>
		</roster>
	</contentContainer>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>