<?php
require 'PersonLoader.php';

class StudentLoader extends PersonLoader
{

    function fetchAllStudents(){
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT firstName,lastName, email, p.ID FROM person p
        INNER JOIN student s ON  p.ID = s.personID
        ');
        $handle->execute();
        return $handle ->fetchall();
    }

    function fetchDetailed(){
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT firstName,lastName, email, p.ID FROM person p
        INNER JOIN student s ON  p.ID = s.personID
        where p.id = :id
        ');
        $handle->bindValue('id',$_GET["ID"]);
        $handle->execute();
        return $handle ->fetchall();
    }




}