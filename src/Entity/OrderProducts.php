<?php


namespace App\Entity;

use App\Classes\AppConfig;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderProductsRepository")
 * @ORM\Table(name="orders_products", uniqueConstraints={@ORM\UniqueConstraint(columns={"order_id", "product_id"})})
 * @ORM\HasLifecycleCallbacks
 */
class OrderProducts {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Order",inversedBy="orderProduct")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id", nullable=false)
     */
    private $order;

    /**
     * @ORM\ManyToOne(targetEntity="Proizvod", inversedBy="orderProduct")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=false)
     */
    private $proizvod;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="orderProduct")
     * @ORM\JoinColumn(name="member_id", referencedColumnName="id", nullable=true)
     */
    private $member;


    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=255, nullable=false)
     */
    private $productName;

    /**
     * @ORM\ManyToOne(targetEntity="Kategorija")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $kategorija;


    /**
     * @ORM\ManyToOne(targetEntity="Dobavljac")
     * @ORM\JoinColumn(name="seller_id", referencedColumnName="id")
     */
    private $seller;

    /**
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="price_pdv", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $pricePdv;

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

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getOrder() {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order): void {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getProizvod() {
        return $this->proizvod;
    }

    /**
     * @param mixed $proizvod
     */
    public function setProizvod($proizvod): void {
        $this->proizvod = $proizvod;
    }

    /**
     * @return mixed
     */
    public function getMember() {
        return $this->member;
    }

    /**
     * @param mixed $member
     */
    public function setMember($member): void {
        $this->member = $member;
    }

    /**
     * @return string
     */
    public function getProductName(): string {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName(string $productName): void {
        $this->productName = $productName;
    }

    /**
     * @return Kategorija
     */
    public function getKategorija(): Kategorija {
        return $this->kategorija;
    }

    /**
     * @param Kategorija $kategorija
     */
    public function setKategorija(Kategorija $kategorija): void {
        $this->kategorija = $kategorija;
    }

    /**
     * @return mixed
     */
    public function getProizvodjac() {
        return $this->proizvodjac;
    }

    /**
     * @param mixed $proizvodjac
     */
    public function setProizvodjac($proizvodjac): void {
        $this->proizvodjac = $proizvodjac;
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
     * @return float
     */
    public function getPrice(): float {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPricePdv(): float {
        return $this->pricePdv;
    }

    /**
     * @param float $pricePdv
     */
    public function setPricePdv(float $pricePdv): void {
        $this->pricePdv = $pricePdv;
    }

    /**
     * @return mixed
     */
    public function getSeller() {
        return $this->seller;
    }

    /**
     * @param mixed $seller
     */
    public function setSeller($seller): void {
        $this->seller = $seller;
    }


}