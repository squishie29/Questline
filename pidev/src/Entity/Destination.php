<?php
 
namespace App\Entity;
 
use App\Repository\DestinationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
 
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
    private $id;
 
    /**
     * @ORM\Column(type="datetime")
     */
    private $date;
 
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;
 
    /**
     * @ORM\OneToMany(targetEntity=Vol::class, mappedBy="Destinations", orphanRemoval=true)
     */
    private $vols;
 
    public function __construct()
    {
        $this->vols = new ArrayCollection();
    }
 
    public function getId(): ?int
    {
        return $this->id;
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
 
    /**
     * @return Collection|Vol[]
     */
    public function getVols(): Collection
    {
        return $this->vols;
    }
 
    public function addVol(Vol $vol): self
    {
        if (!$this->vols->contains($vol)) {
            $this->vols[] = $vol;
            $vol->setDestinations($this);
        }
 
        return $this;
    }
 
    public function removeVol(Vol $vol): self
    {
        if ($this->vols->removeElement($vol)) {
            // set the owning side to null (unless already changed)
            if ($vol->getDestinations() === $this) {
                $vol->setDestinations(null);
            }
        }
 
        return $this;
    }
}