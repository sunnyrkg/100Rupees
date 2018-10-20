<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bankaccount
 *
 * @ORM\Table(name="bankaccount", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})})
 * @ORM\Entity
 */
class Bankaccount
{
    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ifsc", type="string", length=50, nullable=true)
     */
    private $ifsc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accno", type="string", length=20, nullable=true)
     */
    private $accno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bankname", type="text", length=65535, nullable=true)
     */
    private $bankname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="text", length=65535, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=50, nullable=true)
     */
    private $state;

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getIfsc(): ?string
    {
        return $this->ifsc;
    }

    public function setIfsc(?string $ifsc): self
    {
        $this->ifsc = $ifsc;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAccno(): ?string
    {
        return $this->accno;
    }

    public function setAccno(?string $accno): self
    {
        $this->accno = $accno;

        return $this;
    }

    public function getBankname(): ?string
    {
        return $this->bankname;
    }

    public function setBankname(?string $bankname): self
    {
        $this->bankname = $bankname;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }


}
