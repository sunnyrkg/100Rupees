<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addmoneyrequest
 *
 * @ORM\Table(name="addmoneyrequest", uniqueConstraints={@ORM\UniqueConstraint(name="refid", columns={"refid"})})
 * @ORM\Entity
 */
class Addmoneyrequest
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
     * @var int|null
     *
     * @ORM\Column(name="refid", type="integer", nullable=true)
     */
    private $refid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $time = 'CURRENT_TIMESTAMP';

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
     * @ORM\Column(name="transaction", type="text", length=65535, nullable=true)
     */
    private $transaction;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mode", type="boolean", nullable=true)
     */
    private $mode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getRefid(): ?int
    {
        return $this->refid;
    }

    public function setRefid(?int $refid): self
    {
        $this->refid = $refid;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(?\DateTimeInterface $time): self
    {
        $this->time = $time;

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

    public function getTransaction(): ?string
    {
        return $this->transaction;
    }

    public function setTransaction(?string $transaction): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    public function getMode(): ?bool
    {
        return $this->mode;
    }

    public function setMode(?bool $mode): self
    {
        $this->mode = $mode;

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


}
