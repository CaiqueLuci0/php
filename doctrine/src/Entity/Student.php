<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Cache\CollectionCacheKey;
use Doctrine\ORM\Mapping\ManyToMany;

#[Entity()]
class Student
{

    #[Id, GeneratedValue, Column]
    public int $id;

    #[OneToMany(
        targetEntity: Phone::class,
        mappedBy: "student", //Informa ao mapeador do doctrine qual atributo do outro objeto que representa o objeto atual
        cascade:["persist", "remove"] //Faz operação em cascata. Quando um Student é mapeado, seus telefones também serão mapeados automáticamente.
        )]
    private Collection $phones;

    #[ManyToMany(
        targetEntity: Course::class,
        mappedBy: "students",
        cascade:["persist", "remove"]
    )]
    private Collection $courses;

    public function __construct(
        #[Column]
        public string $name
    ){
        $this->phones = new ArrayCollection();
        $this->courses = new ArrayCollection();
    } 

    public function addPhone(Phone $phone): void
    {
        $this->phones->add($phone);
        $phone->setStudent($this);
    }

    public function enrollInCourse(Course $course):void
    {
        if(!$this->courses->contains($course)){
        $this->courses->add($course);
        $course->addStudent($this);
        }
    }

    /**
     * @return Collection<Phone>
     */
    public function phones(): Collection
    {
        return $this->phones;
    }


    /**
     * @return Collection<Course>
     */
    public function courses(): Collection
    {
        return $this->courses;
    }
}
