<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Entity\Course;
use Alura\Doctrine\Helper\EntityManagerCreator;

$manager = EntityManagerCreator::createEntityManager();

$student = $manager->find(Student::class, $argv[1]);

$course = $manager->find(Course::class, $argv[2]);

$student->enrollInCourse($course);

$manager->flush();