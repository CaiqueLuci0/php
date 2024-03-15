<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Helper\EntityManagerCreator;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\EntityManagerClosed;
use Doctrine\ORM\Mapping\Entity;

$manager = EntityManagerCreator::createEntityManager();

$phone = $manager->find(Phone::class, $argv[1]);

$manager->remove($phone);
$manager->flush();
