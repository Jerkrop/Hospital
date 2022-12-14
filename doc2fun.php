<?php
session_start();
date_default_timezone_set('America/New_York');

$db_handle = pg_connect("host=localhost dbname=Hospital user=williemdevenney password=password");

echo $_SESSION['date'];
echo date('Y-m-d');

if($_SESSION['date'] != date('Y-m-d')){
    echo "Appointment is not today, perscription can not be added";
}

if((isset($_POST['submit'])) and ($_SESSION['date'] == date('Y-m-d'))){
    $_SESSION['comment'] = $_POST['comment'];
    if(isset($_POST['morning'])){
        $morning = "FALSE";
        $_SESSION['morning'] = 'yes';
    }
    else{
        $morning = 'NULL';
        $_SESSION['morning'] = '';
    }
    if(isset($_POST['afternoon'])){
        $afternoon = "FALSE";
        $_SESSION['afternoon'] = 'yes';
    }
    else{
        $afternoon = 'NULL';
        $_SESSION['afternoon'] = '';
    }
    if(isset($_POST['night'])){
        $night = "FALSE";
        $_SESSION['night'] = 'yes';
    }
    else{
        $night = 'NULL';
        $_SESSION['night'] = '';
    }
    $query = "DELETE FROM ACTIVITIES WHERE pat_id =" . $_SESSION['patid'];
    $Q = pg_query($db_handle, $query);

    $Q = [];
    array_push($Q, $_SESSION['patid']);
    array_push($Q, $_SESSION['comment']);
    array_push($Q, date('Y-m-d'));
    array_push($Q, $morning);
    array_push($Q, $afternoon);
    array_push($Q, $night);



    $query = "INSERT INTO ACTIVITIES(pat_id, morn, afternoon, night, break, lunch, dinner, set_date, comment)
    VALUES(" . $Q[0] . ", " . $Q[3] . ", " . $Q[4] . ", " . $Q[5] . ", FALSE, FALSE, FALSE, '" . $Q[2] . "', '" . $Q[1] . "')";
    $Q = pg_query($db_handle, $query);


    echo "perscription added";
}
?>