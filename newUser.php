<?php
	
	function makeUserTable() {
		$db_handle = pg_connect("host=localhost dbname=Hospital user=macowner password=password");

		$query = "Select fname, lname, role_, approved
		From user_
		Where approved = 'f';";

		$result = pg_query($db_handle, $query);

		for ($i = 0; $i < pg_num_rows($result); $i++) {
			echo "<tr class='user'>";
			$newUser = [];
			for ($j = 0; $j < pg_num_fields($result); $j++) {
				$info = pg_fetch_result($result, $i, $j);
				array_push($newUser, $info);
			}
			echo "<th class='userName'>$newUser[0] $newUser[1]</th>";
			echo "<th class='userRole'>$newUser[2]</th>";
			echo "<th class='userApproved'><input type='checkbox' name='$newUser[1]check'></th>";
			echo "</tr>";
		}
	}

	function makeRolestable() {
		$db_handle = pg_connect("host=localhost dbname=Hospital user=macowner password=password");

		$query = "Select * From roles";

		$result = pg_query($db_handle, $query);

		for ($i = 0; $i < pg_num_rows($result); $i++) {
			echo "<tr class='role'>";
			for ($j = 0; $j < pg_num_fields($result); $j++) {
				$info = pg_fetch_result($result, $i, $j);
				echo "<th class='role'>$info</th>";
			}
			echo "</tr>";
		}

	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$db_handle = pg_connect("host=localhost dbname=Hospital user=macowner password=password");

		if (isset($_POST['submitRole'])) {
			$roleName = $_POST['roleName'];
			$accessLevel = $_POST['accessLevel'];

			$query = "Insert Into roles (userrole, accesslevel)
			Values ('$roleName', $accessLevel);";

			$result = pg_query($db_handle, $query);

		} elseif (isset($_POST['submitAccount'])) {
			foreach ($_POST as $name => $value) {
				$name = substr($name, 0, -5);
				
				$query = "Update user_
				Set approved = TRUE WHERE lname = '$name'";

				$result = pg_query($db_handle, $query);
			}
		}
	}

?>