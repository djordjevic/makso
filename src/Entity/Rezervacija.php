<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="rezervacije", indexes={@ORM\Index(name="dates", columns={"datum_pocetka", "datum_zavsetka"}),
 *                                    @ORM\Index(name="endDate", columns={"datum_zavsetka"})})
 * @ORM\Entity(repositoryClass="App\Repository\RezervacijaRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Rezervacija {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="ime", type="string", length=255)
     */
    protected $ime;

    /**
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @ORM\Column(name="mobilni", type="string", length=255)
     */
    protected $mobilni;

    /**
     * @ORM\Column(name="datum_pocetka", type="date")
     */
    protected $startDate;

    /**
     * @ORM\Column(name="datum_zavrsetka", type="date")
     */
    protected $endDate;

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

    public function getIme(): ?string {
        return $this->ime;
    }

    public function setIme(string $ime): self {
        $this->ime = $ime;

        return $this;
    }

    public function getEmail(): ?string
    {
        return trim($this->email);
    }

    public function setEmail($email): self
    {
        $this->email = trim($email);
        return $this;
    }

    public function getMobilni(): ?string
    {
        return trim($this->mobilni);
    }

    public function setMobilni($mobilni): self
    {
        $this->mobilni = trim($mobilni);
        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self {
        $this->endDate = $endDate;

        return $this;
    }

}
