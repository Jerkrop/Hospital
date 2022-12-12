<?php
    $dbconn = pg_connect("host=localhost  dbname=Hospital user=postgres password=Meegee12");
    if(isset($_POST['submit'])&&!empty($_POST['submit'])){
        
        $query = "SELECT * FROM activities"; 

        $rs = pg_query($dbconn, $query) or die("Cannot execute query: $query\n");

        while ($row = pg_fetch_row($rs)) {
          echo "$row[0] $row[1] $row[2]\n";
        }
     
}
pg_close($dbconn)

?>