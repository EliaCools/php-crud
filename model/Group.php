<?php


class Group
{
    private string $name;
    private string $subject;
    private string $location;
    private string $startDate;

    public function __construct($name,$subject,$location,$startDate){

        $this->name=$name;
        $this->subject=$subject;
        $this->location=$location;
        $this->startDate=$startDate;

    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getStartDate(): string
    {
        return $this->startDate;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }
}