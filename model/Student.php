<?php


class Student
{



    public function getStudents()
    {
        $pdo = openConnection();
       $handle = $pdo->prepare('SELECT * FROM student');
       $handle->execute();
       return $handle->fetchAll();

    }

}