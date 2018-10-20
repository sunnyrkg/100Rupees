<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Query
 *
 * @ORM\Table(name="query", uniqueConstraints={@ORM\UniqueConstraint(name="refid", columns={"refid"})})
 * @ORM\Entity
 */
class Query
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
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="query", type="text", length=65535, nullable=true)
     */
    private $query;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="time", type="datetime", nullable=true)
     */
    private $time;

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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(?string $query): self
    {
        $this->query = $query;

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

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(?\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }


}
