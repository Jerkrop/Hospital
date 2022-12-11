<?php
    $dbconn = pg_connect("host=localhost  dbname=Hospital user=postgres password=Meegee12");
    if(isset($_POST['reg_user'])&&!empty($_POST['reg_user'])){

        $sql = "insert into User_(fname,lname,email,phone_num,password_,DoB)
        values('".$_POST['Firstname']."','".$_POST['LastName']."','".($_POST['Email'])."',".$_POST['Phone'].",'".$_POST['Password']."','".$_POST['DoB']."');";
        
        
      
    
}

pg_close($dbconn)
?>