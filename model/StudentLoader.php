
<?php


class StudentLoader
{

    function fetch(){
        $pdo = openConnection();

        $handle = $pdo->prepare('SELECT firstName,lastName, email, p.ID FROM person p
        INNER JOIN student s ON  p.ID = s.personID
        ');
        $handle->execute();
        return $handle ->fetchall();

    }

    public function insert($firstName, $lastName, $email, $phone){
        $pdo = openConnection();

        $sql = 'INSERT INTO person (firstName, lastName, email, phone) VALUES (:firstName, :lastName, :email, :phone)';
        $handle = $pdo->prepare($sql);
        $handle->bindValue(':firstName', $firstName);
        $handle->bindValue(':lastName', $lastName);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':phone', $phone);
        $handle->execute();

    }



}