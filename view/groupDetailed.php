
<div class="container">
    <div class="page-header">
        <h1>Class Information</h1>
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
            <td>Students</td>
            <td>
            <?php foreach ($groupStudents as $student):?>
            <?php echo '<a href="?page=student&action=details&ID='. $student["studentID"] . ' "> '  . $student["studentNames"] . ' </a> <br>'; ?>

            <?php endforeach;?>
        </tr>
    </table>
                <a href="?page=group&action=edit&ID=<?php echo $groupDetailed['classID'];?>"
                   class="btn btn-info">Edit</a>
                <form method="post" class=" d-inline ">
                    <input type="hidden" name="id" value=<?php echo $groupDetailed['classID'];?> >
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger ">
                </form>



</div>