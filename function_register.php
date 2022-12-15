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
<<<<<<< HEAD
if (isset($_POST['reg_user'])) {
    $place = 0;
    $userrole = pg_fetch_all_columns($ret, 2);
    $id = pg_fetch_all_columns($ret, 3);
    $role = pg_fetch_all_columns($ret);
    $levels = pg_fetch_all_columns($ret, 1);
    $access = "";
    if($role[$x] == $userrole[$place]){
        $_SESSION["Access"] = $levels[$x];
        $access = $levels[$x];
    if($access == 1){
        header("Location: fam.php");
        exit;
    }
    elseif($access == 2){
        header("Location: pat.php");
        exit;
    }
    elseif($access == 3){
        header("Location: care.php");
        exit;
    }
    elseif($access == 4){
        header("Location: doc.php");
        exit;
    }
    elseif($access == 5){
        header("Location: admin.php");
        exit;
    }
    elseif($access == 6){
        header("Location: admin.php");
        exit;
    }
}



}


pg_close($dbconn)

=======
>>>>>>> 7a6e397ac6e27fd9ebcc42ad4bf89e20a608d372
?>