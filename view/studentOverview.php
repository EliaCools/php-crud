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
        $studentloader = new studentLoader;
        foreach ($studentloader->fetch() as $student): ?>

        <tr>
            <td><?php echo $student["firstName"] ; ?> </td>
            <td><?php echo $student["lastName"]; ?> </td>
            <td><?php echo $student["email"]; ?> </td>
            <td>
                <a href="?page=student&action=overview&ID=<?php echo $student['ID']  ?>"
                   class="btn btn-info">Edit</a>
                <a href="?page=student&action=overview&delete=<?php echo $student ['ID']; ?>"
                   class="btn btn-danger">Delete</a>
                <a href="?page=student&action=details&ID=<?php echo $student ['ID']; ?>"
                   class="btn btn-success"">Details</a>

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="?page=student&action=newStudent" class="btn btn-success">add new student</a>

</div>
