<?php
declare(strict_types=1);

class studentController
{

    public function render(array $GET, array $POST) : void
    {
        function sanitize($data): string
        {     $data = trim($data);     $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $studentLoader = new studentLoader;
        $allstudents = $studentLoader->fetchAllStudents();

        if (isset($_POST['delete'])) {
            $studentLoader->deleteStudent();
            header("Location:?page=student&action=overview");
            exit();
        }
        //Edit and Add new
        if (isset($_POST['run']) && !empty($_POST["firstName"]) && !empty($_POST["lastName"])) {
            $student = new student(sanitize($_POST['firstName']), sanitize($_POST["lastName"]),
                sanitize($_POST["email"]), intval(sanitize($_POST["phone"])));

            if (!empty($_POST['ID'])) {
                $studentLoader->updateStudent($student);
            } else {
                $studentLoader->insertStudent($student);
            }
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
            $studentGroup = $studentLoader->getMyGroup();
            $studentTeacher = $studentLoader->getMyTeacher();
            require 'view/includes/header.php';
            require 'view/studentDetailed.php';
            require 'view/includes/footer.php';

        }
        if (isset($_POST["searchbar"])) {

            require 'view/includes/header.php';
            require 'view/searchResultPage.php';
            require 'view/includes/footer.php';
        }
    }
}