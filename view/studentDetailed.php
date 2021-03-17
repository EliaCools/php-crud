<?php
require 'includes/header.php'

?>


    <!-- container -->
    <div class="container">
        <div class="page-header">
            <h1>Student Information</h1>
        </div>

        <?php $studentDetail= new studentLoader

        ?>

        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <td>Name</td>
                <td><?php echo $studentDetail->fetchDetailed()['name'];  ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $studentDetail->fetchDetailed()['email']; ?></td>
            </tr>
            <tr>
                <td>Class</td>
                <td><?php echo 'class here'; ?></td>
            </tr>
            <tr>
                <td>Assigned Teacher</td>
                <td><?php echo 'connect with Teacher';  ?></td>
            </tr>
            
        </table>
        <a href="?page=student&action=edit&ID= <?php echo $studentDetail->fetchDetailed()['studentID']  ?>"
           class="btn btn-info">Edit</a>
        <a href="?page=student&action=details&delete=<?php echo $studentDetail->fetchDetailed()['studentID']; ?>"
           class="btn btn-danger">Delete</a>
        <a href="?page=student&action=overview"
           class="btn btn-success">Back to Overview</a>
    </div> <!-- end .container -->



<?php require 'includes/footer.php' ?>