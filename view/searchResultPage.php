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
        $searchLoader = new SearchBarLoader();
        foreach ($searchLoader->searchUsers() as $student): ?>

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
    <a href="?page=student&action=newStudent" class="btn btn-success">add new student</a>