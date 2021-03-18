<?php

class GroupLoader
{
    public function insertGroup(Group $group): void
    {
        $pdo = openConnection();

        $sql = 'INSERT INTO crud.class (className,classLocation,subject)
                VALUES (:className, :classLocation, :subject)';
        $handle = $pdo->prepare($sql);
        $handle->bindvalue(':className', $group->getName());
        $handle->bindvalue(':classLocation', $group->getLocation());
        $handle->bindvalue(':subject', $group->getSubject());
        $handle->execute();
    }

    public function fetchAllGroups() : array
    {
        $pdo = openConnection();

        $sql = 'SELECT className, subject, classLocation FROM class';
        $handle = $pdo->prepare($sql);
        $handle->execute();
        return $handle->fetchAll();
    }

    public function fetchDetailed() : array
    {
        $pdo = openConnection();
        $sql = 'SELECT * from class';
        $handle = $pdo->prepare($sql);


    }

    public function updateGroup(Group $group) : array
    {
        $pdo = openConnection();
        $sql = 'UPDATE class SET className = :className ,classLocation = :location, subject = :subject 
        WHERE classID= :ID';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':className',$group->getName());
        $handle->bindValue(':location',$group->getLocation());
        $handle->bindValue(':subject',$group->getSubject());
        $handle->bindValue(':ID',$group->getID());
        $handle->execute();
    }

}