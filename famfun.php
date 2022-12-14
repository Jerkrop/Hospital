<?php
session_start();
$db_handle = pg_connect("host=localhost dbname=Hospital user=williemdevenney password=password");
$docname = '';
$appointment = '';
$caregiver = '';
$morning = '';
$afternoon = '';
$night = '';
$breakfast = '';
$lunch = '';
$dinner = '';

$query = "SELECT *
            FROM appointments";
$apps = pg_query($db_handle, $query);

$query = "SELECT user_id, fname, lname
            FROM user_
            WHERE role_ = 'doctor'";
$docs = pg_query($db_handle, $query);

$query = "SELECT user_id, fname, lname
            FROM user_
            WHERE role_ = 'caregiver'";
$cares = pg_query($db_handle, $query);

$query = "SELECT userid, familycode, PatientGroup
            FROM patient";
$pat = pg_query($db_handle, $query);

$query = "SELECT UserId, PatientGroup
            FROM employee";
$caregroups = pg_query($db_handle, $query);

$query = "SELECT *
            FROM activities";
$acts = pg_query($db_handle, $query);

if(isset($_POST['submit'])){
    $dates = pg_fetch_all_columns($apps, 1);
    $appids = pg_fetch_all_columns($apps, 3);
    $patids = pg_fetch_all_columns($pat);
    $famcodes = pg_fetch_all_columns($pat, 1);
    $patgroup = pg_fetch_all_columns($pat, 2);
    $actids = pg_fetch_all_columns($acts);
    $morns = pg_fetch_all_columns($acts, 1);
    $afts = pg_fetch_all_columns($acts, 2);
    $nits = pg_fetch_all_columns($acts, 3);
    $breaks = pg_fetch_all_columns($acts, 4);
    $luns = pg_fetch_all_columns($acts, 5);
    $dins = pg_fetch_all_columns($acts, 6);
    $appdoc = pg_fetch_all_columns($apps, 2);
    $docids = pg_fetch_all_columns($docs);
    $docfirst = pg_fetch_all_columns($docs, 1);
    $doclast = pg_fetch_all_columns($docs, 2);
    $careids = pg_fetch_all_columns($cares);
    $carefirst = pg_fetch_all_columns($cares, 1);
    $carelast = pg_fetch_all_columns($cares, 2);
    $caregroup = pg_fetch_all_columns($caregroups, 1);
    $caregroupid = pg_fetch_all_columns($caregroups);
    if(in_array($_POST['date'], $dates) and in_array($_POST['patid'], $appids) and in_array($_POST['famcode'], $famcodes)){
        for($i = 0; $i < count($dates); $i++){
            if(($dates[$i] == $_POST['date']) and ($appids[$i] == $_POST['patid'])){
                for($x = 0; $x < count($patids); $x++){
                    if(($patids[$x] == $_POST['patid']) and ($famcodes[$x] == $_POST['famcode'])){
                        $appointment = 'yes';
                        for($y = 0; $y < count($actids); $y++){
                            if($actids[$y] == $_POST['patid']){
                                echo $morns[$y];
                                echo $afts[$y];
                                echo $nits[$y];
                                if($morns[$y] == 't'){
                                    $morning = 'yes';
                                }
                                else{
                                    $morning = 'no';
                                }
                                if($afts[$y] == 't'){
                                    $afternoon = 'yes';
                                }
                                else{
                                    $afternoon = 'no';
                                }
                                if($nits[$y] == 't'){
                                    $night = 'yes';
                                }
                                else{
                                    $night = 'no';
                                }
                                if($breaks[$y] == 't'){
                                    $breakfast= 'yes';
                                }
                                else{
                                    $breakfast = 'no';
                                }
                                if($luns[$y] == 't'){
                                    $lunch = 'yes';
                                }
                                else{
                                    $lunch = 'no';
                                }
                                if($dins[$y] == 't'){
                                    $dinner = 'yes';
                                }
                                else{
                                    $dinner = 'no';
                                }
                                break;
                            }
                        }
                        for($z = 0; $z < count($docids); $z++){
                            if($docids[$z] == $appdoc[$i]){
                                $docname = $docfirst[$z] . $doclast[$z];
                                break;
                            }
                        }
                        for($z = 0; $z < count($caregroupid); $z++){
                            if($caregroup[$z] == $patgroup[$x]){
                                for($w = 0; $w < count($careids); $w++)
                                {
                                    if($caregroupid[$z] = $careids[$w]){
                                        $caregiver = $carefirst[$w] . $carelast[$w];
                                        break;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    else{
        echo "does not match any records";
    }
}
?>