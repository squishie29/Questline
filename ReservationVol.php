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
    private $id_res;

   
    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_personne;


    /**
     * @ORM\Column(type="datetime")
     */
    private $date_debut;
    /**
     * @ORM\Column(type="datetime")
     */
    private $date_fin;
    
    public function getid_res(): ?int
    {
        return $this->id_res;
    }
    
    public function setid_res(Int $id_res): self
    {
        $this->id_res = $id_res;

        return $this;
    }
    public function getnombre_personne(): ?int
    {
        return $this->nombre_personne;
    }

    public function setnombre_personne(int $nombre_personne): self
    {
        $this->nombre_personne = $nombre_personne;

        return $this;
    }


    public function getdate_debut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setdate_debut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }
    public function getdate_fin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setdate_fin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }
}
