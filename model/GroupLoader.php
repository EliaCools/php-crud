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

        $sql = 'SELECT className, subject, classLocation, classID FROM class';
        $handle = $pdo->prepare($sql);
        $handle->execute();
        return $handle->fetchAll();
    }

    public function deleteGroup():void
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('DELETE FROM crud.class WHERE classID = :id ');
        $handle->bindValue(':id',$_POST['id']);
        $handle->execute();
    }

    public function updateGroup(Group $group) : void
    {
        $pdo = openConnection();
        $sql = 'UPDATE crud.class SET className = :className ,classLocation = :location, subject = :subject 
        WHERE classID= :id';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':className',$group->getName());
        $handle->bindValue(':location',$group->getLocation());
        $handle->bindValue(':subject',$group->getSubject());
        $handle->bindValue(':id', $_POST['ID']);
        $handle->execute();
    }

    public function fetchDetailed(): array
    {
        $pdo = openConnection();
        $sql = 'SELECT classID, className, classLocation, subject 
                from crud.class 
                WHERE class.classID = :id';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':id', $_GET["ID"]);
        $handle->execute();
        return $handle->fetch();
    }

        public function getMyTeacher(){
        $pdo = openConnection();
        $sql = 'SELECT concat_ws(" ", t.firstName, t.lastName) Teacher, teacherID 
                from crud.class
                JOIN crud.teacher t on class.classID = t.ClassID
                WHERE class.classID = :id';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':id',$_GET['ID']);
        $handle->execute();
        return $handle->fetch();
    }

    public function getMyStudents(): array {
        $pdo = openConnection();
        $sql = 'SELECT concat_ws(" ",s.firstName, s.lastName) AS studentNames, s.studentID AS studentID 
                FROM class left join student s on class.classID = s.ClassID 
                WHERE class.classID = :id';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':id',$_GET['ID']);
        $handle->execute();
        return $handle->fetchall();
    }





}