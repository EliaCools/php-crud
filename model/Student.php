<?php


class Student
{

    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected int $phone;
    protected int $classID;

    public function __construct(string $firstName, string $lastName, string $email, int $phone,int $classID)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->classID = $classID;

    }


    public function getFirstName(): string
    {
        return $this->firstName;
    }


    public function getLastName(): string
    {
        return $this->lastName;
    }


    public function getEmail(): string
    {
        return $this->email;
    }


    public function getPhone(): int|string
    {
        return $this->phone;
    }


    public function getClassID(): int
    {
        return $this->classID;
    }
}
