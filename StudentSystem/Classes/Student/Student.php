<?php

namespace Classes\Student;
use Classes\Manager\Store;

class Student
{
  use Store;
  private readonly string $id;
  public $name;
  public $email;
  public $courses;

  public function __construct($name, $email)
  {
    $this->id = uniqid();
    $this->name = $name;
    $this->email = $email;
    $this->courses = array();
  }

  public function getID()
  {
    return $this->id;
  }


  public function addCourse($course)
  {
    $this->courses[] = $course;
    $this->log("$course Was Registered");
  }
}
