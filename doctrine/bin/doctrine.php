<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

// replace with file to your own project bootstrap
require_once __DIR__ . '/../vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = \Alura\Doctrine\Helper\EntityManagerCreator::createEntityManager();

return ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);