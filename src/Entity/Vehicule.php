<?php

namespace App\Entity;
use App\Enum\typeVeh;

use App\Repository\VehiculeRepository;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
class Vehicule
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $matricule = null;

    #[ORM\Column]
    private ?typeVeh $type = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column(nullable: true)]
    private ?float $prix = null;

    #[ORM\Column(type: Types::BLOB)]
    private $carte_grise = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToOne(inversedBy: 'vehicules')]
    private ?Utilisateur $id_user = null;

    public function getMatricule(): ?int
    {
        return $this->matricule;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(String $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): static
    {
        $this->modele = $modele;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCarteGrise()
    {
        return $this->carte_grise;
    }

    public function setCarteGrise($carte_grise): static
    {
        $this->carte_grise = $carte_grise;

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
