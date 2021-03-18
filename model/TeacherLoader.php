<?php


class TeacherLoader
{
    public function insertTeacher($firstName, $lastName, $email, $phone)
    {
        $pdo = openConnection();

        $sql = 'INSERT INTO crud.Teacher (firstName, lastName, email, phone) VALUES (:firstName, :lastName, :email, :phone)';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':firstName', $firstName);
        $handle->bindValue(':lastName', $lastName);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':phone', $phone);
        $handle->execute();
    }

    function fetchAllTeachers()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT firstName,lastName, email, teacherID FROM crud.Teacher');
        $handle->execute();
        return $handle->fetchall();
    }

    function fetchDetailed()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT firstName,lastName, email, teacherID FROM crud.Teacher
        where teacherID = :id
        ');
        $handle->bindValue('id', $_GET["ID"]);
        $handle->execute();
        return $handle->fetchall();
    }

    public function getTeachers()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT * FROM crud.Teacher');
        $handle->execute();
        return $handle->fetchAll();

    }

}