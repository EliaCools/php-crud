<?php


class StudentLoader
{
    public function insertPerson($firstName, $lastName, $email, $phone)
    {
        $pdo = openConnection();

        $sql = 'INSERT INTO student (firstName, lastName, email, phone) VALUES (:firstName, :lastName, :email, :phone)';
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
                                        FROM student');
        $handle->execute();
        return $handle->fetchall();
    }


    public function fetchDetailed()
        {
            $pdo = openConnection();
            $handle = $pdo->prepare('SELECT concat_ws(" ",firstName,lastName)AS name, email, studentID 
                                            FROM crud.Student where studentID = :id');
            $handle->bindValue(':id', $_GET["ID"]);
            $handle->execute();
            return $handle->fetch();
        }

    public function updateStudent($firstName, $lastName, $email, $phone): void
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('UPDATE student set firstName =:firstName,lastName =:lastName, email =:email, phone =:phone 
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
        $pdo = openConnection()->prepare('SELECT studentID, firstName,lastName, email FROM student');
        $pdo->execute();
        return $pdo->fetch(PDO::FETCH_ASSOC);
    }
}