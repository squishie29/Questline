<?php

namespace App\Entity;

use App\Repository\NotificationRepository;
use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Entity\Notification;

/**
 * @ORM\Entity(repositoryClass=NotificationRepository::class)
 */
class Notifications
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $seen;

    /**
     * @ORM\ManyToOne(targetEntity=Reservation::class, inversedBy="notifications")
     */

    private $reservation;


    public function getReservation(): ?reservation
    {
        return $this->reservation;
    }

    public function setReservation(?reservation $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSeen(): ?int
    {
        return $this->seen;
    }

    public function setSeen(int $seen): self
    {
        $this->seen = $seen;

        return $this;
    }
}
