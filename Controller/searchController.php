<?php

class searchController
{
    public function render(array $GET, array $POST)
    {

        if (isset($_GET["search"])) {
            function addQuotes($string){
                return '%'.$string. '%';
            }

            $searchLoader = new SearchBarLoader();
            $search = addQuotes($_GET['search']);
            $searchResult = $searchLoader->searchUsers($search);


            require 'view/searchResultPage.php';
        }

            // require header
            //require 'view/studentDetailed.php'


        }

}