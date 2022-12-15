<DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="willcss.css">
    <title>doctor</title>
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <form action="login.php" method="post">
            <input type="text" name="email" placeholder="Enter your email">
            <input type="text" name="pass" placeholder="Enter your password">
            <input type="submit" name="submit">
        </form>
        <a href="register.php">
            <p>register here</p>
        </a>
    </body>
</html>

<?php
require "loginfun.php"
?>