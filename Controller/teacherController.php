<?php
declare(strict_types = 1);

class teacherController
{

    public function render(array $GET, array $POST) : void
    {
        function sanitize($data): string
        {     $data = trim($data);     $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $teacherLoader = new TeacherLoader();
        $teachers = $teacherLoader->fetchAllTeachers();

        if (isset($_POST['delete'])) {
                $teacherLoader->deleteTeacher();
                header("Location:?page=teacher&action=overview");
                exit();
        }

        //Edit and Add new
        if(isset($_POST['run'])  && !empty($_POST["firstName"]) && !empty($_POST["lastName"])) {
            $teacher = new Teacher(sanitize($_POST['firstName']), sanitize($_POST["lastName"]),
                sanitize($_POST["email"]), intval(sanitize($_POST["phone"])));
            if(!empty($_POST['ID'])){
                $teacherLoader->updateTeacher($teacher);
            }else{
                $teacherLoader->insertTeacher($teacher);
            }
            header('location:/index.php?page=teacher&action=overview');
            exit;
        }

        //select the view
        if ($_GET["action"] === "edit") {

            require 'view/includes/header.php';
            require 'view/editTeacher.php';
            require 'view/includes/footer.php';
        }
        if ($_GET["action"] === "newTeacher") {

            require 'view/includes/header.php';
            require 'view/newTeacher.php';
            require 'view/includes/footer.php';
        }
        if ($_GET["action"] === "overview") {

            require 'view/includes/header.php';
            require 'view/teacherOverview.php';
            require 'view/includes/footer.php';

        }
        if ($_GET["action"] === "details") {

            $teacherDetailed = $teacherLoader->fetchDetailed();
            require 'view/includes/header.php';
            require 'view/teacherDetailed.php';
            require 'view/includes/footer.php';

        }
        if (isset($_POST["searchbar"])){

            require 'view/includes/header.php';
            require 'view/searchResultPage.php';
            require 'view/includes/footer.php';
        }
    }
}