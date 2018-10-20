<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passbook
 *
 * @ORM\Table(name="passbook")
 * @ORM\Entity
 */
class Passbook
{
    /**
     * @var int
     *
     * @ORM\Column(name="UID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="type", type="boolean", nullable=true, options={"default"="1"})
     */
    private $type = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transfer_amount", type="integer", nullable=true)
     */
    private $transferAmount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="mobile_balance", type="integer", nullable=true)
     */
    private $mobileBalance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    public function getUid(): ?int
    {
        return $this->uid;
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

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(?bool $type): self
    {
        $this->type = $type;

        return $this;
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

    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    public function setTransferAmount(?int $transferAmount): self
    {
        $this->transferAmount = $transferAmount;

        return $this;
    }

    public function getMobileBalance(): ?int
    {
        return $this->mobileBalance;
    }

    public function setMobileBalance(?int $mobileBalance): self
    {
        $this->mobileBalance = $mobileBalance;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }


}
