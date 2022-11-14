<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="proizvodi_akcija")
 * @ORM\Entity(repositoryClass="App\Repository\ProizvodAkcijaRepository")
 * @ORM\HasLifecycleCallbacks
 */
class ProizvodAkcija {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Proizvod")
     * @ORM\JoinColumn(name="fk_proizvod_id", referencedColumnName="id")
     */
    private $proizvod;

    /**
     * @ORM\ManyToOne(targetEntity="Akcija")
     * @ORM\JoinColumn(name="fk_akcija_id", referencedColumnName="id")
     */
    private $akcija;

    /**
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    protected $created;

    /**
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this->created = new \DateTime();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getProizvod(): ?Proizvod {
        return $this->proizvod;
    }

    public function setProizvod(Proizvod $proizvod): self {
        $this->proizvod = $proizvod;

        return $this;
    }

    public function getAkcija(): ?Akcija {
        return $this->akcija;
    }

    public function setAkcija(Akcija $akcija): self {
        $this->akcija = $akcija;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface {
        return $this->created;
    }

    public function setCreated(?\DateTimeInterface $created): self {
        $this->created = $created;

        return $this;
    }
}
