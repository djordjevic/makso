<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Table(name="proizvodi_komentari")
 * @ORM\Entity(repositoryClass="App\Repository\KomentarProizvodaRepository")
 * @ORM\HasLifecycleCallbacks
 */
class KomentarProizvoda {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Proizvod", inversedBy="komentari")
     * @ORM\JoinColumn(name="id_proizvoda", referencedColumnName="id", nullable=false)
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="komentari")
     * @ORM\JoinColumn(name="member_id", referencedColumnName="id", nullable=true)
     */
    private $member;

    /**
     * @ORM\Column(name="name", type="string")
     * @Assert\NotBlank(message = "Morate uneti naslov!")
     * @Assert\Length(max = 50)
     */
    private $name;

    /**
     * @ORM\Column(name="email", type="string", nullable=true)
     * @Assert\NotBlank(message = "Morate uneti email!")
     * @Assert\Length(max = 70)
     * @Assert\Email(message = "Email format nije ispravan!")
     */
    private $email;

    /**
     * @ORM\Column(name="komentar", type="text")
     * @Assert\NotBlank(message = "Morate uneti komentar!")
     */
    private $comment;


    /**
     *
     * @ORM\Column(name="vreme", type="integer")
     */
    private $time;

    /**
     *
     * @ORM\Column(name="active", type="boolean", options={"default":"0"})
     */
    private $active = false;

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
        $this->time = time();
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {
        $this->updated = new \DateTime();
    }

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
    public function getProduct() {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product): void {
        $this->product = $product;
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
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void {
        $this->comment = $comment;
    }


    /**
     * @return mixed
     */
    public function getTime() {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active): void {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getCreated() {
        return $this->created;
    }

}