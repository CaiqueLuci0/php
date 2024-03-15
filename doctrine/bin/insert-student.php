<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student($argv[1]); //No index 0 está o nome do arquivo que o programa está rodando (insert-student.php)

$phone1 = new Phone('11 96075-3138');
// $entityManager->persist($phone1);
$student->addPhone($phone1); 

$phone2 = new Phone('11 98402-1555');
// $entityManager->persist($phone2);
$student->addPhone($phone2);

$entityManager->persist($student); //Monitora alterações no objeto passado como argumento
$entityManager->flush(); // Envia tudo que o entityManager estava monitorando para o banco de dados

