<?php
$db_handle = pg_connect("host=localhost dbname=Project user=postgres password=Meegee12");

$result = pg_query($db_handle, $query);