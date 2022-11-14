<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="proizvodi_statistika")
 * @ORM\Entity(repositoryClass="App\Repository\ProizvodStatistikaRepository")
 */
class ProizvodStatistika
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="statistics_id", type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Proizvod")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $proizvod;

    /**
     * @ORM\Column(name="visits_number", type="integer")
     */
    private $visits;


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

    public function getVisits(): ?string {
        return $this->visits;
    }

    public function setVisits(int $visits): self {
        $this->visits = $visits;
        return $this;
    }
}
