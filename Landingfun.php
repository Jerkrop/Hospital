<?php
if(isset($_POST['log'])){
    header("Location: login.php");
    exit;
}
if(isset($_POST['reg'])){
    header("Location: register.php");
    exit;
}
?>