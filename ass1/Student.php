<?php
namespace stdClass;

class Student{
    protected readonly string $ID;
    public $Name;
    public $Email;
    public $details;
    public $Courses = [];

    // protected static $counter = 0;

    public function __construct($id,$name, $email){
        $this->ID = $id;
        $this->Name = $name;
        $this->Email =$email;
    }
    
    public function getID()
    {
        return $this->ID;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    public function getCourses()
    {
        return $this->Courses;
    }

    public function setCourses($Courses)
    {
        $this->Courses[] = $Courses;

        return $this;
    }

} 
