<?php
namespace Classes\Courses;
class Courses
{
  private $id;
  public $name;

  public function __construct($name)
  {
    $this->id = uniqid();
    $this->name = $name;
  }

  public function getID()
  {
    return $this->id;
  }
}
