<?php
    $dbconn = pg_connect("host=localhost  dbname=Hospital user=postgres password=Meegee12");
    if(isset($_POST['search']))
    {
        $filtervalues = $_POST['search'];
        $query = "SELECT userid FROM patient WHERE CONCAT(userid,emergencycontact,familycode,familyrelation,patientgroup,totaldue,administrationdate) LIKE '%$filtervalues%' ";
<<<<<<< HEAD
    $query1 = "SELECT * FROM patient";
=======
>>>>>>> 095de30d75de6becd600beb9ef3fe0a3b382335e
        $query_run = pg_query($dbconn, $query);

        if(pg_num_rows($query_run) > 0)
        {
            foreach($query_run as $items)
            {
                ?>
                <td><?= $items['id']; ?></td>
                                                    <td><?= $items['userid']; ?></td>
                                                    <td><?= $items['emergencycontact']; ?></td>
                                                    <td><?= $items['familycode']; ?></td>
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
<<<<<<< HEAD
        $query2 = "SELECT * FROM patient";
    $query_run2 = pg_query($dbconn, $query2);
    }
  
 pg_close($dbconn)
=======
    }
 
>>>>>>> 095de30d75de6becd600beb9ef3fe0a3b382335e
?>