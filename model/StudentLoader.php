<?php


class StudentLoader
{

    function fetch(){
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT firstName,lastName, email, p.ID FROM person p
        INNER JOIN student s ON  p.ID = s.personID
        ');
        $handle->execute();
        return $handle ->fetchall();

    }

}