<?php


class SearchBarLoader
{
    function fetchDetailed()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT s.firstName,S.lastName,className from student s
    inner join class c on s.ClassID = c.classID   
    inner join teacher t on c.classID = t.ClassID 
    where t.teacherID = :id;
        ');
        $handle->bindValue(':id', $_GET["ID"]);
        $handle->execute();
        return $handle->fetch();
    }