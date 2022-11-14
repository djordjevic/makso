<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="kategorije", indexes={@ORM\Index(name="NewIndex1", columns={"active", "show_category"}),
 *                                        @ORM\Index(name="parent_category_id", columns={"parent_category_id"})})
 * }
 * @ORM\Entity(repositoryClass="App\Repository\KategorijaRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Kategorija implements \JsonSerializable {

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="category_name", type="string", length=200)
     */
    private $name;

    /**
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Kategorija")
     * @ORM\JoinColumn(name="parent_category_id", referencedColumnName="id", nullable=true)
     */
    private $parentCategoryId;


    /**
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @ORM\Column(name="show_category", type="boolean", nullable=true)
     */
    private $showCategory = 1;

    /**
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active = 1;


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
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    protected $created;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    protected $updated;


    public function jsonSerialize() {
        return ['id' => $this->id, 'name' => $this->name];
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this->timestamp = new \DateTime();
        $this->created = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->timestamp = new \DateTime();
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

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(string $description): self {
        $this->description = $description;

        return $this;
    }
    /**
     * @return Kategorija
     */
    public function getParentCategoryId(): ?Kategorija {
        return $this->parentCategoryId;
    }

    /**
     * @param Kategorija $proizvodjac
     */
    public function setParentCategoryId(?Kategorija $parentCategoryId): void {
        $this->parentCategoryId = $parentCategoryId;
    }


    public function getTimestamp(): ?\DateTimeInterface {
        return $this->timestamp;
    }

    public function setTimestamp(\DateTimeInterface $timestamp): self {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getShowCategory(): ?bool {
        return $this->showCategory;
    }

    public function setShowCategory(?bool $showCategory): self {
        $this->showCategory = $showCategory;

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

    /**
     * @return mixed
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created): void {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getUpdated() {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated): void {
        $this->updated = $updated;
    }

}
