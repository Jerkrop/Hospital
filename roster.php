<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	$db_handle = pg_connect("host=localhost dbname=Hospital user=macowner password=password");

	$query = "Select User_.fname, User_.lname, User_.role_, Employee.PatientGroup
	From Employee
	Inner Join User_ On Employee.UserId=User_.user_id;";

	$result = pg_query($db_handle, $query);

	for ($i = 0; $i < pg_num_rows($result); $i++) {
		echo "<tr>";
		for ($j = 0; $j < pg_num_fields($result); $j++) {
			$info = pg_fetch_result($result, $i, $j);
			echo "<th>$info</td>";
		}
		echo "</tr>";
	}
?>