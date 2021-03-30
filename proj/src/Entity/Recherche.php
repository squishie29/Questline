<?php

namespace App\Entity;

use App\Repository\RechercheRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=RechercheRepository::class)
 */
class Recherche
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;



    /**
     * @ORM\Column(type="string")
     */
    private $nom;

    public function __toString()
    {
        return $this->nom;
    }
    

    public function getid(): ?int
    {
        return $this->id;
    }
    
    public function setid(Int $id): self
    {
        $this->id = $id;

        return $this;
    }
 
    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    
}


