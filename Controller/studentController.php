<?php
declare(strict_types = 1);

class studentController
{

    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        if ($_GET["page"] == "student" && $_GET["action"] == "edit") {
            require 'view/newStudent.php';

        }

        if ($_GET["page"] == "student" && $_GET["action"] == "overview") {
            require 'view/studentOverview.php';
        }

    }


}