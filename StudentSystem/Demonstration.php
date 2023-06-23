<?php

use Classes\Student\Student;
use Classes\Courses\Courses;
use Classes\Manager\Manager;
include('./Classes/Manager.php');

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
