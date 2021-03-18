<?php

class Teacher
{
    private int $ID;
    private string $firstName;
    private string $lastName;
    private string $email;
    private int $phone;

    public function __construct($ID,$fName,$lName,$email,$phone){
        $this->ID = $ID;
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->email = $email;
        $this->phone = $phone;

    }
}