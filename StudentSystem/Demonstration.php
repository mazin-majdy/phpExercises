<?php
/*
  Objective:

  Create a PHP application that manages student information using classes, namespaces, and traits.

  Requirements:
  1. Implement a "Student" class with the following properties:
  ID (readonly unique identifier)
  Name
  Email
  Courses (an array of "Course" objects)
  2. Implement a "Course" class with the following properties:
  ID (readonly unique identifier)
  Name
  3. Implement a "Manager" class that manages student objects:
  It should include methods to: add a student, retrieve a student by ID, update student details, and delete a student.
  The Manager class should use a trait called "Loggable" that logs any changes made to student records into a "log file".
  4. Use namespaces to organize the Student, Course and Manager classes into appropriate namespaces.

  5. Create a script to demonstrate the functionality of the Student Management System:
  Instantiate the Manager class and perform operations like adding students, updating student details, retrieving student information, and deleting students.
  Ensure that the "Loggable" trait captures and logs any changes made to student records.


*/

use Classes\Student\Student;
use Classes\Courses\Courses;
use Classes\Manager\Manager;
// include('./Classes/Manager.php');
// include('./Classes/Student.php');

include __DIR__ . '/autoload.php';
$manager = new Manager();

$std1 = new Student('Mazin Majdy', 'mazin@gmail.com');
$manager->addStd($std1);

$std2 = new Student('Hasan Mohammed', 'hasan@gmail.com');
$manager->addStd($std2);

$std3 = new Student('Maha Ehab', 'maha@gmail.com');
$manager->addStd($std3);

$manager->updateStudent($std3, 'Amal', 'amal@gmail.com');

$retrievedStudent = $manager->getStudentById($std2->getId());
if ($retrievedStudent) {
  echo "Retrieved student: " . $retrievedStudent->name . PHP_EOL;
} else {
  echo "Student not found!" . PHP_EOL;
}

$std1->addCourse('Mobile');
$std1->addCourse('Web');
$std1->addCourse('Programming');

print_r($std1->courses);
$manager->deleteStudent($std1);
