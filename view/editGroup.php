<?php var_dump($_POST);?>
<?php echo '<br>';?>
<?php var_dump($_GET['ID']);?>
<div class="container">
    <h2>Edit Class</h2>
    <form method="post">
        <div class="form-group col-4">
            <label for="className">Class Name</label>
            <input type="text" class="form-control" id="className" name="className">
        </div>
        <div class="form-group col-4">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>
        <div class="form-group col-4">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
        </div>
        <input type="hidden" name="ID" value="<?php echo $_GET['ID']?>" />
        <button type="submit" class="btn btn-primary" id="submit" name="run">Edit</button>
    </form>
</div>