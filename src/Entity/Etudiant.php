<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
class Etudiant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $nom;

    #[ORM\Column(type: 'string', length: 100, nullable: true)]
    private $prenom;

    #[ORM\ManyToOne(targetEntity: Section::class, inversedBy: 'etudiants')]
    private $appartenir;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAppartenir(): ?section
    {
        return $this->appartenir;
    }

    public function setAppartenir(?section $appartenir): self
    {
        $this->appartenir = $appartenir;

        return $this;
    }
}
