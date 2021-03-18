<?php
declare(strict_types = 1);

class studentController
{

    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        $studentLoader = new studentLoader;
        $allstudents = $studentLoader->fetchAllStudents();
        if (isset($_POST['delete'])) {
            $studentLoader->deleteStudent();
            header("Location:?page=student&action=overview");
            exit();
        }

        //Edit and Add new
        if(isset($_POST['run'])&& !empty($_POST['ID']) && !empty($_POST["firstName"]) && !empty($_POST["lastName"])) {
            $studentLoader->updateStudent($_POST['firstName'],$_POST["lastName"],$_POST["email"],$_POST["phone"]);
            header('location:/index.php?page=student&action=overview');
            exit;
        }
        if (isset($_POST['run']) && !empty($_POST["firstName"]) && !empty($_POST["lastName"])) {

            $student = new student(htmlspecialchars($_POST['firstName']), htmlspecialchars($_POST["lastName"]),
                htmlspecialchars($_POST["email"]), intval($_POST["phone"]));
            echo var_dump($student);

            $studentLoader->insertPerson($student);
            header('location:/index.php?page=student&action=overview');
            exit;
        }
        // select the view
        if ($_GET["action"] === "edit") {

            require 'view/includes/header.php';
            require 'view/editStudent.php';
            require 'view/includes/footer.php';
        }
        if ($_GET["action"] === "newStudent") {

            require 'view/includes/header.php';
            require 'view/newStudent.php';
            require 'view/includes/footer.php';
        }
        if ($_GET["action"] === "overview") {

            require 'view/includes/header.php';
            require 'view/studentOverview.php';
            require 'view/includes/footer.php';

        }
        if ($_GET["action"] === "details") {

            $studentDetailed = $studentLoader->fetchDetailed();
            require 'view/includes/header.php';
            require 'view/studentDetailed.php';
            require 'view/includes/footer.php';

        }
        if (isset($_POST["searchbar"])){

            require 'view/includes/header.php';
            require 'view/searchResultPage.php';
            require 'view/includes/footer.php';
        }
    }
}