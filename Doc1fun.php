<?php
session_start();
date_default_timezone_set('America/New_York');

$db_handle = pg_connect("host=localhost dbname=Hospital user=williemdevenney password=password");
$docid = $_SESSION['id'];

if(isset($_POST['datesearch'])){
    $query = "SELECT scrip_date, pat_id
            FROM appointments
            WHERE doc_id =" . $docid . " AND scrip_date = '" . $_POST['date'] . "'";
    $apps = pg_query($db_handle, $query);
}
else{
    $query = "SELECT scrip_date, pat_id
            FROM appointments
            WHERE doc_id =" . $docid;
    $apps = pg_query($db_handle, $query);
}

$query = "SELECT user_id, fname, lname
            FROM user_
            WHERE role_ = 'patient'";
$patnames = pg_query($db_handle, $query);

$query = "SELECT *
            FROM activities";
$acts = pg_query($db_handle, $query);

$date = pg_fetch_all_columns($apps);
$apppat = pg_fetch_all_columns($apps, 1);
$patids = pg_fetch_all_columns($patnames);
$patfirst = pg_fetch_all_columns($patnames, 1);
$patlast = pg_fetch_all_columns($patnames, 2);
$actpat = pg_fetch_all_columns($acts);
$morns = pg_fetch_all_columns($acts, 1);
$afts = pg_fetch_all_columns($acts, 2);
$nits = pg_fetch_all_columns($acts, 3);
$breaks = pg_fetch_all_columns($acts, 4);
$luns = pg_fetch_all_columns($acts, 5);
$dins = pg_fetch_all_columns($acts, 6);
$actdate = pg_fetch_all_columns($acts, 7);
$actcom = pg_fetch_all_columns($acts, 8);

$comment = [];
$patname = [];
$morn = [];
$aft = [];
$night = [];
$patid = [];
for($i = 0; $i < count($date); $i++){
    $skip = 0;
    for($x = 0; $x < count($patids); $x++){
        if($apppat[$i] == $patids[$x]){
            if(isset($_POST['namesearch'])){
                if($patfirst[$x].$patlast[$x] == $_POST['name']){
                    array_push($patname, $patfirst[$x].$patlast[$x]);
                    array_push($patid, $patids[$x]);
                    break;
                }
            }
            else{
                array_push($patname, $patfirst[$x] . " " . $patlast[$x]);
                array_push($patid, $patids[$x]);
                break;
            }
        }
        if($x+1 == count($patids)){
            $skip=1;
        }
    }
    if((in_array($apppat[$i], $actpat)) and ($skip != 1)){
        for($x = 0; $x < count($actpat); $x++){
            if(($apppat[$i] == $actpat[$x])and($date[$i] == $actdate[$x])){
                array_push($comment, $actcom[$x]);
                if($morns[$x] != ''){
                    array_push($morn, 'yes');
                }
                if($afts[$x] != ''){
                    array_push($aft, 'yes');
                }
                if($nits[$x] != ''){
                    array_push($night, 'yes');
                }
                break;
            }
            if($x+1 == count($actpat)){
                array_push($comment, '');
                array_push($morn, '');
                array_push($aft, '');
                array_push($night, '');
            }
        }
    }
    else{
        array_push($comment, '');
        array_push($morn, '');
        array_push($aft, '');
        array_push($night, '');
    }
}
if(isset($_POST['submit'])){
    $_SESSION['patid'] = $_POST['id'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['comment'] = $_POST['comment'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['morning'] = $_POST['morning'];
    $_SESSION['afternoon'] = $_POST['afternoon'];
    $_SESSION['night'] = $_POST['night'];

    header("Location: doc2.php");
    exit;
}

?>