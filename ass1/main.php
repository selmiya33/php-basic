<?php
namespace tester;
include("Course.php");
include("Manager.php");
// include("Student.php");


use Courses\Course;
use mangers\Manager;
use stdClass\Student;

$manager = new Manager();

$std1 = new Student("1","moath","eng@gmail.com");
$std2 = new Student("2","ali","ali@gmail.com");
$std3 = new Student("3","ahmead","ahmead@gmail.com");

// echo var_dump($std1,$std2,$std3);

$course1 = new Course("1","laravel");
$course2 = new Course("2","php");
$course3 = new Course("3", "html-css");

// echo var_dump($course1,$course2);


$std1->setCourses($course1);
$std2->setCourses($course2);
$std3->setCourses($course3);

$manager->addStudent($std1);
$manager->addStudent($std2);
$manager->addStudent($std3);

// Retrieving student information
$manager->retriveStudent(2);

//delete
$manager->deleteStudent($std1);
