<?php

namespace App\Entity;

use App\Repository\EvaluationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvaluationRepository::class)]
class Evaluation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?float $valeurneuf = null;

    #[ORM\Column]
    private ?float $valeurvenal = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observation = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Utilisateur $id_expert = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: 'id_vehicule', referencedColumnName: 'matricule')]
    private ?Vehicule $id_vehicule = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getValeurneuf(): ?float
    {
        return $this->valeurneuf;
    }

    public function setValeurneuf(float $valeurneuf): static
    {
        $this->valeurneuf = $valeurneuf;

        return $this;
    }

    public function getValeurvenal(): ?float
    {
        return $this->valeurvenal;
    }

    public function setValeurvenal(float $valeurvenal): static
    {
        $this->valeurvenal = $valeurvenal;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): static
    {
        $this->observation = $observation;

        return $this;
    }

    public function getIdExpert(): ?Utilisateur
    {
        return $this->id_expert;
    }

    public function setIdExpert(?Utilisateur $id_expert): static
    {
        $this->id_expert = $id_expert;

        return $this;
    }

    public function getIdVehicule(): ?Vehicule
    {
        return $this->id_vehicule;
    }

    public function setIdVehicule(?Vehicule $id_vehicule): static
    {
        $this->id_vehicule = $id_vehicule;

        return $this;
    }
}
