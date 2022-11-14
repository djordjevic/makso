<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Proizvodi
 *
 * @ORM\Table(name="proizvodi", indexes={@ORM\Index(name="NewIndex1", columns={"active", "show_product"}),
 *     @ORM\Index(name="product_name_seo", columns={"product_name_seo"}),
 *     @ORM\Index(name="category_id", columns={"category_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProizvodRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Proizvod implements \JsonSerializable {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Akcija")
     * @ORM\JoinColumn(name="fk_akcija_id", referencedColumnName="id")
     */
    private $akcija;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\KomentarProizvoda", mappedBy="product")
     */
    private $komentari;


    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_name_seo", type="string", length=255, nullable=true)
     */
    private $seo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_code", type="string", length=100, nullable=false)
     */
    private $code;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OrderProducts", mappedBy="proizvod")
     */
    private $orderProduct;

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
     * @var string|null
     *
     * @ORM\Column(name="brand", type="string", length=255, nullable=true)
     */
    private $proizvodjac;


    /**
     * @var string|null
     *
     * @ORM\Column(name="caracteristic", type="text", nullable=true)
     */
    private $caracteristic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="options", type="text", nullable=true)
     */
    private $options;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delivery_characteristics", type="text", nullable=true)
     */
    private $deliveryCharacteristics;

    /**
     * @var string|null
     *
     * @ORM\Column(name="charasteristics_description", type="text", nullable=true)
     */
    private $charasteristicsDescription;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="decimal", precision=15, scale=3, nullable=false)
     */
    private $weight = 0.000;

    /**
     * @var int
     *
     * @ORM\Column(name="show_product", type="boolean", nullable=false)
     */
    private $showProduct = true;

    /**
     * @var float
     *
     * @ORM\Column(name="price_din", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $priceDin;

    /**
     * @var float
     *
     * @ORM\Column(name="price_eur", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $priceEur = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="price_din_vp", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $priceVpDin;

    /**
     * @var float
     *
     * @ORM\Column(name="price_eur_vp", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $priceVpEur = 0.00;

    /**
     * @var int
     *
     * @ORM\Column(name="tax_percentage", type="integer", nullable=false, options={"default"="20"})
     */
    private $taxPercentage = 20;

    /**
     * @var int
     *
     * @ORM\Column(name="delivery_price", type="float", nullable=true)
     */
    private $deliveryPrice = 0.00;

    /**
     * @var int
     *
     * @ORM\Column(name="delivery_time", type="integer", nullable=true)
     */
    private $deliveryTime = 7;


    /**
     * @var int
     *
     * @ORM\Column(name="fl_out_of_stock", type="boolean", nullable=false)
     */
    private $flOutOfStock = false;

    /**
     * @var int
     *
     * @ORM\Column(name="fl_new_product", type="boolean", nullable=false, options={"comment"="0/1 da li je nov proizvod"})
     */
    private $flNewProduct = true;


    /**
     * @var int
     *
     * @ORM\Column(name="fl_discount", type="boolean", nullable=false)
     */
    private $flDiscount = false;

    /**
     * @var int
     *
     * @ORM\Column(name="fl_discount_vp", type="boolean", nullable=false)
     */
    private $flDiscountVp = false;


    /**
     * @var float
     *
     * @ORM\Column(name="discount_price_din", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $discountPriceDin = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="discount_price_eur", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $discountPriceEur = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="discount_price_din_vp", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $discountVpPriceDin = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="discount_price_eur_vp", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $discountVpPriceEur = 0.00;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = true;


    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=true)
     */
    private $metaTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_description", type="text", nullable=true)
     */
    private $metaDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_keywords", type="text", nullable=true)
     */
    private $metaKeywords;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;
    /**
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    protected $updated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika_main", type="string", length=255, nullable=true)
     */
    private $slikaMain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika1", type="string", length=255, nullable=true)
     */
    private $slika1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika2", type="string", length=255, nullable=true)
     */
    private $slika2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika3", type="string", length=255, nullable=true)
     */
    private $slika3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika4", type="string", length=255, nullable=true)
     */
    private $slika4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika5", type="string", length=255, nullable=true)
     */
    private $slika5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika6", type="string", length=255, nullable=true)
     */
    private $slika6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika7", type="string", length=255, nullable=true)
     */
    private $slika7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika8", type="string", length=255, nullable=true)
     */
    private $slika8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika9", type="string", length=255, nullable=true)
     */
    private $slika9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika10", type="string", length=255, nullable=true)
     */
    private $slika10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika11", type="string", length=255, nullable=true)
     */
    private $slika11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika12", type="string", length=255, nullable=true)
     */
    private $slika12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika13", type="string", length=255, nullable=true)
     */
    private $slika13;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slika14", type="string", length=255, nullable=true)
     */
    private $slika14;

    /**
     * @ORM\ManyToOne(targetEntity="ProizvodAtributi")
     * @ORM\JoinColumn(name="atr1", referencedColumnName="id")
     */
    private $atr1;

    /**
     * @ORM\ManyToOne(targetEntity="ProizvodAtributi")
     * @ORM\JoinColumn(name="atr2", referencedColumnName="id")
     */
    private $atr2;

    /**
     * @ORM\ManyToOne(targetEntity="ProizvodAtributi")
     * @ORM\JoinColumn(name="atr3", referencedColumnName="id")
     */
    private $atr3;

    /**
     * @ORM\ManyToOne(targetEntity="ProizvodAtributi")
     * @ORM\JoinColumn(name="atr4", referencedColumnName="id")
     */
    private $atr4;

    /**
     * @ORM\ManyToOne(targetEntity="ProizvodAtributi")
     * @ORM\JoinColumn(name="atr5", referencedColumnName="id")
     */
    private $atr5;

    /**
     * @ORM\ManyToOne(targetEntity="ProizvodAtributi")
     * @ORM\JoinColumn(name="atr6", referencedColumnName="id")
     */
    private $atr6;

    /**
     * @ORM\ManyToOne(targetEntity="ProizvodAtributi")
     * @ORM\JoinColumn(name="atr7", referencedColumnName="id")
     */
    private $atr7;

    /**
     * @ORM\ManyToOne(targetEntity="ProizvodAtributi")
     * @ORM\JoinColumn(name="atr8", referencedColumnName="id")
     */
    private $atr8;

    /**
     * @ORM\ManyToOne(targetEntity="ProizvodAtributi")
     * @ORM\JoinColumn(name="atr9", referencedColumnName="id")
     */
    private $atr9;

    /**
     * @ORM\ManyToOne(targetEntity="ProizvodAtributi")
     * @ORM\JoinColumn(name="atr10", referencedColumnName="id")
     */
    private $atr10;

    /**
     *
     * @ORM\Column(name="optional", type="json", nullable=true)
     */
    private $optional = [];


    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->updated = new \DateTime();
    }

    public function jsonSerialize() {
        return ['id' => $this->id, 'title' => $this->title, 'code' => $this->code];
    }

    /**
     *
     * @ORM\PrePersist
     */
    public function prePersist() {
        $this->timestamp = new DateTime();
        $this->created = new DateTime();
    }


