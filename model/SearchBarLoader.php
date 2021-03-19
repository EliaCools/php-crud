<?php


class SearchBarLoader
{
    function searchUsers($searchValue): array
    {

        $pdo = openConnection();
        $handle = $pdo->prepare("SELECT firstName,lastName, email, studentID as ID, 'student' AS type FROM crud.student 
                                        WHERE firstName LIKE :searchValue
                                        UNION
                                        SELECT firstName,lastName, email, teacherID as ID, 'teacher' AS type FROM crud.teacher 
                                        WHERE firstName LIKE :searchValue");
        $handle->bindValue(':searchValue', $searchValue);
        $handle->execute();
        return $handle->fetchAll();
    }

    function fetchDetailed()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT concat_ws(" ",firstName,lastName)AS name, email, studentID FROM crud.student
        where studentID = :id
        ');
        $handle->bindValue(':id', $_GET["ID"]);
        $handle->execute();
        return $handle->fetch();
    }
}