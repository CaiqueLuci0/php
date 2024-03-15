<?php 


use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = $entityManager->find(Student::class, $argv[1]);

$entityManager->remove($student);
$entityManager->flush();

// $student = $entityManager->getPartialReference(Student::class, $argv[2]);

// var_dump($student);

// $entityManager->remove($student);
// $entityManager->flush();