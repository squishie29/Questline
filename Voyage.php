<?php

namespace App\Entity;

use App\Repository\VoyageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=VoyageRepository::class)
 */
class Voyage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\NotBlank(message="Destination is required")
     */
    private $Destination;

    /**
     * @ORM\Column(type="integer")
     ** @Assert\Positive(message="The price should be positive")
     */
    private $Prix;

    /**
     * @ORM\Column(type="string", length=320)
     */
    private $Periode;

    /**
     * @ORM\OneToMany(targetEntity=Guide::class, mappedBy="voyage")
     */
    private $guide;

    public function __construct()
    {
        $this->guide = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDestination(): ?string
    {
        return $this->Destination;
    }

    public function setDestination(string $Destination): self
    {
        $this->Destination = $Destination;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getPeriode(): ?string
    {
        return $this->Periode;
    }

    public function setPeriode(string $Periode): self
    {
        $this->Periode = $Periode;

        return $this;
    }

    /**
     * @return Collection|Guide[]
     */
    public function getGuide(): Collection
    {
        return $this->guide;
    }

    public function addGuide(Guide $guide): self
    {
        if (!$this->guide->contains($guide)) {
            $this->guide[] = $guide;
            $guide->setVoyage($this);
        }

        return $this;
    }

    public function removeGuide(Guide $guide): self
    {
        if ($this->guide->removeElement($guide)) {
            // set the owning side to null (unless already changed)
            if ($guide->getVoyage() === $this) {
                $guide->setVoyage(null);
            }
        }

        return $this;
    }
}