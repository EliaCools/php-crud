<?php


class SearchBarLoader
{
    function searchUsers()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT s.firstName,S.lastName,className from crud.student s
    inner join crud.class c on s.ClassID = c.classID   
    inner join crud.teacher t on c.classID = t.ClassID 
    where t.teacherID = :id;
        ');
        $handle->bindValue(':id', $_GET["ID"]);
        $handle->execute();
        return $handle->fetchAll();
    }

}