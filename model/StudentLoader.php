<?php


class StudentLoader
{
private array $selectedStudent = [];

    function fetch(){
        $pdo = openConnection();
        $handle = $pdo->prepare('SELECT firstname, lastname, email, phone, s.ID FROM person 
            LEFT JOIN student s on person.ID = s.personID
            WHERE classID IS NOT NULL');

//        foreach ($handle->fetchAll() as $student){
//            $this->selectedStudent[$student][] = $student[]
//        }
        $handle->execute();
        return $handle->fetchAll();

    }

}