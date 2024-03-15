<?php 

namespace Alura\Doctrine\Entity;

use Alura\Doctrine\Entity\Student;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;

#[Entity()]
class Course
{
    #[Id, GeneratedValue, Column]
    public int $id;

    #[ManyToMany(
        targetEntity: Student::class, 
        inversedBy: "courses", // Em OneToOne e OneToMany: mappedBy refere-se à entidade owner(que recebe a foreign key) e o inversedBy refere-se ao lado oposto (não recebe fk).
        cascade: ["persist", "remove"]
    )]
    private Collection $students;

    public function __construct(
        #[Column]
        public readonly string $nome
    )
    {
        $this->students = new ArrayCollection();
    }

    public function addStudent(Student $student){
        if(!$this->students->contains($student)){
        $this->students->add($student);
        $student->enrollInCourse($this);
        }
    }

    /**
     * @return Collection<Students>
     */
    public function students(): Collection
    {
        return $this->students;
    }
}