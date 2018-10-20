<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recharge
 *
 * @ORM\Table(name="recharge", uniqueConstraints={@ORM\UniqueConstraint(name="uid", columns={"old_uid"})}, indexes={@ORM\Index(name="uid_2", columns={"old_uid"})})
 * @ORM\Entity
 */
class Recharge
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
     * @ORM\Column(name="old_uid", type="integer", nullable=true)
     */
    private $oldUid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="payid", type="integer", nullable=true)
     */
    private $payid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="for_id", type="integer", nullable=true)
     */
    private $forId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="txn_desc", type="text", length=65535, nullable=true)
     */
    private $txnDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="op_ref", type="text", length=65535, nullable=true)
     */
    private $opRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="text", length=65535, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobile", type="text", length=65535, nullable=true)
     */
    private $mobile;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount", type="integer", nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time", type="datetime", nullable=true)
     */
    private $time;

    /**
     * @var int|null
     *
     * @ORM\Column(name="provider_id", type="integer", nullable=true)
     */
    private $providerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="provider_name", type="string", length=50, nullable=true, options={"default"="Not Available"})
     */
    private $providerName = 'Not Available';

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mode", type="boolean", nullable=true, options={"default"="1"})
     */
    private $mode = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isinitiated", type="boolean", nullable=true)
     */
    private $isinitiated = '0';

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

    public function getOldUid(): ?int
    {
        return $this->oldUid;
    }

    public function setOldUid(?int $oldUid): self
    {
        $this->oldUid = $oldUid;

        return $this;
    }

    public function getPayid(): ?int
    {
        return $this->payid;
    }

    public function setPayid(?int $payid): self
    {
        $this->payid = $payid;

        return $this;
    }

    public function getForId(): ?int
    {
        return $this->forId;
    }

    public function setForId(?int $forId): self
    {
        $this->forId = $forId;

        return $this;
    }

    public function getTxnDesc(): ?string
    {
        return $this->txnDesc;
    }

    public function setTxnDesc(?string $txnDesc): self
    {
        $this->txnDesc = $txnDesc;

        return $this;
    }

    public function getOpRef(): ?string
    {
        return $this->opRef;
    }

    public function setOpRef(?string $opRef): self
    {
        $this->opRef = $opRef;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

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

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(?\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getProviderId(): ?int
    {
        return $this->providerId;
    }

    public function setProviderId(?int $providerId): self
    {
        $this->providerId = $providerId;

        return $this;
    }

    public function getProviderName(): ?string
    {
        return $this->providerName;
    }

    public function setProviderName(?string $providerName): self
    {
        $this->providerName = $providerName;

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

    public function getMode(): ?bool
    {
        return $this->mode;
    }

    public function setMode(?bool $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getIsinitiated(): ?bool
    {
        return $this->isinitiated;
    }

    public function setIsinitiated(?bool $isinitiated): self
    {
        $this->isinitiated = $isinitiated;

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
