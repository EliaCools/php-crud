<?php


class Student
{

    private string $firstName;
    private string $lastName;
    private string $email;
    private int $phone;

    public function __construct(string $firstName, string $lastName, string $email, int $phone)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;

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
}
