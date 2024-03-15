<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Entity\Course;
use Alura\Doctrine\Helper\EntityManagerCreator;

$manager = EntityManagerCreator::createEntityManager();

// $repositorio = $manager->getRepository(Course::class);

$course = new Course($argv[1]);

$manager->persist($course);
$manager->flush();



