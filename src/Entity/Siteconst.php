<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Siteconst
 *
 * @ORM\Table(name="siteconst")
 * @ORM\Entity
 */
class Siteconst
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
     * @ORM\Column(name="_key", type="string", length=20, nullable=true)
     */
    private $key;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_value", type="text", length=65535, nullable=true)
     */
    private $value;

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
