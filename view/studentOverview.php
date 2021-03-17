<?php

require 'model/StudentLoader.php';


$studentloader = new studentLoader;
foreach ($studentloader->fetch() as $student):
    echo $student["firstName"] ." " . $student["lastName"] . " " . $student["email"] .$student["ID"]  ?>
    <a href="?page=student&action=overview&ID=<?php echo $student['ID']  ?> ">  edit </a> <br/>


<?php endforeach; ?>
