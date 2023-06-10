<?php
namespace mangers;
include("Student.php");
include("Loggable.php");


use Loggable;
use students\Student;

class Manager{
    use Loggable;
    protected $students = [];
    protected readonly string $ID;
    // add a student, retrieve a student by ID, update student details, and delete a student.

    public function addStudent(Student $student){
        $this->students[$student->getID()] = $student;
        $this->log("Added student id:{$student->getID()}  name:{$student->getName()}");
    }

    public function updateStudent(Student $student){
        $this->students[$student->getID()] = $student;
        
        $this->log("Added student id:{$student->getID()}  name:{$student->getName()}");
    }

        public function deleteStudent(Student $student)
    {
        unset($this->students[$student->getId()]);
        $this->log("Delete student id:{$student->getID()}  name:{$student->getName()}");
    }

        public function retriveStudent($id) {
        if (isset($this->students[$id])) {
            $this->log("Retrieved student id:{$this->students[$id]->getID()} name:{$this->students[$id]->getName()} ");
        }
        return null;
    }

}