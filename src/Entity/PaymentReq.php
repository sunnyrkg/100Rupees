<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentReq
 *
 * @ORM\Table(name="payment_req")
 * @ORM\Entity
 */
class PaymentReq
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
     * @ORM\Column(name="username", type="text", length=65535, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mode", type="string", length=10, nullable=true)
     */
    private $mode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ifsc", type="text", length=65535, nullable=true)
     */
    private $ifsc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="a_number", type="text", length=65535, nullable=true)
     */
    private $aNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="a_holder", type="text", length=65535, nullable=true)
     */
    private $aHolder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="age", type="text", length=65535, nullable=true)
     */
    private $age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bank", type="text", length=65535, nullable=true)
     */
    private $bank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="branch", type="text", length=65535, nullable=true)
     */
    private $branch;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var int|null
     *
     * @ORM\Column(name="requested_amount", type="integer", nullable=true)
     */
    private $requestedAmount;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="text", length=65535, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="district", type="text", length=65535, nullable=true)
     */
    private $district;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="text", length=65535, nullable=true)
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

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

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

    public function getIfsc(): ?string
    {
        return $this->ifsc;
    }

    public function setIfsc(?string $ifsc): self
    {
        $this->ifsc = $ifsc;

        return $this;
    }

    public function getANumber(): ?string
    {
        return $this->aNumber;
    }

    public function setANumber(?string $aNumber): self
    {
        $this->aNumber = $aNumber;

        return $this;
    }

    public function getAHolder(): ?string
    {
        return $this->aHolder;
    }

    public function setAHolder(?string $aHolder): self
    {
        $this->aHolder = $aHolder;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(?string $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): self
    {
        $this->bank = $bank;

        return $this;
    }

    public function getBranch(): ?string
    {
        return $this->branch;
    }

    public function setBranch(?string $branch): self
    {
        $this->branch = $branch;

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

    public function getRequestedAmount(): ?int
    {
        return $this->requestedAmount;
    }

    public function setRequestedAmount(?int $requestedAmount): self
    {
        $this->requestedAmount = $requestedAmount;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

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

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): self
    {
        $this->district = $district;

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
