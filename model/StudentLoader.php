<?php


class StudentLoader
{
    public function insertPerson($firstName, $lastName, $email, $phone)
    {
        $pdo = openConnection();

        $sql = 'INSERT INTO crud.Student (firstName, lastName, email, phone) VALUES (:firstName, :lastName, :email, :phone)';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':firstName', $firstName);
        $handle->bindValue(':lastName', $lastName);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':phone', $phone);
        $handle->execute();
    }

        function fetchAllStudents()
        {
            $pdo = openConnection();
            $handle = $pdo->prepare('SELECT firstName,lastName, email, studentID FROM crud.Student');
            $handle->execute();
            return $handle->fetchall();
        }

        function fetchDetailed()
        {
            $pdo = openConnection();
            $handle = $pdo->prepare('SELECT concat_ws(" ",firstName,lastName)AS name, email, studentID FROM crud.Student
        where studentID = :id
        ');
            $handle->bindValue(':id', $_GET["ID"]);
            $handle->execute();
            return $handle->fetch();
        }

    public function getStudents()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT * FROM student');
        $handle->execute();
        return $handle->fetchAll();

    }
}