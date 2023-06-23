<?php

namespace Classes\Manager;

use Traits\Store\Store;
use Classes\Student\Student;

class Manager
{
  use Store;

  private $students = [];

  public function addStd(Student $student): void
  {
    $this->students[$student->getID()] = $student;
    $this->log('Add student', ['name' => $student->name]);
  }

  public function getStudentById(string $studentId): ?Student
  {
    return $this->students[$studentId] ?? null;
  }

  public function updateStudent(Student $student, string $name, string $email): void
  {
    $student->name = $name;
    $student->email = $email;
    $this->log('Updated Student: ' . $student->name);
  }

  public function deleteStudent(Student $student, string $Id): void
  {
    $studentId = $student->getID();
    unset($this->students[$studentId]);
    $this->log('Deleted Student ' . $student->name);
  }
}
