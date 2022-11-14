<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="dobavljaci")
 * @ORM\Entity(repositoryClass="App\Repository\DobavljacRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Dobavljac {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="seller_name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(name="date_added", type="datetime", nullable=true)
     */
    private $dateAdded;


    /**
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active = true;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    protected $updated;

    /**
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this->dateAdded = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->updated = new \DateTime();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(?string $name): self {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string {
        return $this->image;
    }

    public function setImage(string $image): self {
        $this->image = $image;

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

    public function setActive(?bool $active): self {
        $this->active = $active;

        return $this;
    }

}
