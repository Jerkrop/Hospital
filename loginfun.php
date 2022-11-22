<?php


$db_handle = pg_connect("host=localhost dbname=Hospital user=macowner password=password");

$query = " SELECT email, password_
            FROM user_ ";

$result = pg_query($db_handle, $query);





$emails = ["cool",1,2,3,4,"5"];
$passes = ["cool",1,2,3,4,"5"];
$email = false;
$pass = false;


if(isset($_POST['submit'])){
    if(isset($_POST['email'])){
        for($x = 0; $x < count($emails); $x++){
            if($emails[$x] == $_POST['email']){
                $email = true;
            }
            echo $emails[$x];
        }
        if($email == false){
            echo "This email is not valid";
        }
    }
    else{
        echo "please enter a password";
    }
    if(isset($_POST['pass'])){
        for($x = 0; $x < count($emails); $x++){
            if($passes[$x] == $_POST['pass']){
                $pass = true;
            }
            echo $passes[$x];
        }
        if($pass == false){
            echo "This password is not valid";
        }
    }
    else{
        echo "please enter a password";
    }
    if($email == true and $pass == true){
        echo "this works";
    }
}
?>