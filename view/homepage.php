<?php require 'includes/header.php'?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

    <h4>Hello <?php echo $user->getName()?>,</h4>

    <p><a href="../index.php?page=info">To info page</a></p>
    <p><a href="../index.php?page=student&action=newStudent">Add a new student</a> </p>
    <p><a href="../index.php?page=teacher&action=newTeacher"> Add a new teacher</a> </p>
    <p><a href="../index.php?page=group&action=newGroup"> Add a new class</a> </p>

    <p>Please leave.</p>


</section>
<?php require 'includes/footer.php'?>
