<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     * @Assert\Length(min=10) 
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $mdp;

    /**
     * @ORM\OneToMany(targetEntity=Review::class, mappedBy="idUtil", orphanRemoval=true)
     */
    private $idrev;

    public function __construct()
    {
        $this->idrev = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * @return Collection|Review[]
     */
    public function getIdrev(): Collection
    {
        return $this->idrev;
    }

    public function addIdrev(Review $idrev): self
    {
        if (!$this->idrev->contains($idrev)) {
            $this->idrev[] = $idrev;
            $idrev->setIdUtil($this);
        }

        return $this;
    }

    public function removeIdrev(Review $idrev): self
    {
        if ($this->idrev->removeElement($idrev)) {
            // set the owning side to null (unless already changed)
            if ($idrev->getIdUtil() === $this) {
                $idrev->setIdUtil(null);
            }
        }

        return $this;
    }
    public function __toString(){
        return $this->nom;
    }
}
