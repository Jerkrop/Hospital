<?php
session_start();

$db_handle = pg_connect("host=localhost dbname=Hospital user=williemdevenney password=password");

if($_SESSION['date'] != date('y-m-d')){
    echo "Appointment is not today, perscription can not be added";
}

if((isset($_POST['submit'])) and ($_SESSION['date'] == date('y-m-d'))){
    $_SESSION['comment'] = $_POST['comment'];
    $_SESSION['morning'] = $_POST['morning'];
    $_SESSION['afternoon'] = $_POST['afternoon'];
    $_SESSION['night'] = $_POST['night'];
    if(($_SESSION['morning'] == '') or (ctype_space($_SESSION['afternoon'])) == NULL){
        $morning = null;
    }
    else{
        $morning = false;
    }
    if(($_SESSION['afternoon'] == '') or (ctype_space($_SESSION['afternoon']))){
        $afternoon = null;
    }
    else{
        $afternoon = false;
    }
    if(($_SESSION['night'] == '') or (ctype_space($_SESSION['afternoon']))){
        $night = null;
    }
    else{
        $night = false;
    }
    $query = "INSERT INTO ACTIVITIES (pat_id, morn, afteroon, night, break, lunch, dinner, set_date, comment)
    VALUES (" . $_SESSION['patid'] . ", " . $morning . ", " . $afternoon . ", " . $night . ", " . "'F', 'F', 'F', " . $_SESSION['date'] . ", " . $_SESSION['comment']. ")";

    $Q = pg_query($db_handle, $query);
    echo "perscription added"
}
?>