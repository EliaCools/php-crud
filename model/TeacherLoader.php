<?php

class TeacherLoader
{
    public function insertTeacher(Teacher $teacher)
    {
        $pdo = openConnection();
        $sql = 'INSERT INTO crud.teacher (firstName, lastName, email, phone) VALUES (:firstName, :lastName, :email, :phone)';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':firstName', $teacher->getFirstName());
        $handle->bindValue(':lastName', $teacher->getLastName());
        $handle->bindValue(':email', $teacher->getEmail());
        $handle->bindValue(':phone', $teacher->getPhone());
        $handle->execute();
    }

    public function fetchAllTeachers()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT firstName,lastName, email, teacherID FROM crud.Teacher');
        $handle->execute();
        return $handle->fetchall();
    }

    public function fetchDetailed()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT firstName,lastName, email, teacherID FROM crud.teacher
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