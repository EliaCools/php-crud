<h2>Class Overview</h2>
<br>
<div class="justify-content-center">
    <table class="table">
        <thead>
        <tr>
            <th>Class name</th>
            <th>Location</th>
            <th>Subject</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <?php foreach ($groups as $group):?>
            <tr>
                <td><?php echo $group["className"];?> </td>
                <td><?php echo $group["classLocation"];?> </td>
                <td><?php echo $group["subject"];?> </td>
                <td>
                    <a href="?page=group&action=edit&ID=<?php echo $group['classID'];?>"
                       class="btn btn-info">Edit</a>
                    <form method="post" class=" d-inline ">
                        <input type="hidden" name="id" value=<?php echo $group['classID'];?> >
                        <input type="submit" name="delete" value="Delete" class="btn btn-danger ">
                    </form>
                    <a href="?page=group&action=details&ID=<?php echo $group['classID'];?>"
                       class="btn btn-success">Details</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
    <form method="post" action="/model/export.php">
        <input type="submit" name="groupExport" value="CSV Export" class="btn btn-warning">
        <a href="?page=group&action=newGroup" class="btn btn-primary">Add New Group</a>
    </form>
</div>