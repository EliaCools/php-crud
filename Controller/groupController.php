<?php


class groupController
{
    public function render(array $GET, array $POST)
    {
        $groupLoader = new groupLoader();
        $groups = $groupLoader-> fetchAllGroups();

        if (isset($_POST['delete'])) {
            $groupLoader->deleteGroup();
            header("Location:?page=group&action=overview");
            exit();
        }

        //Edit and Add new
        if (isset($_POST['run']) && !empty($_POST["name"]) && !empty($_POST["location"])&& !empty($_POST["subject"])) {
            $group = new group(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["location"]),
                htmlspecialchars($_POST["subject"]));
            if (!empty($_POST['ID'])) {
                $groupLoader->updateGroup($group);
            } else {
                $groupLoader->insertGroup($group);
            }
            header('location:/index.php?page=group&action=overview');
            exit;
        }

        // select the view
        if ($_GET["action"] === "edit") {

            require 'view/includes/header.php';
            require 'view/editGroup.php';
            require 'view/includes/footer.php';
        }
        if ($_GET["action"] === "newGroup") {

            require 'view/includes/header.php';
            require 'view/newGroup.php';
            require 'view/includes/footer.php';
        }
        if ($_GET["action"] === "overview") {

            require 'view/includes/header.php';
            require 'view/groupOverview.php';
            require 'view/includes/footer.php';

        }
        if ($_GET["action"] === "details") {

            $studentDetailed = $groupLoader->fetchDetailed();
            require 'view/includes/header.php';
            require 'view/groupDetailed.php';
            require 'view/includes/footer.php';

        }
        if (isset($_POST["searchbar"])) {

            require 'view/includes/header.php';
            require 'view/searchResultPage.php';
            require 'view/includes/footer.php';
        }
    }
}

        //if ($_GET["page"] == "group" && $_GET["action"] == "overview") {
          //  require 'view/groupOverview.php';

