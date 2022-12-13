<?php require "doc1fun.php" ?>
<DOCTYPE html>
<html>
    <head>
    <title>Mengele Memorial</title>
    </head>
    <body>
      <form action = 'doc1.php' method='POST'>
        <input name='name'>
        <input type='submit' name='namesearch' value='search name'>
      </form>
      <form action = 'doc1.php' method='POST'>
        <input type ='date' name='date'>
        <input type='submit' name='datesearch' value='search date'>
      </form>
    <table>
  <tr>
    <th>Patient's name</th>
    <th>Date</th>
    <th>Comment</th>
    <th>Morning Medicine</th>
    <th>Afternoon Medicine</th>
    <th>Night Medicine</th>
    <th></th>
  </tr>
  <?php
    for($a = 0; $a < count($patname); $a++){
      if($date[$a] <= date('Y-m-d')){
      echo "<tr>
      <td><form id='" . $a . "' action = 'doc1.php' method='POST'></form>
      <input form='" . $a . "' name='id' value='" . $patid[$a] . "' readonly='readonly' style='visibility:hidden'>
      <input form='" . $a . "' name='name' value='" . $patname[$a] . "' readonly='readonly'></td>
      <td><input form='" . $a . "' name='date' type='date' value='" . $date[$a] . "' readonly='readonly'></td>
      <td><input form='" . $a . "' name='comment' value='" . $comment[$a] . "' readonly='readonly'></td>
      <td><input form='" . $a . "' name='morning' value='" . $morn[$a] . "' readonly='readonly'></td>
      <td><input form='" . $a . "' name='afternoon' value='" . $aft[$a] . "' readonly='readonly'></td>
      <td><input form='" . $a . "' name='night' value='" . $night[$a] . "' readonly='readonly'></td>
      <td><input form='" . $a . "' type='submit' name='submit' value = 'patient page'></tr>";
      }
    }
  ?>
  </table>
  <form action = 'doc1.php' method='POST'>
        <input type='date' name='lastdate'>
        <input type='submit' name='datetill'>
      </form>
  <table>
  <tr>
    <th>Patient</th>
    <th>Date</th>
  </tr>
  <?php
    for($a = 0; $a < count($patname); $a++){
      if($date[$a] > date('Y-m-d')){
        if(isset($_POST['datetill'])){
          if($date[$a] <= $_POST['lastdate']){
            echo "<tr>
                  <td><p>" . $patname[$a] . "</p></td>
                  <td><p>'" . $date[$a] . "' <p></td></tr>";
          }
        }
      }
    }
  ?>
  
    </table>
    </body>
</html>