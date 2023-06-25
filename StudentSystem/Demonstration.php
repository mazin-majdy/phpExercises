<?php

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
echo '<br>';
