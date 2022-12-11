<?php
    $dbconn = pg_connect("host=localhost  dbname=Hospital user=postgres password=Meegee12");
    if(isset($_POST['submit'])&&!empty($_POST['submit'])){

        $sql = "insert into actvities(morn,afternoon,night,break,lunch,dinner)
        values('".$_POST['Morn_med']."','".$_POST['Afternoon_med']."','".($_POST['Night_med'])."',".$_POST['Break'].",'".$_POST['Lunch']."','".$_POST['Dinner']."');";
        
        $query = "SELECT * FROM actvities"; 

        $rs = pg_query($dbconn, $query) or die("Cannot execute query: $query\n");

        while ($row = pg_fetch_row($rs)) {
          echo "$row[0] $row[1] $row[2]\n";
        }
}
pg_close($dbconn)

?>