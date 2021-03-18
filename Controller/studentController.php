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


        //load the view
        if (isset($_POST['run']) && !empty($_POST["firstName"]) && !empty($_POST["lastName"])) {

            $student = new student(htmlspecialchars($_POST['firstName']), htmlspecialchars($_POST["lastName"]),
                htmlspecialchars($_POST["email"]), intval($_POST["phone"]));

            $studentLoader->insertPerson($student);
            header('location:/index.php?page=student&action=overview');
            exit;
        }


        if ($_GET["action"] == "edit") {
            // require header
            require 'view/editStudent.php';
            //require footer
        }
        if ($_GET["action"] == "newStudent") {

            require 'view/newStudent.php';
        }
        if ($_GET["action"] == "overview") {
            require 'view/studentOverview.php';
        }

        if ($_GET["action"] == "details") {
            require 'view/studentDetailed.php';
        }
    }
}