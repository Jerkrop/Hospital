<?php
    $dbconn = pg_connect("host=localhost  dbname=Hospital user=postgres password=Meegee12");
    if(isset($_POST['reg_user'])&&!empty($_POST['reg_user'])){

        $sql = "insert into User_(fname,lname,email,phone_num,password_,DoB)
        values('".$_POST['Firstname']."','".$_POST['LastName']."','".($_POST['Email'])."',".$_POST['Phone'].",'".$_POST['Password']."','".$_POST['DoB']."');";
        
        
        "insert into patient(emergencycontact,familycode,familyrelation)
        values('".$_POST['FamilyCode']."','".$_POST['Em_Contact']."','".($_POST['Rel_Em_Contact'])."');";      
        $ret = pg_query($dbconn,$sql );
    
}



pg_close($dbconn)

?>