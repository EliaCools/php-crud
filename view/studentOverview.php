<?php

require 'view/includes/header.php';
var_dump($_POST);
?>

<div class="justify-content-center">
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <?php
        $studentLoader = new studentLoader;
        foreach ($studentLoader->fetchAllStudents() as $student): ?>

        <tr>
            <td><?php echo $student["firstName"] ; ?> </td>
            <td><?php echo $student["lastName"]; ?> </td>
            <td><?php echo $student["email"]; ?> </td>
            <td>
                <a href="?page=student&action=edit&ID=<?php echo $student['studentID']  ?>"
                   class="btn btn-info">Edit</a>
                <form method="post" class=" d-inline ">
                    <input type="hidden" name="id" value=<?php echo $student ['studentID']?> >
                    <input type="submit" name="delete" value="Delete" class="btn btn-secondary ">
                </form>
                <a href="?page=student&action=details&ID=<?php echo $student ['studentID']; ?>"
                   class="btn btn-success"">Details</a>

            </td>
        </tr>
        <?php
            if(isset($_POST['delete'])){
                $studentLoader->deleteStudent();
            header("Location:?page=student&action=overview");
            exit();}
        endforeach;

        ?>
    </table>
    <a href="?page=student&action=newStudent" class="btn btn-success">add new student</a>

</div>
