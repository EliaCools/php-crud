<?php var_dump($groupDetailed);?>
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
            <td><a href="#"><?php echo $groupTeacher['Teacher'] ?? 'no teacher assigned';  ?></a></td>
        </tr>
        <tr>
            <?php // FIXME students are not showing ?>
            <td>Students</td>
            <?php foreach ($groupStudents as $student):?>
            <td><?php echo $student["StudentNames"] ?? 'no students assigned'?> </td>
        <tr>
            <?php endforeach; //FIXME buttons are not properly showing?>
            <td>
                <a href="?page=group&action=edit&ID=<?php echo $groupDetailed['classID'];?>"
                   class="btn btn-info">Edit</a>
                <form method="post" class=" d-inline ">
                    <input type="hidden" name="id" value=<?php echo $groupDetailed['classID'];?> >
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger ">
                </form>
                <a href="?page=group&action=details&ID=<?php echo $groupDetailed['classID'];?>"
                   class="btn btn-success">Details</a>
            </td>
        </tr>


    </table>

<!--    <a href="?page=student&action=edit&ID= --><?php //echo $studentDetailed['studentID']  ?><!--"-->
<!--       class="btn btn-info">Edit</a>-->
<!--    <form method="post" class=" d-inline ">-->
<!--        <input type="hidden" name="id" value=--><?php //echo $studentDetailed['studentID']?><!-- >-->
<!--        <input type="submit" name="delete" value="Delete" class="btn btn-danger ">-->
<!--    </form>-->
<!--    <a href="?page=student&action=overview"-->
<!--       class="btn btn-success">Back to Overview</a>-->
</div>