<?php

namespace App\Entity;

use App\Repository\BonbonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BonbonRepository::class)]
class Bonbon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $poidsNet = null;

    #[ORM\Column]
    private ?int $quantiteDansLeSachet = null;

    #[ORM\Column]
    private ?bool $sansSucre = null;

    #[ORM\Column]
    private ?int $quantiteEnStock = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Marque $marque = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPoidsNet(): ?int
    {
        return $this->poidsNet;
    }

    public function setPoidsNet(int $poidsNet): static
    {
        $this->poidsNet = $poidsNet;

        return $this;
    }

    public function getQuantiteDansLeSachet(): ?int
    {
        return $this->quantiteDansLeSachet;
    }

    public function setQuantiteDansLeSachet(int $quantiteDansLeSachet): static
    {
        $this->quantiteDansLeSachet = $quantiteDansLeSachet;

        return $this;
    }

    public function isSansSucre(): ?bool
    {
        return $this->sansSucre;
    }

    public function setSansSucre(bool $sansSucre): static
    {
        $this->sansSucre = $sansSucre;

        return $this;
    }

    public function getQuantiteEnStock(): ?int
    {
        return $this->quantiteEnStock;
    }

    public function setQuantiteEnStock(int $quantiteEnStock): static
    {
        $this->quantiteEnStock = $quantiteEnStock;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): static
    {
        $this->marque = $marque;

        return $this;
    }
}
