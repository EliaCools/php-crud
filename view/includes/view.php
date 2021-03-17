<?php
//require 'model/PDO.php';
require '../../index.php';
require 'Model/StudentLoader.php';

$pdo = openConnection();
$resultStudents= $pdo->query('select * from person
    inner join student s on person.ID = s.personID');
$students = new StudentLoader();

?>
require 'header.php';


        <table class="table table-striped table-wide">
    <thead>
        <tr>
            <th width="40%">Sport</th>
            <th width="40%">Name</th>
            <td colspan="2" width="20%"></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($students->fetch() AS $student):?>
        <tr>
            <td><?php echo htmlspecialchars($student['firstName'] . $student['lastName'])?></td>
<!--            <td>--><?php //echo htmlspecialchars($user['name'])?><!--</td>-->
            <td>
                <a href="?id=<?php echo $student['id']?>" class="btn btn-primary">Update</a>
            </td>
            <td>
                <form method="post">
                    <input type="hidden" name="ID" value="<?php echo $student['ID']?>" />
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>






<?php
require 'footer.php';

