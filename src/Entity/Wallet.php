<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wallet
 *
 * @ORM\Table(name="wallet")
 * @ORM\Entity
 */
class Wallet
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_trans", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $lastTrans = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="PIN", type="integer", nullable=true, options={"default"="1828"})
     */
    private $pin = '1828';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="islock", type="boolean", nullable=true)
     */
    private $islock = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount", type="integer", nullable=true)
     */
    private $amount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="vamount", type="integer", nullable=true)
     */
    private $vamount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="mobile", type="integer", nullable=true)
     */
    private $mobile = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="reserve", type="integer", nullable=true)
     */
    private $reserve = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="scholar", type="integer", nullable=true)
     */
    private $scholar = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ecom", type="integer", nullable=true)
     */
    private $ecom = '0';

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getLastTrans(): ?\DateTimeInterface
    {
        return $this->lastTrans;
    }

    public function setLastTrans(?\DateTimeInterface $lastTrans): self
    {
        $this->lastTrans = $lastTrans;

        return $this;
    }

    public function getPin(): ?int
    {
        return $this->pin;
    }

    public function setPin(?int $pin): self
    {
        $this->pin = $pin;

        return $this;
    }

    public function getIslock(): ?bool
    {
        return $this->islock;
    }

    public function setIslock(?bool $islock): self
    {
        $this->islock = $islock;

        return $this;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getVamount(): ?int
    {
        return $this->vamount;
    }

    public function setVamount(?int $vamount): self
    {
        $this->vamount = $vamount;

        return $this;
    }

    public function getMobile(): ?int
    {
        return $this->mobile;
    }

    public function setMobile(?int $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getReserve(): ?int
    {
        return $this->reserve;
    }

    public function setReserve(?int $reserve): self
    {
        $this->reserve = $reserve;

        return $this;
    }

    public function getScholar(): ?int
    {
        return $this->scholar;
    }

    public function setScholar(?int $scholar): self
    {
        $this->scholar = $scholar;

        return $this;
    }

    public function getEcom(): ?int
    {
        return $this->ecom;
    }

    public function setEcom(?int $ecom): self
    {
        $this->ecom = $ecom;

        return $this;
    }


}
