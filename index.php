<?php
declare(strict_types=1);

require 'model/PDO.php';
//include all your model files here
require 'model/User.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
require 'Controller/studentController.php';



//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!



$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}
if(isset($_GET['page']) && $_GET['page'] === 'student') {
    $controller = new studentController();
}



$controller->render($_GET, $_POST);