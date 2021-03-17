<?php


class groupController
{
    public function render(array $GET, array $POST)
    {



        if ($_GET["page"] == "group" && $_GET["action"] == "overview") {
            require 'view/groupOverview.php';
        }

    }
}