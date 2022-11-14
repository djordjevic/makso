<?php


namespace App\Entity;

use App\Classes\KurirskeSluzbe;
use App\Classes\PaymentType;
use App\Classes\Statusi;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Order {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="order")
     * @ORM\JoinColumn(name="member_id", referencedColumnName="id", nullable=true)
     */
    protected $member;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OrderProducts", mappedBy="order")
     */
    protected $orderProduct;

    /**
     * @ORM\Column(name="order_status", type="integer", nullable=true, options={"default":"1"})
     */
    protected $orderStatus;

    /**
     * @var DateTime $dateAdded
     *
     * @ORM\Column(name="date_added", type="datetime")
     */
    protected $dateAdded;

    /**
     *
     * @ORM\Column(name="ime_primaoca", type="string", length=255)
     */

    protected $imePrimaoca;
    /**
     *
     * @ORM\Column(name="prezime_primaoca", type="string", length=255)
     */
    protected $prezimePrimaoca;

    /**
     *
     * @ORM\Column(name="adresa_primaoca", type="string", length=255)
     */
    protected $adresaPrimaoca;

    /**
     *
     * @ORM\Column(name="grad_primaoca", type="string", length=255)
     */
    protected $gradPrimaoca;

    /**
     *
     * @ORM\Column(name="telefon_primaoca", type="string", length=20)
     * @Assert\Regex(
     *     pattern="/^\d+$/",
     *     message="Broj telefona mora biti u skladu sa formatom!"
     * )
     */
    protected $telefonPrimaoca;

    /**
     *
     * @ORM\Column(name="firma_primaoca", type="string", length=255, nullable=true)
     */
    protected $firmaPrimaoca;

    /**
     *
     * @ORM\Column(name="ptt_primaoca", type="string", length=255, nullable=true)
     * @Assert\Regex(
     *     pattern="/^\d+$/",
     *     message="Poštanski broj mora biti validan!"
     * )
     */
    protected $pttPrimaoca;

    /**
     *
     * @ORM\Column(name="email_primaoca", type="string", length=255, nullable=true)
     */
    protected $emailPrimaoca;

    /**
     * @var DateTime $datumNarudzbine
     *
     * @ORM\Column(name="datum_narudzbine", type="datetime", nullable=true)
     */
    protected $datumNarudzbine;

    /**
     *
     * @ORM\Column(name="napomena_admin", type="text", nullable=true)
     */
    protected $napomenaAdmin;

    /**
     *
     * @ORM\Column(name="nacin_placanja", type="integer", nullable=true)
     */
    protected $nacinPlacanja = 1;


    /**
     *
     * @ORM\Column(name="total_price", type="float")
     */
    protected $totalPrice;

    /**
     *
     * @ORM\Column(name="total_price_pdv", type="float")
     */
    protected $totalPricePdv;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    protected $updated;

    /**
     * @ORM\PrePersist()
     */
    public function prePersist() {
        $this->orderStatus = 1;
        $this->dateAdded = new \DateTime();
        $this->datumNarudzbine = new \DateTime();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->updated = new \DateTime();
    }

    public function getReceiverEmail() {

        if ($this->getEmailPrimaoca() != null) {
            $to = $this->getEmailPrimaoca();
        } else if ($this->getMember()->getEmailExtra() != null) {
            $to = $this->getMember()->getEmailExtra();
        } else {
            $to = $this->getMember()->getEmail();
        }
        return $to;
    }

