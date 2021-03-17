<?php


class teacherController
{
    public function render(array $GET, array $POST)
    {



    if ($_GET["page"] == "teacher" && $_GET["action"] == "overview") {
    require 'view/teacherOverview.php';
    }

}}