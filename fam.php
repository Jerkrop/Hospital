<?php require "famfun.php" ?>
<DOCTYPE html>
<html>
    <head>
    <title>Mengele Memorial</title>
    </head>
    <body>
    <form action="fam.php" method="post">
        <input type="date" name="date" value="Enter the date of the appointment">
        <input type="text" name="patid">
        <input type="text" name="famcode">
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

