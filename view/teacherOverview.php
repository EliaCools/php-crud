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
        foreach ($teachers as $teacher): ?>
            <tr>
                <td><?php echo $teacher["firstName"] ?> </td>
                <td><?php echo $teacher["lastName"]; ?> </td>
                <td><?php echo $teacher["email"]; ?> </td>
                <td>

                    <a href="?page=student&action=edit&ID=<?php echo $teacher['teacherID'] ?>"
                       class="btn btn-info">Edit</a>

                    <form method="post">
                        <input type="hidden" name="id" value="<?php $teacher['teacherID']?>" />
                        <input type="submit" name="delete" value="Delete" class="btn btn-secondary">
                    </form>

                    <a href="?page=student&action=details&ID=<?php echo $teacher['teacherID']; ?>"
                       class="btn btn-success"">Details</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <form method="post" action="/model/export.php">
        <input type="submit" name="teacherExport" value="CSV Export" class="btn btn-secondary">
    </form>
    <a href="?page=teacher&action=newTeacher" class="btn btn-success">add new teacher</a>

</div>