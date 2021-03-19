
    <!-- container -->
    <div class="container">
        <div class="page-header">
            <h1>Student Information</h1>
        </div>
        <table class='table table-hover  table-bordered'>
            <tr>
                <td>Name</td>
                <td><?php echo $studentDetailed['name'];  ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $studentDetailed['email']; ?></td>
            </tr>
            <tr>
                <td>Class</td>
                <td><a href="?page=group&action=details<?php echo isset$studentGroup['classID'] ? '&ID=' . $studentGroup['classID'] : "" ?>"><?php echo $studentGroup['className'] ?? 'no class'; ?></a></td>
            </tr>
            <tr>
                <td>Assigned Teacher</td>
                <td><a href="?page=teacher&action=<?php echo isset($studentTeacher['teacherID']) ? 'details&ID='.$studentTeacher['teacherID'] : 'overview'?>"><?php echo $studentTeacher['fullName'] ?? 'no teacher';  ?></a></td>
            </tr>
        </table>
        <a href="?page=student&action=edit&ID= <?php echo $studentDetailed['studentID']  ?>"
           class="btn btn-info">Edit</a>
        <form method="post" class=" d-inline ">
            <input type="hidden" name="id" value=<?php echo $studentDetailed['studentID']?> >
            <input type="submit" name="delete" value="Delete" class="btn btn-danger ">
        </form>
        <a href="?page=student&action=overview"
           class="btn btn-success">Back to Overview</a>
    </div> <!-- end .container -->
