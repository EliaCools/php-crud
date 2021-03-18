<?php

class TeacherLoader
{
    public function insertTeacher(Teacher $teacher) : void
    {
        $pdo = openConnection();

        $sql = 'INSERT INTO crud.teacher (firstName, lastName, email, phone) 
                VALUES (:firstName, :lastName, :email, :phone)';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':firstName', $teacher->getFirstName());
        $handle->bindValue(':lastName', $teacher->getLastName());
        $handle->bindValue(':email', $teacher->getEmail());
        $handle->bindValue(':phone', $teacher->getPhone());
        $handle->execute();
    }

    public function fetchAllTeachers(): array
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT firstName,lastName, email, teacherID 
                                        FROM crud.teacher');
        $handle->execute();
        return $handle->fetchall();
    }

    public function fetchDetailed(): array
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT concat_ws(" ",firstName,lastName) AS name , email, teacherID FROM crud.teacher
        where teacherID = :id');
        $handle->bindValue('id', $_GET["ID"]);
        $handle->execute();
        return $handle->fetch();
    }

       public function fetchAssignedStudents(): array
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT concat_ws(" ",s.firstName,s.lastName)  AS studentnames, s.studentID AS studentID FROM crud.teacher t
        left join crud.student s on t.ClassID = s.ClassID
        where t.teacherID  = :id');
        $handle->bindValue('id', $_GET["ID"]);
        $handle->execute();
        return $handle->fetchall();
    }




    public function updateTeacher(Teacher $teacher): void
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('UPDATE crud.teacher set firstName =:firstName,lastName =:lastName, email =:email, phone =:phone 
        WHERE teacherID = :id');
        $handle->bindValue(':id', $_POST['ID']);
        $handle->bindValue(':firstName', $teacher->getFirstName());
        $handle->bindValue(':lastName', $teacher->getLastName());
        $handle->bindValue(':email', $teacher->getEmail());
        $handle->bindValue(':phone', $teacher->getPhone());
        $handle->execute();
    }

    public function deleteTeacher():void
    {
        $pdo = openConnection();
        $handle = $pdo->prepare('DELETE FROM crud.teacher WHERE teacherID = :id ');
        $handle->bindValue(':id',$_POST['id']);
        $handle->execute();
    }
}