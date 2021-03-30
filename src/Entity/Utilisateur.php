<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur implements UserInterface,\Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("utilisateurs")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     * @Assert\Regex(
     * pattern="/\d/",
     * match=false,
     * message="Your name cannot contain a number"
     * )
     * @Groups("utilisateurs")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     *  @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     * @Groups("utilisateurs")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("utilisateurs")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("utilisateurs")
     */
    private $mdp;

    /**
     * @ORM\OneToMany(targetEntity=Review::class, mappedBy="idUtil", orphanRemoval=true)
     * @Groups("utilisateurs")
     */
    private $idrev;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("utilisateurs")
     */
    private $img;

    /**
     * @ORM\Column(type="array")
     *@Groups("utilisateurs")
     */
    private $roles = [];


    /**
     * @ORM\OneToMany(targetEntity=ReservationHotel::class, mappedBy="userId", orphanRemoval=true)
     */
    private $reservationHotels;

    /**
     * @return Collection|ReservationHotel[]
     */
    public function getReservationHotels(): Collection
    {
        return $this->reservationHotels;
    }

    public function addReservationHotel(ReservationHotel $reservationHotel): self
    {
        if (!$this->reservationHotels->contains($reservationHotel)) {
            $this->reservationHotels[] = $reservationHotel;
            $reservationHotel->setUserId($this);
        }

        return $this;
    }

    public function removeReservationHotel(ReservationHotel $reservationHotel): self
    {
        if ($this->reservationHotels->removeElement($reservationHotel)) {
            // set the owning side to null (unless already changed)
            if ($reservationHotel->getUserId() === $this) {
                $reservationHotel->setUserId(null);
            }
        }

        return $this;
    }

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
    public function getRoles(): array
    {
        $roles = $this->roles;

        if (empty($roles)) {
            $roles[] = 'ROLE_USER';
        }

        return array_unique($roles);
    }
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    public function getSalt(){
        return null;
    }
    public function eraseCredentials()
    {

    }

    public function serialize()
    {
        // TODO: Implement serialize() method.
        return serialize([
            $this->id,
            $this->email,
            $this->mdp,
    ]);
    }
    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
        list(
            $this->id,
            $this->email,
            $this->mdp,
            ) = unserialize($serialized,['allowed_classes' => false]);

    }
    public function getUsername(): ?string
    {
        // TODO: Implement getUsername() method.

        return $this->getEmail();

    }

    public function getPassword():  ?string
    {
        // TODO: Implement getPassword() method.
        return $this->getMdp();
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }


}