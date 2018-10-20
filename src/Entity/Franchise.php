<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Franchise
 *
 * @ORM\Table(name="franchise")
 * @ORM\Entity
 */
class Franchise
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pincode", type="string", length=6, nullable=true)
     */
    private $pincode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="text", length=65535, nullable=true)
     */
    private $city;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pin_percent", type="integer", nullable=true)
     */
    private $pinPercent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="net_percent", type="integer", nullable=true)
     */
    private $netPercent;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPincode(): ?string
    {
        return $this->pincode;
    }

    public function setPincode(?string $pincode): self
    {
        $this->pincode = $pincode;

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

    public function getPinPercent(): ?int
    {
        return $this->pinPercent;
    }

    public function setPinPercent(?int $pinPercent): self
    {
        $this->pinPercent = $pinPercent;

        return $this;
    }

    public function getNetPercent(): ?int
    {
        return $this->netPercent;
    }

    public function setNetPercent(?int $netPercent): self
    {
        $this->netPercent = $netPercent;

        return $this;
    }


}
