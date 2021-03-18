<?php
require 'includes/header.php'

?>


    <!-- container -->
    <div class="container">
        <div class="page-header">
            <h1>Student Information</h1>
        </div>

        <?php //$studentDetail= new studentLoader

        ?>

        <table class='table table-hover  table-bordered'>
            <tr>
                <td>Name</td>
                <td><?php echo $studentLoader->fetchDetailed()['name'];  ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $studentLoader->fetchDetailed()['email']; ?></td>
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
        <a href="?page=student&action=edit&ID= <?php echo $studentLoader->fetchDetailed()['studentID']  ?>"
           class="btn btn-info">Edit</a>
        <form method="post" class=" d-inline ">
            <input type="hidden" name="id" value=<?php echo $studentLoader->fetchDetailed()['studentID']?> >
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>
        <a href="?page=student&action=overview"
           class="btn btn-success">Back to Overview</a>
    </div> <!-- end .container -->

<?php
if(isset($_POST['delete'])){
    $studentDetail->deleteStudent();
    header("Location:?page=student&action=overview");
    exit();}
?>

<?php require 'includes/footer.php' ?>