<?php
    $dbconn = pg_connect("host=localhost  dbname=Hospital user=macowner password=password");
    if(isset($_POST['search']))
    {
        $filtervalues = $_POST['search'];
        $query = "SELECT userid FROM patient WHERE CONCAT(userid,emergencycontact,familycode,familyrelation,patientgroup,totaldue,administrationdate) LIKE '%$filtervalues%' ";
        $query_run = pg_query($dbconn, $query);
        $query2 = "SELECT * FROM patient";
        $query_run2 = pg_query($dbconn, $query2);
        
        
        if(pg_num_rows($query_run) > 0)
        {
            foreach($query_run as $items)
            {
                ?>
                <td><?= $items['id']; ?></td>
                                                    <td><?= $items['userid']; ?></td>
                                                    <td><?= $items['emergencycontact']; ?></td>
                                                    <td><?= $items['familycode']; ?></td>
                                                    <td><?= $items['familyrelation']; ?></td>
                                                    <td><?= $items['patientgroup']; ?></td>
                                                    <td><?= $items['totaldue']; ?></td>
                                                    <td><?= $items['administrationdate']; ?></td>
                <?php
            }
        }
        else
        {
            ?>
                <tr>
                    <td colspan="4">No Record Found</td>
                </tr>
            <?php
        }
        $query2 = "SELECT * FROM patient";
    $result = pg_query($dbconn, $query2);

    
    $i = 0;
    echo '<html><body><table><tr>';
    while ($i < pg_num_fields($result))
    {
        $fieldName = pg_field_name($result, $i);
        echo '<td>' . $fieldName . '</td>';
        $i = $i + 1;
    }
    echo '</tr>';
    $i = 0;
    
    while ($row = pg_fetch_row($result)) 
    {
        echo '<tr>';
        $count = count($row);
        $y = 0;
        while ($y < $count)
        {
            $c_row = current($row);
            echo '<td>' . $c_row . '</td>';
            next($row);
            $y = $y + 1;
        }
        echo '</tr>';
        $i = $i + 1;
    }
    pg_free_result($result);
    
    echo '</table></body></html>';
  
    

    
}
  
 pg_close($dbconn)
?>