<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paytm
 *
 * @ORM\Table(name="paytm", uniqueConstraints={@ORM\UniqueConstraint(name="orderid", columns={"orderid"})})
 * @ORM\Entity
 */
class Paytm
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
     * @var int|null
     *
     * @ORM\Column(name="orderid", type="bigint", nullable=true)
     */
    private $orderid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount", type="integer", nullable=true)
     */
    private $amount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transdetail", type="text", length=65535, nullable=true)
     */
    private $transdetail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="forop", type="integer", nullable=true)
     */
    private $forop;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="op", type="boolean", nullable=true)
     */
    private $op;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment2", type="text", length=65535, nullable=true)
     */
    private $comment2;

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getOrderid(): ?int
    {
        return $this->orderid;
    }

    public function setOrderid(?int $orderid): self
    {
        $this->orderid = $orderid;

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

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(?int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getTransdetail(): ?string
    {
        return $this->transdetail;
    }

    public function setTransdetail(?string $transdetail): self
    {
        $this->transdetail = $transdetail;

        return $this;
    }

    public function getForop(): ?int
    {
        return $this->forop;
    }

    public function setForop(?int $forop): self
    {
        $this->forop = $forop;

        return $this;
    }

    public function getOp(): ?bool
    {
        return $this->op;
    }

    public function setOp(?bool $op): self
    {
        $this->op = $op;

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

    public function getComment2(): ?string
    {
        return $this->comment2;
    }

    public function setComment2(?string $comment2): self
    {
        $this->comment2 = $comment2;

        return $this;
    }


}
