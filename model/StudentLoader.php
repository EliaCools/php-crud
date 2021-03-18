<?php


class StudentLoader
{
    public function insertStudent($firstName, $lastName, $email, $phone)
    {
        $pdo = openConnection();

        $sql = 'INSERT INTO crud.student (firstName, lastName, email, phone) VALUES (:firstName, :lastName, :email, :phone)';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':firstName', $firstName);
        $handle->bindValue(':lastName', $lastName);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':phone', $phone);
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
    public function exportAll()
    {
        $pdo = openConnection()->prepare('SELECT studentID, firstName,lastName, email FROM crud.student');
        $pdo->execute();
        return $pdo->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteStudent(){
        $pdo = openConnection();
        $handle = $pdo->prepare('DELETE FROM crud.student WHERE studentID = :id ');
        $handle->bindValue(':id',$_POST['id']);
        $handle->execute();
    }
}