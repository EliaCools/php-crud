<?php


class Student
{
    private int $studentID;
    protected string $firstName;
    protected string $lastName;
    protected string $email;
    protected int $phone;
    private int $classID;

    public function __construct(string $firstName, string $lastName, string $email, int $phone, int $classID)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->classID= $classID;

    }

    public function getID(): string
    {
        return $this->studentID;
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

    public function getclassid(): int
    {
        return $this->classID;
    }
}
