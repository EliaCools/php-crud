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
        foreach ($searchResult as $result): ?>

            <tr>
                <td><?php echo $result["firstName"] ; ?> </td>
                <td><?php echo $result["lastName"]; ?> </td>
                <td><?php echo $result["email"]; ?> </td>
                <td>

                    <a href="?page=student&action=details&ID=<?php echo $result ['studentID']; ?>"
                       class="btn btn-success">Details</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="?page=student&action=newStudent" class="btn btn-success">add new student</a>