<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="proizvodjaci", indexes={@ORM\Index(name="NewIndex1", columns={"active", "show_brand"}),
 *                                          @ORM\Index(name="brand_name_seo", columns={"brand_name_seo"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProizvodjacRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Proizvodjac {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="brand_name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(name="brand_name_seo", type="string", length=255, nullable=true)
     */
    private $seo;

    /**
     * @ORM\Column(name="brand_description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="brand_image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(name="date_added", type="datetime")
     */
    private $dateAdded;

    /**
     * @ORM\Column(name="show_brand", type="boolean", options={"comment":"da li se prikazuje na website-u"})
     */
    private $showBrand;

    /**
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;


    /**
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=true)
     */
    private $metaTitle;

    /**
     * @ORM\Column(name="meta_description", type="text", nullable=true)
     */
    private $metaDescription;

    /**
     * @ORM\Column(name="meta_keywords", type="text", nullable=true)
     */
    private $metaKeywords;


    /**
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    protected $updated;


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

    public function getSeo(): ?string {
        return $this->seo;
    }

    public function setSeo(?string $seo): self {
        $this->seo = $seo;

        return $this;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(?string $description): self {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string {
        return $this->image;
    }

    public function setImage(?string $image): self {
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

    public function getShowBrand(): ?bool {
        return $this->showBrand;
    }

    public function setShowBrand(bool $showBrand): self {
        $this->showBrand = $showBrand;

        return $this;
    }

    public function getActive(): ?bool {
        return $this->active;
    }

    public function setActive(?bool $active): self {
        $this->active = $active;

        return $this;
    }


    public function getMetaTitle(): ?string {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): self {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    public function getMetaDescription(): ?string {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): self {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function getMetaKeywords(): ?string {
        return $this->metaKeywords;
    }

    public function setMetaKeywords(?string $metaKeywords): self {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

}