//    /**
//     * @param mixed $akcija
//     * @throws
//     */
//    public function setAkcija($akcija): void {
//        $this->akcija = $akcija;
//        if (!empty($akcija)) {
//            $this->createdDiscount = new \DateTime();
//        } else {
//            $this->createdDiscount = null;
//        }
//    }

    public function getOptional(): array {
        return $this->optional;
    }

    public function setOptional(array $optional): self {
        $this->optional = $optional;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getKomentari() {
        return $this->komentari;
    }

    /**
     * @param mixed $komentari
     */
    public function setKomentari($komentari): void {
        $this->komentari = $komentari;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getSeo(): ?string {
        return $this->seo;
    }

    /**
     * @param string|null $seo
     */
    public function setSeo(?string $seo): void {
        $this->seo = $seo;
    }


    /**
     * @return string|null
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * @param string|null $code
     */
    public function setCode(?string $code): void {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getOrderProduct() {
        return $this->orderProduct;
    }

    /**
     * @param mixed $orderProduct
     */
    public function setOrderProduct($orderProduct): void {
        $this->orderProduct = $orderProduct;
    }

    /**
     * @return mixed
     */
    public function getSeller(): ?Dobavljac {
        return $this->seller;
    }

    /**
     * @param Dobavljac|null $seller
     */
    public function setSeller(?Dobavljac $seller): void {
        $this->seller = $seller;
    }

    /**
     * @return Kategorija
     */
    public function getKategorija(): ?Kategorija {
        return $this->kategorija;
    }

    /**
     * @param Kategorija $kategorija
     */
    public function setKategorija(?Kategorija $kategorija): void {
        $this->kategorija = $kategorija;
    }


    /**
     * @return string
     */
    public function getProizvodjac(): ?string {
        return $this->proizvodjac;
    }

    /**
     * @param string $proizvodjac
     */
    public function setProizvodjac(string $proizvodjac): void {
        $this->proizvodjac = $proizvodjac;
    }


    /**
     * @param string|null $caracteristic
     */
    public function setCaracteristic(?string $caracteristic): void {
        $this->caracteristic = $caracteristic;
    }

    /**
     * @return string
     */
    public function getCaracteristic(): ?string {
        return $this->caracteristic;
    }

    /**
     * @param string|null $options
     */
    public function setOptions(?string $options): void {
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getOptions(): ?string {
        return $this->options;
    }

    /**
     * @return string|null
     */
    public function getDeliveryCharacteristics(): ?string {
        return $this->deliveryCharacteristics;
    }

    /**
     * @param string|null $deliveryCharacteristics
     */
    public function setDeliveryCharacteristics(?string $deliveryCharacteristics): void {
        $this->deliveryCharacteristics = $deliveryCharacteristics;
    }

    /**
     * @return string|null
     */
    public function getCharasteristicsDescription(): ?string {
        return $this->charasteristicsDescription;
    }

    /**
     * @param string|null $charasteristicsDescription
     */
    public function setCharasteristicsDescription(?string $charasteristicsDescription): void {
        $this->charasteristicsDescription = $charasteristicsDescription;
    }

    /**
     * @return float
     */
    public function getWeight(): float {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getShowProduct(): int {
        return $this->showProduct;
    }

    /**
     * @param int $showProduct
     */
    public function setShowProduct(int $showProduct): void {
        $this->showProduct = $showProduct;
    }

    /**
     * @return float
     */
    public function getPriceDin(): float {
        return $this->priceDin;
    }

    /**
     * @param float $priceDin
     */
    public function setPriceDin(float $priceDin): void {
        $this->priceDin = $priceDin;
    }

    /**
     * @return float
     */
    public function getPriceVpDin(): float {
        return $this->priceVpDin;
    }

    /**
     * @param float $priceVpDin
     */
    public function setPriceVpDin(float $priceVpDin): void {
        $this->priceVpDin = $priceVpDin;
    }

    /**
     * @return float
     */
    public function getPriceEur(): float {
        return $this->priceEur;
    }

    /**
     * @param float $priceEur
     */
    public function setPriceEur(float $priceEur): void {
        $this->priceEur = $priceEur;
    }

    /**
     * @return float
     */
    public function getPriceVpEur(): float {
        return $this->priceVpEur;
    }

    /**
     * @param float $priceVpEur
     */
    public function setPriceVpEur(float $priceVpEur): void {
        $this->priceVpEur = $priceVpEur;
    }

    /**
     * @return int
     */
    public function getTaxPercentage(): int {
        return $this->taxPercentage;
    }

    /**
     * @param int $taxPercentage
     */
    public function setTaxPercentage(int $taxPercentage): void {
        $this->taxPercentage = $taxPercentage;
    }

    /**
     * @return float|null
     */
    public function getDeliveryPrice(): ?float {
        return $this->deliveryPrice;
    }

    /**
     * @param float|null $deliveryPrice
     */
    public function setDeliveryPrice(?float $deliveryPrice): void {
        $this->deliveryPrice = $deliveryPrice;
    }

    /**
     * @return int
     */
    public function getDeliveryTime(): int {
        return $this->deliveryTime;
    }

    /**
     * @param int $deliveryTime
     */
    public function setDeliveryTime(int $deliveryTime): void {
        $this->deliveryTime = $deliveryTime;
    }

    /**
     * @return int
     */
    public function getFlOutOfStock(): int {
        return $this->flOutOfStock;
    }

    /**
     * @param int $flOutOfStock
     */
    public function setFlOutOfStock(int $flOutOfStock): void {
        $this->flOutOfStock = $flOutOfStock;
    }

    /**
     * @return int
     */
    public function getFlNewProduct(): int {
        return $this->flNewProduct;
    }

    /**
     * @param int $flNewProduct
     */
    public function setFlNewProduct(int $flNewProduct): void {
        $this->flNewProduct = $flNewProduct;
    }

    /**
     * @return bool
     */
    public function getFlDiscount(): bool {
        return $this->flDiscount;
    }

    /**
     * @param bool $flDiscount
     */
    public function setFlDiscount(bool $flDiscount): void {
        $this->flDiscount = $flDiscount;
    }

    /**
     * @return bool
     */
    public function getFlDiscountVp(): bool {
        return $this->flDiscountVp;
    }

    /**
     * @param bool $flDiscountVp
     */
    public function setFlDiscountVp(bool $flDiscountVp): void {
        $this->flDiscountVp = $flDiscountVp;
    }


    /**
     * @return float|null
     */
    public function getDiscountPriceDin(): ?float {
        return $this->discountPriceDin;
    }

    /**
     * @param float|null $discountPriceDin
     */
    public function setDiscountPriceDin(?float $discountPriceDin): void {
        $this->discountPriceDin = $discountPriceDin;
    }

    /**
     * @return float|null
     */
    public function getDiscountVpPriceDin(): ?float {
        return $this->discountVpPriceDin;
    }

    /**
     * @param float|null $discountVpPriceDin
     */
    public function setDiscountVpPriceDin(?float $discountVpPriceDin): void {
        $this->discountVpPriceDin = $discountVpPriceDin;
    }

    /**
     * @return float|null
     */
    public function getDiscountPriceEur(): ?float {
        return $this->discountPriceEur;
    }

    /**
     * @param float|null $discountPriceEur
     */
    public function setDiscountPriceEur(?float $discountPriceEur): void {
        $this->discountPriceEur = $discountPriceEur;
    }

    /**
     * @return float|null
     */
    public function getDiscountVpPriceEur(): ?float {
        return $this->discountVpPriceEur;
    }

    /**
     * @param float|null $discountVpPriceEur
     */
    public function setDiscountVpPriceEur(?float $discountVpPriceEur): void {
        $this->discountVpPriceEur = $discountVpPriceEur;
    }

    /**
     * @return DateTime
     */
    public function getTimestamp(): DateTime {
        return $this->timestamp;
    }

    /**
     * @param DateTime $timestamp
     */
    public function setTimestamp(DateTime $timestamp): void {
        $this->timestamp = $timestamp;
    }

    /**
     * @return int
     */
    public function getActive(): int {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive(int $active): void {
        $this->active = $active;
    }

    /**
     * @return string|null
     */
    public function getMetaTitle(): ?string {
        return $this->metaTitle;
    }

    /**
     * @param string|null $metaTitle
     */
    public function setMetaTitle(?string $metaTitle): void {
        $this->metaTitle = $metaTitle;
    }

    /**
     * @return string|null
     */
    public function getMetaDescription(): ?string {
        return $this->metaDescription;
    }

    /**
     * @param string|null $metaDescription
     */
    public function setMetaDescription(?string $metaDescription): void {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @return string|null
     */
    public function getMetaKeywords(): ?string {
        return $this->metaKeywords;
    }

    /**
     * @param string|null $metaKeywords
     */
    public function setMetaKeywords(?string $metaKeywords): void {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @return DateTime|null
     */
    public function getCreated(): ?DateTime {
        return $this->created;
    }

    /**
     * @param DateTime|null $created
     */
    public function setCreated(?DateTime $created): void {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getAkcija() {
        return $this->akcija;
    }

    /**
     * @return string|null
     */
    public function getSlikaMain(): ?string {
        return $this->slikaMain;
    }

    /**
     * @param string|null $slikaMain
     */
    public function setSlikaMain(?string $slikaMain): void {
        $this->slikaMain = $slikaMain;
    }

    /**
     * @return string|null
     */
    public function getSlika1(): ?string {
        return $this->slika1;
    }

    /**
     * @param string|null $slika1
     */
    public function setSlika1(?string $slika1): void {
        $this->slika1 = $slika1;
    }

    /**
     * @return string|null
     */
    public function getSlika2(): ?string {
        return $this->slika2;
    }

    /**
     * @param string|null $slika2
     */
    public function setSlika2(?string $slika2): void {
        $this->slika2 = $slika2;
    }

    /**
     * @return string|null
     */
    public function getSlika3(): ?string {
        return $this->slika3;
    }

    /**
     * @param string|null $slika3
     */
    public function setSlika3(?string $slika3): void {
        $this->slika3 = $slika3;
    }

    /**
     * @return string|null
     */
    public function getSlika4(): ?string {
        return $this->slika4;
    }

    /**
     * @param string|null $slika4
     */
    public function setSlika4(?string $slika4): void {
        $this->slika4 = $slika4;
    }

    /**
     * @return string|null
     */
    public function getSlika5(): ?string {
        return $this->slika5;
    }

    /**
     * @param string|null $slika5
     */
    public function setSlika5(?string $slika5): void {
        $this->slika5 = $slika5;
    }

    /**
     * @return string|null
     */
    public function getSlika6(): ?string {
        return $this->slika6;
    }

    /**
     * @param string|null $slika6
     */
    public function setSlika6(?string $slika6): void {
        $this->slika6 = $slika6;
    }

    /**
     * @return string|null
     */
    public function getSlika7(): ?string {
        return $this->slika7;
    }

    /**
     * @param string|null $slika7
     */
    public function setSlika7(?string $slika7): void {
        $this->slika7 = $slika7;
    }

    /**
     * @return string|null
     */
    public function getSlika8(): ?string {
        return $this->slika8;
    }

    /**
     * @param string|null $slika8
     */
    public function setSlika8(?string $slika8): void {
        $this->slika8 = $slika8;
    }

    /**
     * @return string|null
     */
    public function getSlika9(): ?string {
        return $this->slika9;
    }

    /**
     * @param string|null $slika9
     */
    public function setSlika9(?string $slika9): void {
        $this->slika9 = $slika9;
    }

    /**
     * @return string|null
     */
    public function getSlika10(): ?string {
        return $this->slika10;
    }

    /**
     * @param string|null $slika10
     */
    public function setSlika10(?string $slika10): void {
        $this->slika10 = $slika10;
    }

    /**
     * @return string|null
     */
    public function getSlika11(): ?string {
        return $this->slika11;
    }

    /**
     * @param string|null $slika11
     */
    public function setSlika11(?string $slika11): void {
        $this->slika11 = $slika11;
    }

    /**
     * @return string|null
     */
    public function getSlika12(): ?string {
        return $this->slika12;
    }

    /**
     * @param string|null $slika12
     */
    public function setSlika12(?string $slika12): void {
        $this->slika12 = $slika12;
    }

    /**
     * @return string|null
     */
    public function getSlika13(): ?string {
        return $this->slika13;
    }

    /**
     * @param string|null $slika13
     */
    public function setSlika13(?string $slika13): void {
        $this->slika13 = $slika13;
    }
    /**
     * @return string|null
     */
    public function getSlika14(): ?string {
        return $this->slika14;
    }

    /**
     * @param string|null $slika14
     */
    public function setSlika14(?string $slika14): void {
        $this->slika14 = $slika14;
    }

    /**
     * @return ProizvodAtributi
     */
    public function getAtr1(): ?ProizvodAtributi {
        return $this->atr1;
    }

    /**
     * @param ProizvodAtributi $atr1
     */
    public function setAtr1(?ProizvodAtributi $atr1): void {
        $this->atr1 = $atr1;
    }

    /**
     * @return ProizvodAtributi
     */
    public function getAtr2(): ?ProizvodAtributi {
        return $this->atr2;
    }

    /**
     * @param ProizvodAtributi $atr2
     */
    public function setAtr2(?ProizvodAtributi $atr2): void {
        $this->atr2 = $atr2;
    }

    /**
     * @return ProizvodAtributi
     */
    public function getAtr3(): ?ProizvodAtributi {
        return $this->atr3;
    }

    /**
     * @param ProizvodAtributi $atr3
     */
    public function setAtr3(?ProizvodAtributi $atr3): void {
        $this->atr3 = $atr3;
    }

    /**
     * @return ProizvodAtributi
     */
    public function getAtr4(): ?ProizvodAtributi {
        return $this->atr4;
    }

    /**
     * @param ProizvodAtributi $atr4
     */
    public function setAtr4(?ProizvodAtributi $atr4): void {
        $this->atr4 = $atr4;
    }

    /**
     * @return ProizvodAtributi
     */
    public function getAtr5(): ?ProizvodAtributi {
        return $this->atr5;
    }

    /**
     * @param ProizvodAtributi $atr5
     */
    public function setAtr5(?ProizvodAtributi $atr5): void {
        $this->atr5 = $atr5;
    }

    /**
     * @return ProizvodAtributi
     */
    public function getAtr6(): ?ProizvodAtributi {
        return $this->atr6;
    }

    /**
     * @param ProizvodAtributi $atr6
     */
    public function setAtr6(?ProizvodAtributi $atr6): void {
        $this->atr6 = $atr6;
    }

    /**
     * @return ProizvodAtributi
     */
    public function getAtr7(): ?ProizvodAtributi {
        return $this->atr7;
    }

    /**
     * @param ProizvodAtributi $atr7
     */
    public function setAtr7(?ProizvodAtributi $atr7): void {
        $this->atr7 = $atr7;
    }

    /**
     * @return ProizvodAtributi
     */
    public function getAtr8(): ?ProizvodAtributi {
        return $this->atr8;
    }

    /**
     * @param ProizvodAtributi $atr8
     */
    public function setAtr8(?ProizvodAtributi $atr8): void {
        $this->atr8 = $atr8;
    }

    /**
     * @return ProizvodAtributi
     */
    public function getAtr9(): ?ProizvodAtributi {
        return $this->atr9;
    }

    /**
     * @param ProizvodAtributi $atr9
     */
    public function setAtr9(?ProizvodAtributi $atr9): void {
        $this->atr9 = $atr9;
    }

    /**
     * @return ProizvodAtributi
     */
    public function getAtr10(): ?ProizvodAtributi {
        return $this->atr10;
    }

    /**
     * @param ProizvodAtributi $atr10
     */
    public function setAtr10(?ProizvodAtributi $atr10): void {
        $this->atr10 = $atr10;
    }
}
