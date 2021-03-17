<?php
require '../../model/PDO.php';
require 'header.php';

$pdo = openConnection();

$resultStudents= $pdo->query('select * from person
    inner join student s on person.ID = s.personID');
print_r($resultStudents);
//pre_r($resultStudents->mysql_fetch_row());
?>
<div class="row justify-content-center">
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Class</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <?php
        while($row=$resultStudents->fetchAll()):
            ?>
        <?php endwhile; // end of the loop. ?>

        <tr>
            <td><?php echo $row ['name']; ?> </td>
            <td><?php echo $row ['las Name']; ?> </td>
            <td><?php echo $row ['class']; ?> </td>
            <td>
                <!-- <a href="index.php?edit=<?php echo $row ["id"]; ?>"
                   class="btn btn-info">Edit</a>
                <a href="overviewStudent.php?delete=<?php echo $row ["id"]; ?>"
                   class="btn btn-danger">Delete</a> -->>
            </td>

        </tr>
    </table>
</div>