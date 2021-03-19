<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>UsCode - PHP CRUD</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container-fluid">
            <!--            toggle navbar button-->
            <a class="navbar-brand" href="?page=index.php"><img src="view/includes/img/becodeLogo.png" width="45px" alt="becode"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link px-4" href="?page=student&action=overview">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="?page=teacher&action=overview">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="?page=group&action=overview">Classes</a>
                    </li>

                </ul>
                <form method="get" class="form-inline" action="">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" id="search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
