<?php

require 'view/includes/header.php';
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
                <a href="?page=student&action=overview&delete=<?php echo $student ['studentID']; ?>"
                   class="btn btn-danger">Delete</a>
                <a href="?page=student&action=details&ID=<?php echo $student ['studentID']; ?>"
                   class="btn btn-success"">Details</a>

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <form method="post" action="/model/export.php">
        <input type="submit" name="studentExport" value="CSV Export" class="btn btn-secondary">
    </form>
    <a href="?page=student&action=newStudent" class="btn btn-success">add new student</a>

</div>
