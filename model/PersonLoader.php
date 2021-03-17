<?php


class PersonLoader
{
    public function insertPerson($firstName, $lastName, $email, $phone)
    {
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