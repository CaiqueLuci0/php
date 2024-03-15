<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;
use Doctrine\ORM\EntityManager;

$entityManager = EntityManagerCreator::createEntityManager();

$student = $entityManager->find(Student::class, $argv[1]);

$student->name = $argv[2];

$entityManager->flush(); //persist não é necessário quando o proprio doctrine retorna o objeto do banco de dados, pois ela já está sendo observada