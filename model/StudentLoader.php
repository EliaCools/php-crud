<?php

class StudentLoader
{
    public function insertStudent(Student $student) : void
    {
        $pdo = openConnection();

        $sql = 'INSERT INTO crud.student (firstName, lastName, email, phone, classID) 
                VALUES (:firstName, :lastName, :email, :phone, :classID)';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':firstName', $student->getFirstName());
        $handle->bindValue(':lastName', $student->getLastName());
        $handle->bindValue(':email', $student->getEmail());
        $handle->bindValue(':phone', $student->getPhone());
        $handle->bindValue(':classID',$student->getClassID());
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

    public function updateStudent(Student $student): void
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('UPDATE crud.student set firstName =:firstName,lastName =:lastName, email =:email, phone =:phone, classID =:classID 
        WHERE studentID = :id');
        $handle->bindValue(':id', $_POST['ID']);
        $handle->bindValue(':firstName', $student->getFirstName());
        $handle->bindValue(':lastName', $student->getLastName());
        $handle->bindValue(':email', $student->getEmail());
        $handle->bindValue(':phone', $student->getPhone());
        $handle->bindValue(':classID',$student->getClassID());
        $handle->execute();
    }

    public function deleteStudent():void
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('DELETE FROM crud.student WHERE studentID = :id ');
        $handle->bindValue(':id',$_POST['id']);
        $handle->execute();
    }

    public function getMyGroup()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT className, s.classID as classID from class c right join student s on c.classID = s.ClassID 
                where studentID = :id');
        $handle->bindValue(':id',$_GET['ID']);
        $handle->execute();
        return $handle->fetch();
    }
    public function getMyTeacher()
    {
        $pdo = openConnection();
        $handle = $pdo->prepare("SELECT t.teacherID, concat_ws(' ',t.firstName,t.lastName) AS fullName from teacher t 
left join class c on t.ClassID = c.classID
   right join student s on c.classID = s.ClassID
    where studentID = :id");
        $handle->bindValue(':id',$_GET['ID']);
        $handle->execute();
        return $handle->fetch();
    }
}