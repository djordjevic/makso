<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="korisnici")
// * @ORM\Entity(repositoryClass="App\Repository\KorisnikRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Order", mappedBy="member")
     */
    private $order;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\KomentarProizvoda", mappedBy="member")
     */
    private $komentari;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OrderProducts", mappedBy="member")
     */
    private $orderProduct;

    /**
     *
     * @ORM\Column(name="firma_ili_fizicko_lice", type="integer")
     */
    private $firmaIliFizickoLice;

    /**
     *
     * @ORM\Column(name="naziv_firme", type="string", length=255, nullable=true)
     */
    private $nazivFirme;

    /**
     *
     * @ORM\Column(name="pib", type="string", length=30, nullable=true)
     * @Assert\Regex(
     *     pattern="/^\d+$/",
     *     message="PIB mora biti validan!"
     * )
     */
    private $pib;

    /**
     *
     * @ORM\Column(name="gazdinstvo", type="string", length=30, nullable=true)
     *
     */
    private $gazdinstvo;

    /**
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     *
     */
    private $firstName;

    /**
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     *
     * @ORM\Column(name="jmbg", type="string", length=13, nullable=true)
     */
    private $jmbg;

    /**
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     *
     * @ORM\Column(name="postanski_broj", type="integer", nullable=true)
     * @Assert\Regex(
     *     pattern="/^\d+$/",
     *     message="Poštanski broj mora biti validan!"
     * )
     */
    private $postanskiBroj;

    /**
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     * @Assert\Regex(
     *     pattern="/^\d+$/",
     *     message="Broj telefona mora biti u skladu sa formatom!"
     * )
     */
    private $phone;

    /**
     *
     * @ORM\Column(name="mob_phone", type="string", length=15, nullable=true, nullable=true)
     * @Assert\Regex(
     *     pattern="/^\d+$/",
     *     message="Broj telefona mora biti u skladu sa formatom!"
     * )
     */
    private $mobPhone;

    /**
     *
     * @ORM\Column(name="time", type="integer")
     */
    private $time;

    /**
     *
     * @ORM\Column(name="active", type="boolean", options={"default":"0"})
     */
    private $active = 1;

    /**
     *
     * @ORM\Column(name="first_name_primaoc", type="string", length=255, nullable=true)
     */
    private $firstNamePrimaoc;

    /**
     *
     * @ORM\Column(name="last_name_primaoc", type="string", length=255, nullable=true)
     */
    private $lastNamePrimaoc;

    /**
     *
     * @ORM\Column(name="address_primaoc", type="string", length=255, nullable=true)
     */
    private $addressPrimaoc;

    /**
     *
     * @ORM\Column(name="city_primaoc", type="string", length=255, nullable=true)
     */
    private $cityPrimaoc;

    /**
     *
     * @ORM\Column(name="postanski_broj_primaoc", type="integer", nullable=true)
     * @Assert\Regex(
     *     pattern="/^\d+$/",
     *     message="Poštanski broj mora biti validan!"
     * )
     */
    private $postanskiBrPrimaoc;

    /**
     *
     * @ORM\Column(name="mob_phone_primaoc", type="string", length=15, nullable=true, nullable=true)
     * @Assert\Regex(
     *     pattern="/^\d+$/",
     *     message="Broj telefona mora biti u skladu sa formatom!"
     * )
     */
    private $mobPhonePrimaoc;

    /**
     *
     * @ORM\Column(name="send_email", type="boolean", options={"default":"0"})
     *
     */
    private $sendEmail = 0;

    /**
     *
     * @ORM\Column(name="is_registred", type="boolean", nullable=true, options={"default":"1"})
     */
    private $isRegistred = 1;

    /**
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    protected $created;

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    protected $updated;

    /**
     * @ORM\Column(name="email", type="string", length=180, unique=true)
     * @Assert\Length(max = 70)
     * @Assert\Email(message = "Email format nije ispravan!")
     * @Assert\NotBlank(message="Morate uneti email!")
     */
    private $email;

    /**
     * @ORM\Column(name="roles", type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

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

    public function getId(): ?int
    {
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
    public function getFirmaIliFizickoLice() {
        return $this->firmaIliFizickoLice;
    }

    /**
     * @param mixed $firmaIliFizickoLice
     */
    public function setFirmaIliFizickoLice($firmaIliFizickoLice): void {
        $this->firmaIliFizickoLice = $firmaIliFizickoLice;
    }

    /**
     * @return mixed
     */
    public function getNazivFirme() {
        return $this->nazivFirme;
    }

    /**
     * @param mixed $nazivFirme
     */
    public function setNazivFirme($nazivFirme): void {
        $this->nazivFirme = $nazivFirme;
    }

    /**
     * @return mixed
     */
    public function getPib() {
        return $this->pib;
    }

    /**
     * @param mixed $pib
     */
    public function setPib($pib): void {
        $this->pib = $pib;
    }

    /**
     * @return mixed
     */
    public function getGazdinstvo() {
        return $this->gazdinstvo;
    }

    /**
     * @param mixed $gazdinstvo
     */
    public function setGazdinstvo($gazdinstvo): void {
        $this->gazdinstvo = $gazdinstvo;
    }

    /**
     * @return mixed
     */
    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getJmbg() {
        return $this->jmbg;
    }

    /**
     * @param mixed $jmbg
     */
    public function setJmbg($jmbg): void {
        $this->jmbg = $jmbg;
    }

    /**
     * @return mixed
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPostanskiBroj() {
        return $this->postanskiBroj;
    }

    /**
     * @param mixed $postanskiBroj
     */
    public function setPostanskiBroj($postanskiBroj): void {
        $this->postanskiBroj = $postanskiBroj;
    }

    public function getEmail(): ?string
    {
        return trim($this->email);
    }

    public function setEmail($email): self
    {
        $this->email = trim($email);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getMobPhone() {
        return $this->mobPhone;
    }

    /**
     * @param mixed $mobPhone
     */
    public function setMobPhone($mobPhone): void {
        $this->mobPhone = $mobPhone;
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
    public function getFirstNamePrimaoc() {
        return $this->firstNamePrimaoc;
    }

    /**
     * @param mixed $firstNamePrimaoc
     */
    public function setFirstNamePrimaoc($firstNamePrimaoc): void {
        $this->firstNamePrimaoc = $firstNamePrimaoc;
    }

    /**
     * @return mixed
     */
    public function getLastNamePrimaoc() {
        return $this->lastNamePrimaoc;
    }

    /**
     * @param mixed $lastNamePrimaoc
     */
    public function setLastNamePrimaoc($lastNamePrimaoc): void {
        $this->lastNamePrimaoc = $lastNamePrimaoc;
    }

    /**
     * @return mixed
     */
    public function getAddressPrimaoc() {
        return $this->addressPrimaoc;
    }

    /**
     * @param mixed $addressPrimaoc
     */
    public function setAddressPrimaoc($addressPrimaoc): void {
        $this->addressPrimaoc = $addressPrimaoc;
    }

    /**
     * @return mixed
     */
    public function getCityPrimaoc() {
        return $this->cityPrimaoc;
    }

    /**
     * @param mixed $cityPrimaoc
     */
    public function setCityPrimaoc($cityPrimaoc): void {
        $this->cityPrimaoc = $cityPrimaoc;
    }

    /**
     * @return mixed
     */
    public function getPostanskiBrPrimaoc() {
        return $this->postanskiBrPrimaoc;
    }

    /**
     * @param mixed $postanskiBrPrimaoc
     */
    public function setPostanskiBrPrimaoc($postanskiBrPrimaoc): void {
        $this->postanskiBrPrimaoc = $postanskiBrPrimaoc;
    }

    /**
     * @return mixed
     */
    public function getMobPhonePrimaoc() {
        return $this->mobPhonePrimaoc;
    }

    /**
     * @param mixed $mobPhonePrimaoc
     */
    public function setMobPhonePrimaoc($mobPhonePrimaoc): void {
        $this->mobPhonePrimaoc = $mobPhonePrimaoc;
    }

    /**
     * @return mixed
     */
    public function getSendEmail() {
        return $this->sendEmail;
    }

    /**
     * @param mixed $sendEmail
     */
    public function setSendEmail($sendEmail): void {
        $this->sendEmail = $sendEmail;
    }

    /**
     * @return mixed
     */
    public function getIsRegistred() {
        return $this->isRegistred;
    }

    /**
     * @param mixed $isRegistred
     */
    public function setIsRegistred($isRegistred): void {
        $this->isRegistred = $isRegistred;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    public function getCreated(): ?\DateTimeInterface {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self {
        $this->created = $created;

        return $this;
    }
}
