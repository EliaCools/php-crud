<?php
declare(strict_types = 1);

class studentController
{

    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view


        if ( $_GET["action"] == "edit") {
           // require header
            //require 'view/studentDetailed.php'
            require 'view/editStudent.php';
            //require footer
        }
        if( $_GET["action"] == "newStudent"){
            require 'view/newStudent.php';
        }
        if ( $_GET["action"] == "overview") {
            require 'view/studentOverview.php';
        }

        if ($_GET["action"] == "details")
        {
            require 'view/studentDetailed.php';
        }

        if (isset($_POST["searchbar"])){
            require 'view/searchResultPage.php';
        }

   //     if ($_GET["page"] == "student" && $_GET["action"] == "detailedview" && $_GET["action"]=='edit') {
   //         require 'view/studentDetails.php';
   //         require 'view/newStudent.php.php';
   //     }
    }
}