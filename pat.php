<?php require "patfun.php" ?>
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
    <sidebar class='sidebar'>
      <div id="sidebarContainer">
        <ul id="sidebarList">
        <a href="login.php">
          <li>logout</li>
        </a>
        <a href="pat.php">
          <li>Home</li>
        </a>
        <a href="roster.view.php">
          <li>Roster</li>
        </a>
        </ul>
      </div>
    </sidebar>
        <p>Your ID:<?php echo $patid;?></p>
        <p>Your Name:<?php echo $patname;?></p>
    <form action="pat.php" method="post">
        <input type="date" name="date" value="<?php echo $_SESSION['date'];?>">
        <input type="submit" name="submit">
    </form>
    <table>
  <tr>
    <th>Doctor's name</th>
    <th>Appointment</th> 
    <th>Caregiver's name</th>
    <th>Morning Medicine</th>
    <th>Afternoon Medicine</th>
    <th>Night Medicine</th>
    <th>Breakfast</th>
    <th>Lunch</th>
    <th>Dinner</th>
  </tr>
  <tr>
    <td><?php echo $docname; ?></td>
    <td><?php echo $appointment;?></td> 
    <td><?php echo $caregiver;?></td>
    <td><?php echo $morning;?></td>
    <td><?php echo $afternoon; ?></td>
    <td><?php echo $night; ?></td>
    <td><?php echo $breakfast; ?></td>
    <td><?php echo $lunch; ?></td>
    <td><?php echo $dinner; ?></td>
  </tr>
    </table>
    </body>
</html>