<?php
	if (!isset($_SESSION)) {
		session_start();
	}
	$result = "0000-00-00";

	function makeTable(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (empty($_POST['dateSelector'])){
				exit();
			}
			$date = $_POST["dateSelector"];
			$date = "'$date'";
			
			$db_handle = pg_connect("host=localhost dbname=Hospital user=macowner password=password");
			
			$query = "Select User_.fname, User_.lname, User_.role_, Employee.PatientGroup
			From Employee
			Join User_ On Employee.UserId=User_.user_id
			Join roster On Employee.UserId=roster.employee_id
			Where roster.date_=$date";
			
			$result = pg_query($db_handle, $query);

			for ($i = 0; $i < pg_num_rows($result); $i++) {
				echo "<tr class='employee'>";
				for ($j = 0; $j < pg_num_fields($result); $j++) {
					$info = pg_fetch_result($result, $i, $j);
					echo "<th class='employee'>$info</td>";
				}
				echo "</tr>";
			}
		}
	}
?>