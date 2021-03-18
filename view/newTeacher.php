<div class="container">
    <h2>Add new Teacher</h2>
    <form method="post">
        <div class="form-group col-4">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
        </div>
        <div class="form-group col-4">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
        </div>
        <div class="form-group col-4">
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group col-4">
            <label for="phone">Phone number:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group col-4">
            <label for="sel1">Select list:</label>
            <select name="group" class="form-control col-4" id="sel1">
                <?php foreach($classes AS $class):?>
                    <option value="<?php echo $class['classID']?>"><?php echo $class['className'] ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <input type="hidden" name="ID" value=""/>
        <button type="submit" name="run" class="btn btn-primary" id="submit">Submit</button>
    </form>
</div>
