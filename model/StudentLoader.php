<?php


class StudentLoader
{

    function fetch(){
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT * FROM person');
        $handle->execute();
        return $handle ->fetchAll();

    }

}