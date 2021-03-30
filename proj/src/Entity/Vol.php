<?php
 
namespace App\Entity;
 
use App\Repository\VolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

 
/**
 * @ORM\Entity(repositoryClass=VolRepository::class)
 */
class Vol
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
     * @ORM\Column(type="float")
     * @Assert\Positive
     */
    private $prix;
 
    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\Positive
     *
     */
    private $nbplace;
 
    /**
     * @ORM\OneToMany(targetEntity=ReservationVol::class, mappedBy="vols", orphanRemoval=true)
     *
     */
    private $reservationVols;
 
    /**
     * @ORM\ManyToOne(targetEntity=Destination::class, inversedBy="vols")
     */
    private $Destinations;

    
 
    public function __toString()
    {
        $x=$this->getId();
        $a=strval($x);
        return $a;
    }

    public function __construct()
    {
        $this->reservationVols = new ArrayCollection();
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
 
    public function getPrix(): ?float
    {
        return $this->prix;
    }
 
    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
 
        return $this;
    }
 
    public function getNbplace(): ?int
    {
        return $this->nbplace;
    }
 
    public function setNbplace(int $nbplace): self
    {
        $this->nbplace = $nbplace;
 
        return $this;
    }
 
    /**
     * @return Collection|ReservationVol[]
     */
    public function getReservationVols(): Collection
    {
        return $this->reservationVols;
    }
 
    public function addReservationVol(ReservationVol $reservationVol): self
    {
        if (!$this->reservationVols->contains($reservationVol)) {
            $this->reservationVols[] = $reservationVol;
            $reservationVol->setVols($this);
        }
 
        return $this;
    }
 
    public function removeReservationVol(ReservationVol $reservationVol): self
    {
        if ($this->reservationVols->removeElement($reservationVol)) {
            // set the owning side to null (unless already changed)
            if ($reservationVol->getVols() === $this) {
                $reservationVol->setVols(null);
            }
        }
 
        return $this;
    }
 
    public function getDestinations(): ?Destination
    {
        return $this->Destinations;
    }
 
    public function setDestinations(?Destination $Destinations): self
    {
        $this->Destinations = $Destinations;
 
        return $this;
    }
}
 