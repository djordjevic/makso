<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="proizvodi_atributi")
 * @ORM\Entity(repositoryClass="App\Repository\ProizvodAtributiRepository")
 * @ORM\HasLifecycleCallbacks
 */
class ProizvodAtributi {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Kategorija")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $kategorija;

    /**
     * @ORM\Column(name="date_added", type="datetime")
     */
    private $dateAdded;

    /**
     * @ORM\Column(name="active", type="boolean")
     */
    private $active = 1;


    /**
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this->dateAdded = new \DateTime();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(string $name): self {
        $this->name = $name;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface {
        return $this->dateAdded;
    }

    public function setDateAdded(\DateTimeInterface $dateAdded): self {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    public function getActive(): ?bool {
        return $this->active;
    }

    public function setActive(bool $active): self {
        $this->active = $active;

        return $this;
    }
    /**
     * @return Kategorija
     */
    public function getKategorija(): ?Kategorija {
        return $this->kategorija;
    }

    /**
     * @param Kategorija $kategorija
     */
    public function setKategorija(?Kategorija $kategorija): void {
        $this->kategorija = $kategorija;
    }
}
