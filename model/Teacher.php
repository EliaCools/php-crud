<?php


class Teacher extends Student
{

    public function __construct(string $firstName, string $lastName, string $email, int $phone,  $classID)
    {
        parent::__construct($firstName, $lastName, $email, $phone,$classID);
    }


}