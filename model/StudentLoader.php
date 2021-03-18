<?php

class StudentLoader
{
    public function insertStudent(Student $student) : void
    {
        $pdo = openConnection();

        $sql = 'INSERT INTO crud.student (firstName, lastName, email, phone) 
                VALUES (:firstName, :lastName, :email, :phone)';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':firstName', $student->getFirstName());
        $handle->bindValue(':lastName', $student->getLastName());
        $handle->bindValue(':email', $student->getEmail());
        $handle->bindValue(':phone', $student->getPhone());
        $handle->execute();
    }

    public function fetchAllStudents(): array
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT studentID, firstName,lastName, email 
                                        FROM crud.student');
        $handle->execute();
        return $handle->fetchall();
    }

    public function fetchDetailed() : array
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT concat_ws(" ",firstName,lastName)AS name, email, studentID FROM crud.student
        where studentID = :id');
        $handle->bindValue(':id', $_GET["ID"]);
        $handle->execute();
        return $handle->fetch();
    }

    public function updateStudent($firstName, $lastName, $email, $phone): void
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('UPDATE crud.student set firstName =:firstName,lastName =:lastName, email =:email, phone =:phone 
        WHERE studentID = :id');
        $handle->bindValue(':id', $_POST['ID']);
        $handle->bindValue(':firstName', $firstName);
        $handle->bindValue(':lastName', $lastName);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':phone', $phone);
        $handle->execute();
    }

    public function deleteStudent():void
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('DELETE FROM crud.student WHERE studentID = :id ');
        $handle->bindValue(':id',$_POST['id']);
        $handle->execute();
    }
}