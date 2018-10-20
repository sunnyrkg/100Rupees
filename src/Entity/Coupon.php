<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coupon
 *
 * @ORM\Table(name="coupon", uniqueConstraints={@ORM\UniqueConstraint(name="code", columns={"code"})})
 * @ORM\Entity
 */
class Coupon
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
     * @ORM\Column(name="code", type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isused", type="boolean", nullable=true)
     */
    private $isused = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="usedby", type="string", length=50, nullable=true, options={"default"="Unused"})
     */
    private $usedby = 'Unused';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="used_date", type="date", nullable=true)
     */
    private $usedDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;

    /**
     * @var int|null
     *
     * @ORM\Column(name="classicvalue", type="integer", nullable=true)
     */
    private $classicvalue = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="mobilevalue", type="integer", nullable=true)
     */
    private $mobilevalue = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expiry", type="date", nullable=true)
     */
    private $expiry;

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getIsused(): ?bool
    {
        return $this->isused;
    }

    public function setIsused(?bool $isused): self
    {
        $this->isused = $isused;

        return $this;
    }

    public function getUsedby(): ?string
    {
        return $this->usedby;
    }

    public function setUsedby(?string $usedby): self
    {
        $this->usedby = $usedby;

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

    public function getUsedDate(): ?\DateTimeInterface
    {
        return $this->usedDate;
    }

    public function setUsedDate(?\DateTimeInterface $usedDate): self
    {
        $this->usedDate = $usedDate;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(?int $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getClassicvalue(): ?int
    {
        return $this->classicvalue;
    }

    public function setClassicvalue(?int $classicvalue): self
    {
        $this->classicvalue = $classicvalue;

        return $this;
    }

    public function getMobilevalue(): ?int
    {
        return $this->mobilevalue;
    }

    public function setMobilevalue(?int $mobilevalue): self
    {
        $this->mobilevalue = $mobilevalue;

        return $this;
    }

    public function getExpiry(): ?\DateTimeInterface
    {
        return $this->expiry;
    }

    public function setExpiry(?\DateTimeInterface $expiry): self
    {
        $this->expiry = $expiry;

        return $this;
    }


}
