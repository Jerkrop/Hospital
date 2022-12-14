<?php
require 'doc2fun.php'
?>
<DOCTYPE html>
<html>
    <head>
    <title>Mengele Memorial</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Date</th>
                <th>comment</th>
                <th>Morning Med</th>
                <th>Afternoon Med</th>
                <th>Night Med</th>
            </tr>
            <tr>
                <th><?php echo $_SESSION['date']; ?></th>
                <th><?php echo $_SESSION['comment']; ?></th>
                <th><?php echo $_SESSION['morning']; ?></th>
                <th><?php echo $_SESSION['afternoon']; ?></th>
                <th><?php echo $_SESSION['night']; ?></th>
            </tr>
        </table>
        <table>
            <tr>
                <th>comment</th>
                <th>Morning Med</th>
                <th>Afternoon Med</th>
                <th>Night Med</th>
            </tr>
            <tr>
                <td><form id='1' action='doc2.php' method='POST'></form><input form='1' name='comment'></td>
                <td><input type = 'checkbox' form='1' name='morning'></td>
                <td><input type = 'checkbox' form='1' name='afternoon'></td>
                <td><input type = 'checkbox' form='1' name='night'></td>
            </tr>
        </table>
        <input form='1' type='submit' name='submit' value='add perscription'>
        <input form='1' type='submit' name='clear' value='clear'>
    </body>
</html>

