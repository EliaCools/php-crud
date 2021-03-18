<?php


class Group
{
    private int $groupID;
    private string $name;
    private string $location;
    private string $subject;



    public function __construct($name,$location,$subject){


        $this->name=$name;
        $this->location=$location;
        $this->subject=$subject;

    }
    public function getGroupID(): int
    {
        return $this->groupID;
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