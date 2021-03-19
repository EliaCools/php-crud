
<div class="container">
    <div class="page-header">
        <h1>teacher information</h1>
    </div>
    <table class='table table-hover  table-bordered'>
        <tr>
            <td>Name</td>
            <td><?php echo $teacherDetailed['name'];  ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $teacherDetailed['email']; ?></td>
        </tr>
        <tr>
            <td>students</td>
            <td>
            <?php
            foreach ($assignedStudents  as $students) {
           $studentID = $students["studentID"];
            echo  '<a href="?page=student&action=details&ID='. $studentID . ' "> '  . $students["studentnames"] . ' </a> <br>';
            }?>
            </td>
        </tr>
    </table>
    <a href="?page=teacher&action=edit&ID=<?php echo $teacherDetailed['teacherID']; ?>"
       class="btn btn-info">Edit</a>
    <form method="post" class=" d-inline ">
        <input type="hidden" name="id" value=<?php echo $teacherDetailed['teacherID']; ?> >
        <input type="submit" name="delete" value="Delete" class="btn btn-danger ">
    </form>
    <a href="?page=teacher&action=overview"
       class="btn btn-success">Back to Overview</a>
</div> <!-- end .container -->