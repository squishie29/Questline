<?php

namespace App\Entity;

use App\Repository\DestinationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DestinationRepository::class)
 */
class Destination
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id_dest;

    
    /**
     * @ORM\Column(type="datetime")
     */
    private $date;


    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    public function __toString()
    {
        return $this->nom;
    }
    

    public function getId_dest(): ?int
    {
        return $this->id_dest;
    }
    
    public function setid_dest(Int $id_dest): self
    {
        $this->id_dest = $id_dest;

        return $this;
    }
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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


