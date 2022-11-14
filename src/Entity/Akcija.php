<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="akcije", indexes={@ORM\Index(name="dates", columns={"datum_pocetka", "datum_zavsetka"}),
 *                                    @ORM\Index(name="endDate", columns={"datum_zavsetka"})})
 * @ORM\Entity(repositoryClass="App\Repository\AkcijaRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Akcija {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="naziv", type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(name="datum_pocetka", type="date")
     */
    protected $startDate;

    /**
     * @ORM\Column(name="datum_zavsetka", type="date")
     */
    protected $endDate;

    /**
     * @ORM\Column(name="num_of_days", type="integer")
     */
    protected $numOfDays = 30;

    /**
     * @ORM\Column(name="active", type="boolean")
     */
    protected $isOdluka = false;

    /**
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    protected $created;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    protected $updated;

    /**
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this->created = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->updated = new \DateTime();
    }

    public function isFinished() {
        $d = $this->getEndDate()->format('Y-m-d 23:59:59');
        $end = \DateTime::createFromFormat('Y-m-d H:i:s', $d);

        return new \DateTime() > $end;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle(string $title): self {
        $this->title = $title;

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

    public function getNumOfDays(): ?int {
        return $this->numOfDays;
    }

    public function setNumOfDays(int $numOfDays): self {
        $this->numOfDays = $numOfDays;

        return $this;
    }

    public function getIsOdluka(): ?bool {
        return $this->isOdluka;
    }

    public function setIsOdluka(bool $isOdluka): self {
        $this->isOdluka = $isOdluka;

        return $this;
    }
}
