<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table(name="basket_products")
 * @ORM\Table(name="basket_products", indexes={@ORM\Index(name="session_id", columns={"session_id"}), @ORM\Index(name="member_id", columns={"member_id"}),})
 * @ORM\Entity(repositoryClass="App\Repository\BasketProductRepository")
 * @ORM\HasLifecycleCallbacks
 *
 */
class BasketProduct {

    const OIDL = 1;
    const AIM = 2;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, name="session_id")
     */
    private $sessionId;

    /**
     * @ORM\Column(type="integer")
     */
    private $productId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $productName;

    /**
     * @ORM\Column(type="integer")
     */
    private $catId;

    /**
     * @ORM\Column(type="integer")
     */
    private $brandId;

    /**
     * @ORM\Column(type="integer")
     */
    private $sellerId;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=4)
     */
    private $price;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $memberId;

    /**
     * @var DateTime $created
     *
     * @ORM\Column(name="created", type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;


    /**
     * @ORM\Column(type="integer")
     *  oidl - 1: aim - 2
     */
    private $site;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $orderId;

    /**
     * @ORM\Column(name="characteristic", type="text", nullable=true)
     */
    private $characteristic;

    /**
     * @ORM\Column(name="product_code", type="string", length=100, nullable=true)
     */
    private $productCode;


    /**
     *
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this->created = new \DateTime();
        $this->isActive = true;
    }


    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSessionId() {
        return $this->sessionId;
    }

    /**
     * @param mixed $sessionId
     */
    public function setSessionId($sessionId): void {
        $this->sessionId = $sessionId;
    }

    /**
     * @return mixed
     */
    public function getProductId() {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId): void {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getProductName() {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName): void {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getCatId() {
        return $this->catId;
    }

    /**
     * @param mixed $catId
     */
    public function setCatId($catId): void {
        $this->catId = $catId;
    }

    /**
     * @return mixed
     */
    public function getBrandId() {
        return $this->brandId;
    }

    /**
     * @param mixed $brandId
     */
    public function setBrandId($brandId): void {
        $this->brandId = $brandId;
    }

    /**
     * @return mixed
     */
    public function getSellerId() {
        return $this->sellerId;
    }

    /**
     * @param mixed $sellerId
     */
    public function setSellerId($sellerId): void {
        $this->sellerId = $sellerId;
    }

    /**
     * @return mixed
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getMemberId() {
        return $this->memberId;
    }

    /**
     * @param mixed $memberId
     */
    public function setMemberId($memberId): void {
        $this->memberId = $memberId;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): \DateTime {
        return $this->created;
    }

    /**
     * @param DateTime $created
     */
    public function setCreated(\DateTime $created): void {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getIsActive() {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive): void {
        $this->isActive = $isActive;
    }

    /**
     * @return mixed
     */
    public function getSite() {
        return $this->site;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site): void {
        $this->site = $site;
    }

    /**
     * @return mixed
     */
    public function getOrderId() {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId): void {
        $this->orderId = $orderId;
    }

    public function getCharacteristic(): ?string {
        return $this->characteristic;
    }

    public function setCharacteristic(string $characteristic): self {
        $this->characteristic = $characteristic;

        return $this;
    }

    public function getProductCode(): ?string {
        return $this->productCode;
    }

    public function setProductCode(string $productCode): self {
        $this->productCode = $productCode;

        return $this;
    }


}
