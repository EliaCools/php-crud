<?php


class SearchBarLoader
{
    function searchUsers($searchValue): array
    {

        $pdo = openConnection();
        $handle = $pdo->prepare("SELECT firstName,lastName, email 
                                        FROM crud.student 
                                        WHERE firstName LIKE :searchValue
                                        ");
        $handle->bindValue(':searchValue', $searchValue);
        $handle->execute();
        return $handle->fetchAll();
    }

}