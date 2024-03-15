<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Entity\Course;
use Alura\Doctrine\Helper\EntityManagerCreator;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$studentRepository = $entityManager->getRepository(Student::class);

$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
    echo "ID: $student->id \nNome: $student->name \nTelefones: ";

    echo str_replace(",", ", ", implode(
        ",",
        $student->phones()->map(fn (Phone $phone) => $phone->numero
        )
        ->toArray()
    )) . "\n";

    echo "Cursos: " . str_replace(",", ", ", implode(
        ",", 
        $student->courses()->map(fn (Course $course) =>$course->nome)
        ->toArray()
    )) . "\n---------------------------------------------------------------------------------------\n";

    // foreach($student->phones() as $phone){
    //     echo $phone->numero;
    // }
}

// echo "\n FIND(2) \n";
// $student = $studentRepository->find(2);

// var_dump($student);

// echo "\n FINDBY \n";
// $result = $studentRepository->findBy([
//     "name" => "Caio Algoritmos"
// ]);

// var_dump($result);

// echo"\n FINDONEBY \n";
// $result = $studentRepository->findOneBy([
//     "name" => "Caio Algoritmos"
// ]);

// var_dump($result);

// echo "\n COUNT() \n";
// echo $studentRepository->count([]);


// echo"\n FINDBY DESC \n ";
// var_dump($studentRepository->findBy(["name" => "Caique"], ["id" => "DESC"], null, null));