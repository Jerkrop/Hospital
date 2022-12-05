<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	if (isset($_POST['submit'])) {

		$db_handle = pg_connect("host=localhost dbname=Hospital user=macowner password=password");

		$date = $_POST['dateSelector'];
		$date = "'$date'";

		
		for ($i = 0; $i <= $_SESSION['inputs']; $i++){
			$employeeId = $_POST["employee$i"];

			$query = "Select Count(userid)
			From employee Where userid = $employeeId";

			$result = pg_query($db_handle, $query);

			for ($j = 0; $j < pg_num_rows($result); $j++) {
				for ($k = 0; $k < pg_num_fields($result); $k++) {
					$info = pg_fetch_result($result, $j, $k);
				}
			}

			if ($info == 0) {
				$error = true;
			} else {
				$query = "Insert Into roster (date_, employee_id)
				Values ($date, $employeeId)";
	
				$result = pg_query($db_handle, $query);

				$_SESSION['inputs'] = 0;
			}


		}
	}
?>