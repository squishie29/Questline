<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReviewRepository::class)
 */
class Review
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     * 
     *@Assert\NotBlank
     */
    private $comment;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Regex("/^\w+/")
     */
    private $rating;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="idrev")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUtil;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getIdUtil(): ?Utilisateur
    {
        return $this->idUtil;
    }

    public function setIdUtil(?Utilisateur $idUtil): self
    {
        $this->idUtil = $idUtil;

        return $this;
    }

   
}
