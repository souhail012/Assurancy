<?php

namespace App\Entity;

use App\Repository\ImmobilierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Enum\typeImm;

#[ORM\Entity(repositoryClass: ImmobilierRepository::class)]
class Immobilier
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $id_fiscal = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column]
    private ?typeImm $type = null;

    #[ORM\Column]
    private ?int $superficie = null;

    #[ORM\Column(type: Types::BLOB)]
    private $titre_prop = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToOne(inversedBy: 'immobiliers')]
    private ?Utilisateur $id_user = null;

    public function getId(): ?int
    {
        return $this->id_fiscal;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getType(): ?typeImm
    {
        return $this->type;
    }

    public function setType(typeImm $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSuperficie(): ?int
    {
        return $this->superficie;
    }

    public function setSuperficie(int $superficie): static
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getTitreProp()
    {
        return $this->titre_prop;
    }

    public function setTitreProp($titre_prop): static
    {
        $this->titre_prop = $titre_prop;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getIdUser(): ?Utilisateur
    {
        return $this->id_user;
    }

    public function setIdUser(?Utilisateur $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }
}
