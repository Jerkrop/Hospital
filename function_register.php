<?php
    $dbconn = pg_connect("host=localhost  dbname=Hospital user=postgres password=Meegee12");
    if(isset($_POST['reg_user'])&&!empty($_POST['reg_user'])){

        $sql = "insert into User_(fname,lname,email,phone_num,password_,DoB)
        values('".$_POST['Firstname']."','".$_POST['LastName']."','".($_POST['Email'])."',".$_POST['Phone'].",'".$_POST['Password']."','".$_POST['DoB']."');";
        
        
        "insert into patient(emergencycontact,familycode,familyrelation)
        values('".$_POST['FamilyCode']."','".$_POST['Em_Contact']."','".($_POST['Rel_Em_Contact'])."');";      
        $ret = pg_query($dbconn,$sql );
    
}
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

?>