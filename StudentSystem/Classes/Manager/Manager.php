<?php

namespace Classes\Manager;

use Classes\Student\Student;
trait Store
{
  public function log(string $msg): void
  {
    $logFile = fopen('log.txt', 'a');
    fwrite($logFile, '(' .date('l jS \of F Y h:i:s A') . ') => ' . $msg . PHP_EOL);
    fclose($logFile);
  }
}

class Manager
{
  use Store;

  private $students = [];

  public function addStd(Student $student): void
  {
    $this->students[$student->getID()] = $student;
    $this->log('Add student: '. $student->name);
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

  public function deleteStudent(Student $student): void
  {
    $studentId = $student->getID();
    unset($this->students[$studentId]);
    $this->log('Deleted Student ' . $student->name);
  }
}
