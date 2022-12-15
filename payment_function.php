<?php
    $dbconn = pg_connect("host=localhost  dbname=Hospital user=macowner password=password");
$v = false;
if (isset($_POST['submit1'])) {

    $query = "SELECT totaldue FROM patient";

    $ret = pg_query($dbconn,$query);
    $x = pg_fetch_all_columns($ret);
    echo $x [0];
    $v = true;
}
if ($v= true && isset($_POST['submit2'])) {
    $y = $_POST['NewPayment'];
    $z = $x [0] + $y;
    $query2 = " UPDATE patient SET totaldue = $z";
    $ret2 = pg_query($dbconn,$query2);

}

pg_close($dbconn)
?>