//
//    public function getMobilni() {
//        if (!empty($this->getfirmaPrimaoca())) {
//            return $this->getfirmaPrimaoca();
//        } else {
//            return $this->getMember()->getMobPhone();
//        }
//    }


    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void {
        $this->id = $id;
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
    public function getOrderStatus() {
        return $this->orderStatus;
    }

    /**
     * @param mixed $orderStatus
     */
    public function setOrderStatus($orderStatus): void {
        $this->orderStatus = $orderStatus;
    }


    public function getNacinPlacanja() {
        return $this->nacinPlacanja;
    }

    public function setNacinPlacanja($nacinPlacanja): void {
        $this->nacinPlacanja = $nacinPlacanja;
    }

    /**
     * @return DateTime
     */
    public function getDateAdded(): DateTime {
        return $this->dateAdded;
    }

    /**
     * @param DateTime $dateAdded
     */
    public function setDateAdded(DateTime $dateAdded): void {
        $this->dateAdded = $dateAdded;
    }


    /**
     * @return mixed
     */
    public function getImePrimaoca() {
        return $this->imePrimaoca;
    }

    /**
     * @param mixed $imePrimaoca
     */
    public function setImePrimaoca($imePrimaoca): void {
        $this->imePrimaoca = $imePrimaoca;
    }

    /**
     * @return mixed
     */
    public function getPrezimePrimaoca() {
        return $this->prezimePrimaoca;
    }

    /**
     * @param mixed $prezimePrimaoca
     */
    public function setPrezimePrimaoca($prezimePrimaoca): void {
        $this->prezimePrimaoca = $prezimePrimaoca;
    }

    /**
     * @return mixed
     */
    public function getAdresaPrimaoca() {
        return $this->adresaPrimaoca;
    }

    /**
     * @param mixed $adresaPrimaoca
     */
    public function setAdresaPrimaoca($adresaPrimaoca): void {
        $this->adresaPrimaoca = $adresaPrimaoca;
    }

    /**
     * @return mixed
     */
    public function getGradPrimaoca() {
        return $this->gradPrimaoca;
    }

    /**
     * @param mixed $gradPrimaoca
     */
    public function setGradPrimaoca($gradPrimaoca): void {
        $this->gradPrimaoca = $gradPrimaoca;
    }

    /**
     * @return mixed
     */
    public function getTelefonPrimaoca() {
        return $this->telefonPrimaoca;
    }

    /**
     * @param mixed $telefonPrimaoca
     */
    public function setTelefonPrimaoca($telefonPrimaoca): void {
        $this->telefonPrimaoca = $telefonPrimaoca;
    }

    /**
     * @return mixed
     */
    public function getFirmaPrimaoca() {
        return $this->firmaPrimaoca;
    }

    /**
     * @param mixed $firmaPrimaoca
     */
    public function setFirmaPrimaoca($firmaPrimaoca): void {
        $this->firmaPrimaoca = $firmaPrimaoca;
    }

    /**
     * @return mixed
     */
    public function getPttPrimaoca() {
        return $this->pttPrimaoca;
    }

    /**
     * @param mixed $pttPrimaoca
     */
    public function setPttPrimaoca($pttPrimaoca): void {
        $this->pttPrimaoca = $pttPrimaoca;
    }

    /**
     * @return mixed
     */
    public function getEmailPrimaoca() {
        return $this->emailPrimaoca;
    }

    /**
     * @param mixed $emailPrimaoca
     */
    public function setEmailPrimaoca($emailPrimaoca): void {
        $this->emailPrimaoca = $emailPrimaoca;
    }


    /**
     * @return DateTime
     */
    public function getDatumNarudzbine(): DateTime {
        return $this->datumNarudzbine;
    }

    /**
     * @param DateTime $datumNarudzbine
     */
    public function setDatumNarudzbine(DateTime $datumNarudzbine): void {
        $this->datumNarudzbine = $datumNarudzbine;
    }


    /**
     * @return mixed
     */
    public function getNapomenaAdmin() {
        return $this->napomenaAdmin;
    }

    /**
     * @param mixed $napomenaAdmin
     */
    public function setNapomenaAdmin($napomenaAdmin): void {
        $this->napomenaAdmin = $napomenaAdmin;
    }


    /**
     * @return mixed
     */
    public function getTotalPrice() {
        return $this->totalPrice;
    }

    /**
     * @param mixed $totalPrice
     */
    public function setTotalPrice($totalPrice): void {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return mixed
     */
    public function getTotalPricePdv() {
        return $this->totalPricePdv;
    }

    /**
     * @param mixed $totalPricePdv
     */
    public function setTotalPricePdv($totalPricePdv): void {
        $this->totalPricePdv = $totalPricePdv;
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
