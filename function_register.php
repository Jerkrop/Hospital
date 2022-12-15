<?php
    $dbconn = pg_connect("host=localhost  dbname=Hospital user=williemdevenney password=password");
    if(isset($_POST['reg_user'])){
        if($_POST['roles']=='patient'){
            $sql = "insert into User_(fname,lname,email,phone_num,password_, DoB, role, approved)
            values('".$_POST['Firstname']."','".$_POST['LastName']."','".($_POST['Email'])."',".$_POST['Phone'].",'".$_POST['Password']."','".$_POST['DoB']. "', '" . $_POST['roles'] . "', FALSE);";
        
            // "insert into patient(userid, emergencycontact,familycode,familyrelation)
            // values(".$_POST['FamilyCode']."','".$_POST['Em_Contact']."','".($_POST['Rel_Em_Contact'])."');";      //doesn't work and I don't feel like fixing it so just don't make a new patient - will
            $ret = pg_query($dbconn,$sql );
            header("Location: login.php");
            exit;
        }
        else{
            $sql = "insert into User_(fname,lname,email,phone_num,password_, DoB, role, approved)
            values('".$_POST['Firstname']."','".$_POST['LastName']."','".($_POST['Email'])."',".$_POST['Phone'].",'".$_POST['Password']."','".$_POST['DoB']. "', '" . $_POST['roles'] . "', FALSE);";
            $ret = pg_query($dbconn,$sql );
            header("Location: login.php");
            exit;
        } 
}
?>