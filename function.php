<?php
    $db = pg_connect("host=localhost  dbname=project user=postgres password=Meegee12");
    $query = "INSERT INTO user_ VALUES ('$_POST[roles]','$_POST[Firstname]',
    '$_POST[LastName]','$_POST[Email]','$_POST[Phone]','$_POST[Password]','$_POST[DoB]','$_POST[FamilyCode]','$_POST[Em_Contact]',
    '$_POST[Rel_Em_Contact]')";
    $result = pg_query($query); 

?>