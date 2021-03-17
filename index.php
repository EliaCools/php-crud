<?php
declare(strict_types=1);


//include all your model files here
require "model/Student.php";
//require "model/studentLoader.php";
require "model/Group.php";
require "model/GroupLoader.php";

require "model/PDO.php";
require 'model/User.php';
require 'model/StudentLoader.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
require 'Controller/studentController.php';
require 'Controller/teacherController.php';
require 'Controller/groupController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}
if(isset($_GET['page']) && $_GET['page'] === 'student') {
    $controller = new studentController();
}
if(isset($_GET['page']) && $_GET['page'] === 'teacher') {
    $controller = new teacherController();
}
if(isset($_GET['page']) && $_GET['page'] === 'group') {
    $controller = new groupController();
}


$controller->render($_GET, $_POST);




