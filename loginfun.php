<?php
if(session_status() == PHP_SESSION_ACTIVE){
    session_destroy();
}
session_start();

$db_handle = pg_connect("host=localhost dbname=Hospital user=williemdevenney password=password");

$query = " SELECT email, password_, role_, user_id
            FROM user_ ";
$user = pg_query($db_handle, $query);

$query = " SELECT employeerole, accesslevel
            FROM roles";
$roles = pg_query($db_handle, $query);

$email = false;
$pass = false;

if(isset($_POST['submit'])){
    $place = 0;
    $emails = pg_fetch_all_columns($user);
    $userrole = pg_fetch_all_columns($user, 2);
    $id = pg_fetch_all_columns($user, 3);
    $role = pg_fetch_all_columns($roles);
    $levels = pg_fetch_all_columns($roles, 1);
    $access = "";
    if(isset($_POST['email'])){
        for($x = 0; $x < count($emails); $x++){
            if($emails[$x] == $_POST['email']){
                $email = true;
                $place = $x;
                $_SESSION['id'] = $id[$x];
            }
        }
        if($email == false){
            echo "This email is not valid";
        }
    }
    else{
        echo "please enter a password";
    }
    if(isset($_POST['pass'])){
        $passes = pg_fetch_all_columns($user, 1);
        if($passes[$place] == $_POST['pass']){
            $pass = true;
        }
        else{
            echo "This password is not valid";
        }
    }
    else{
        echo "please enter a password";
    }
    if($email == true and $pass == true){
        for($x = 0; $x < count($role); $x++){
            if($role[$x] == $userrole[$place]){
                $query = " SELECT Approved
                            FROM user_ 
                            WHERE user_id =" . $_SESSION['id'];
                $Q = pg_query($db_handle, $query);
                $approval = pg_fetch_all_columns($Q);
                if($approval[0] == 't'){
                    $_SESSION["Access"] = $levels[$x];
                    $access = $levels[$x];
                }
                else{
                    echo 'not approved';
                }

            }
        }
    }
    if($access == 1){
        header("Location: fam.php");
        exit;
    }
    elseif($access == 2){
        header("Location: pat.php");
        exit;
    }
    elseif($access == 3){
        header("Location: caregiver.php");
        exit;
    }
    elseif($access == 4){
        header("Location: doc1.php");
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
?>