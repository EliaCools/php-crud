<?php require 'includes/header.php' ?>


    <div class="container">
        <h2>Add new student</h2>
        <form action="studentOverview.php" method="post">
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
                <p>options depend on the amount of classes, SO CHANGE INTO FOREACH LOOP</p>
                <select class="form-control col-4" id="sel1">
                    <option>Lamarr</option>
                    <option>Giertz</option>
                    <option>Theano</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </form>
    </div>

<?php require 'includes/footer.php' ?>