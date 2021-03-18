<?php


class teacherController
{
    public function render(array $GET, array $POST)
    {


        if ($_GET["page"] == "teacher" && $_GET["action"] == "overview") {
            $loader = new teacherLoader;
            require 'view/includes/header.php';
            $teachers = $loader->fetchAllTeachers();
            require 'view/teacherOverview.php';
            require 'includes/footer.php';

        }
        if ($_GET["page"] == "teacher" && $_GET["action"] == "edit") {
            $loader = new teacherLoader;
            require 'view/includes/header.php';
            $teacher = $loader->fetch();
        }

    }
}