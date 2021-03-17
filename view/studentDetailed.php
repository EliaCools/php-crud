<?php
require 'includes/header.php'

?>


    <!-- container -->
    <div class="container">

        <div class="page-header">
            <h1>Read Product</h1>
        </div>

        <!-- PHP read one student will be here -->
        <?php
         get passed parameter value, in this case, the record ID
         isset() is a PHP function used to verify if a value is there or not
         $id=isset($_GET["page"]== "student") ? $_GET['id'] : die('ERROR: Student ID not found.');


             //include database connection


         // read current data
         try {
             // prepare select query
             $query = "SELECT firtsname FROM products WHERE ID =  $_GET['id']";
             $stmt = $con->prepare( $query );

             // this is the first question mark
             $stmt->bindParam(1, $id);

             // execute our query
             $stmt->execute();

             // store retrieved row to a variable
             $row = $stmt->fetch(PDO::FETCH_ASSOC);

             // values to fill up our form
             $name = $row['name'];
             $description = $row['description'];
             $price = $row['price'];
         }

         // error
         catch(PDOException $exception){
             die('ERROR: ' . $exception->getMessage());
         }
         ?>
        <!-- HTML read one record table will be here -->

        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <td>Name</td>
                <td><?php echo htmlspecialchars($name, ENT_QUOTES);  ?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><?php echo htmlspecialchars($description, ENT_QUOTES);  ?></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><?php echo htmlspecialchars($price, ENT_QUOTES);  ?></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href='../index.php' class='btn btn-danger'>Back to read products</a>
                </td>
            </tr>
        </table>

    </div> <!-- end .container -->
<?php require 'includes/foo' ?>