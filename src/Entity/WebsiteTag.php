<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="website_tags", indexes={@ORM\Index(name="website", columns={"website", "web_page"})})
 * @ORM\Entity(repositoryClass="App\Repository\WebsiteTagRepository")
 * @ORM\HasLifecycleCallbacks
 */
class WebsiteTag {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="website", type="integer", options={"comment":"1 - odidol, 2 - aim"})
     */
    private $website = 1;

    /**
     * @ORM\Column(name="web_page", type="string", length=255)
     */
    private $webPage;

    /**
     * @ORM\Column(name="page_title", type="string", length=255, nullable=true)
     */
    private $pageTitle;

    /**
     * @ORM\Column(name="page_meta_description", type="text", nullable=true)
     */
    private $pageMetaDescription;

    /**
     * @ORM\Column(name="page_meta_keywords", type="text", nullable=true)
     */
    private $pageMetaKeywords;

    /**
     * @ORM\Column(name="napomena", type="text", nullable=true)
     */
    private $napomena;

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

    public function getId(): ?int {
        return $this->id;
    }

    public function getWebsite(): ?int {
        return $this->website;
    }

    public function setWebsite(int $website): self {
        $this->website = $website;

        return $this;
    }

    public function getWebPage(): ?string {
        return $this->webPage;
    }

    public function setWebPage(string $webPage): self {
        $this->webPage = $webPage;

        return $this;
    }

    public function getPageTitle(): ?string {
        return $this->pageTitle;
    }

    public function setPageTitle(?string $pageTitle): self {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    public function getPageMetaDescription(): ?string {
        return $this->pageMetaDescription;
    }

    public function setPageMetaDescription(?string $pageMetaDescription): self {
        $this->pageMetaDescription = $pageMetaDescription;

        return $this;
    }

    public function getPageMetaKeywords(): ?string {
        return $this->pageMetaKeywords;
    }

    public function setPageMetaKeywords(?string $pageMetaKeywords): self {
        $this->pageMetaKeywords = $pageMetaKeywords;

        return $this;
    }

    public function getNapomena(): ?string {
        return $this->napomena;
    }

    public function setNapomena(?string $napomena): self {
        $this->napomena = $napomena;

        return $this;
    }
}
