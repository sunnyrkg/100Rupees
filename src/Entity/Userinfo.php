<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userinfo
 *
 * @ORM\Table(name="userinfo")
 * @ORM\Entity
 */
class Userinfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $username = '';

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
     * @ORM\Column(name="state", type="text", length=65535, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="text", length=65535, nullable=true)
     */
    private $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facebook", type="text", length=65535, nullable=true)
     */
    private $facebook;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paytm", type="string", length=11, nullable=true)
     */
    private $paytm;

    public function getUsername(): ?string
    {
        return $this->username;
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

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(?string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getPaytm(): ?string
    {
        return $this->paytm;
    }

    public function setPaytm(?string $paytm): self
    {
        $this->paytm = $paytm;

        return $this;
    }


}
