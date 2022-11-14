<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Table(name="subscribe")
 * @ORM\Entity(repositoryClass="App\Repository\SubscribeRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Subscribe {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(name="email", type="string", nullable=true)
     * @Assert\NotBlank(message = "Morate uneti email!")
     * @Assert\Length(max = 70)
     * @Assert\Email(message = "Email format nije ispravan!")
     */
    private $email;


    /**
     *
     * @ORM\Column(name="status", type="boolean", options={"default":"1"})
     */
    private $status = true;


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
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void {
        $this->status = $status;
    }


}