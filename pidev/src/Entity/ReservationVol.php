<?php
 
namespace App\Entity;
 
use App\Repository\ReservationVolRepository;
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity(repositoryClass=ReservationVolRepository::class)
 */
class ReservationVol
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
 
    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_personne;
 
    /**
     * @ORM\Column(type="datetime")
     */
    private $date_res;
 
    /**
     * @ORM\ManyToOne(targetEntity=Vol::class, inversedBy="reservationVols")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vols;
 
    public function __toString()
    {
        return "aaa";
    }
    public function getId(): ?int
    {
        return $this->id;
    }
 
    public function getNombrePersonne(): ?int
    {
        return $this->nombre_personne;
    }
 
    public function setNombrePersonne(int $nombre_personne): self
    {
        $this->nombre_personne = $nombre_personne;
 
        return $this;
    }
 
    public function getDateRes(): ?\DateTimeInterface
    {
        return $this->date_res;
    }
 
    public function setDateRes(\DateTimeInterface $date_res): self
    {
        $this->date_res = $date_res;
 
        return $this;
    }
 
    public function getVols(): ?Vol
    {
        return $this->vols;
    }
 
    public function setVols(?Vol $vols): self
    {
        $this->vols = $vols;
 
        return $this;
    }
}