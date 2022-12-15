<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		foreach ($_POST as $key => $value) {
			$userId = substr($key, 1);

		for ($i = 0; $i <= 5; $i++) {
			if (isset($_POST["$i$userId"])) {
				${'value'.$i} = 'TRUE';
			} else {
				${'value'.$i} = 'FALSE';
			}
		}

			$db_handle = pg_connect("host=localhost dbname=Hospital user=macowner password=password");

			$query = "Update activities
			Set morn = $value0, afternoon = $value1, night=$value2, break = $value3, lunch=$value4, dinner=$value5
			Where pat_id = $userId;";

			pg_query($db_handle, $query);
		}
	}

	function makeTable() {
		$db_handle = pg_connect("host=localhost dbname=Hospital user=macowner password=password");

		$query = "Select user_.user_id, user_.fname, user_.lname, activities.morn, activities.afternoon, activities.night, activities.break, activities.lunch, activities.dinner, patient.patientgroup
		From activities, user_
		Inner Join patient On user_.user_id = patient.userid
		Where patient.patientgroup=4;";

		$result = pg_query($db_handle, $query);

		for ($i = 0; $i < pg_num_rows($result); $i++) {
			$patientInfo = [];
			echo "<tr class='patientRow'>";
			for ($j = 0; $j < pg_num_fields($result); $j++) {
				$info = pg_fetch_result($result, $i, $j);
				array_push($patientInfo, $info);
			}
			echo "<th class='patient'>$patientInfo[1] $patientInfo[2]</th>";
			$counter = 0;
			for ($k = 3; $k <= count($patientInfo) - 2; $k++) {
				if ($patientInfo[$k] == "t") {
					echo "<th class='patient'><input type='checkbox' name='$counter$patientInfo[0]' checked></th>";
				} else {
					echo "<th class='patient'><input type='checkbox' name='$counter$patientInfo[0]'></th>";
				}
				$counter++;
			}
			echo "</tr>";
		}
	}
?>