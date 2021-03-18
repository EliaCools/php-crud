<?php


class Group
{
    private string $name;
    private string $location;
    private string $subject;



    public function __construct(string $name, string $location, string $subject)
    {
        $this->name = $name;
        $this->location = $location;
        $this->subject = $subject;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }
}