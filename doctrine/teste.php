<?php 



require_once __DIR__ . '/vendor/autoload.php';
// require_once 'src/Helper/EntityManagerCreator.php';

use Alura\Doctrine\Helper\EntityManagerCreator;


$entityManager = EntityManagerCreator::createEntityManager();

var_dump($entityManager);
