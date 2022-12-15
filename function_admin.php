<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dbconn = pg_connect("host=localhost  dbname=Hospital user=macowner password=password");

    $date = $_POST["Date"];
    $date = "'$date'";
    $query = "SELECT id, scrip_date, activities.pat_id, morn, afternoon, night, break, lunch, dinner, user_id, fname, lname FROM activities JOIN appointments on activities.pat_id = appointments.doc_id JOIN user_ on activities.pat_id = user_id Where scrip_date = $date";

    $result = pg_query($dbconn, $query);

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
                echo "<th class='patient'><input type='checkbox'  onclick = 'return false' name='$patientInfo[0]' checked></th>";
            } else {
                echo "<th class='patient'><input type='checkbox' onclick = 'return false' name='$patientInfo[0]'></th>";
            }
        }
        if (isset($_POST['submit']) && !empty($_POST['submit'])) {
        }
    }
    pg_close($dbconn);
}
