<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Model\Notification;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Event::class, inversedBy="reservations")
     */
    private $event;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private $date_reservation;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_participant;

    /**
     * @ORM\OneToMany(targetEntity=Notifications::class, mappedBy="reservation",cascade={"all"},orphanRemoval=true)
     */
    private $notifications;

    public function __construct()
    {
        $this->notifications= new ArrayCollection();
    }
    /**
     * @return Collection|Notifications[]
     */
    public function getNotifications(): Collection
    {
        return $this->notifications;
    }
    public function addNotifications(Notifications $notifications): self
    {
        if (!$this->notifications->contains($notifications)) {
            $this->notifications[] = $notifications;
            $notifications->setReservation($this);
        }

        return $this;
    }

    public function removeNotifications(Notifications $notifications): self
    {
        if ($this->notifications->removeElement($notifications)) {
            // set the owning side to null (unless already changed)
            if ($notifications->getReservation() === $this) {
                $notifications->setReservation(null);
            }
        }

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->date_reservation;

    }

    public function setDateReservation(\DateTimeInterface $date_reservation): self
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }

    public function getNbrParticipant(): ?int
    {
        return $this->nbr_participant;
    }

    public function setNbrParticipant(int $nbr_participant): self
    {
        $this->nbr_participant = $nbr_participant;

        return $this;
    }
}
