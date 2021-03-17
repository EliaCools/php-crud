<?php

    function openConnection(): PDO
    {

        $dbhost = "127.0.0.1";
        $dbuser = "root";
        $dbpass = "";
        $db = "becode_class_schema";

        $driverOptions = [

            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
    }

