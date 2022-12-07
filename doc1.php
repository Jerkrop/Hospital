<?php require "doc1fun.php" ?>
<DOCTYPE html>
<html>
    <head>
    <title>Mengele Memorial</title>
    </head>
    <body>
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

  <?php
  
    for($a = 0; $a < count($patname); $a++){
      echo "<tr><form action = 'doc1.php' method='POST'>
      <td><input name='name' value='" . $patname[$a] . "' readonly='readonly'></td>
      <td><input name='date' value='" . $date[$a] . "' readonly='readonly'></td>
      <td><input name='comment' value='" . $comment[$a] . "' readonly='readonly'></td>
      <td><input name='morning' value='" . $morns[$a] . "' readonly='readonly'></td>
      <td><input name='afternoon' value='" . $afts[$a] . "' readonly='readonly'></td>
      <td><input name='night' value='" . $nights [$a] . "' readonly='readonly'></td>
      <td><input type='submit' name='submit' value = 'patient page'>";
    }
  ?>
  
    </table>
    </body>
</html>