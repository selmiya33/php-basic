<?php
namespace Courses;
class Course{
    protected readonly string $ID;
    public $Name;

    public function __construct($id, $name){
        $this->ID = $id;
        $this->Name = $name;

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
}