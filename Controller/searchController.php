<?php

class searchController
{
    public function render(array $GET, array $POST)
    {
        $search_keyword = '';
        if (isset($_POST["searchbar"])) {
            $keyword = $_POST['search']['keyword'];
        }

            // require header
            //require 'view/studentDetailed.php'
            require '../view/searchResultPage.php';

        }

}