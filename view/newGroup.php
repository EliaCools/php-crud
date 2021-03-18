
    <div class="container">
        <h2>Add new Class</h2>
        <form action="/overview.php" method="post">
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
            <div class="form-group col-4">
                <label for="startDate">Start date:</label>
                <input type="text" class="form-control" id="startDate" name="startDate">
            </div>
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </form>
    </div>
