
<div class="container">
    <div class="page-header">
        <h1>Group Information</h1>
    </div>
    <table class='table table-hover  table-bordered'>
        <tr>
            <td>Class</td>
            <td><?php echo $groupDetailed['className'];  ?></td>
        </tr>
        <tr>
            <td>Location</td>
            <td><?php echo $groupDetailed['classLocation']; ?></td>
        </tr>
        <tr>
            <td>Assigned Teacher</td>
            <td><a href="?page=teacher&action=<?php echo isset($groupTeacher['teacherID']) ? 'details&ID='.$groupTeacher['teacherID'] : 'overview'?>"><?php echo $groupTeacher['Teacher'] ?? 'no teacher assigned';  ?></a></td>
        </tr>
        <tr>
            <?php // FIXME students are not showing ?>
            <td>Students</td>
            <?php foreach ($groupStudents as $student):?>
        <tr>
            <td><a href="?page=student&action=details&ID=<?php echo $student['studentID']?>"><?php echo $student["studentNames"] ?? 'no students assigned'?></a></td>
        </tr>
            <?php endforeach;?>
        <tr>
            <td>
                <a href="?page=group&action=edit&ID=<?php echo $groupDetailed['classID'];?>"
                   class="btn btn-info">Edit</a>
                <form method="post" class=" d-inline ">
                    <input type="hidden" name="id" value=<?php echo $groupDetailed['classID'];?> >
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger ">
                </form>
            </td>
        </tr>

    </table>

</div>