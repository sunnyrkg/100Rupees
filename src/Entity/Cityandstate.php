<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cityandstate
 *
 * @ORM\Table(name="cityandstate")
 * @ORM\Entity
 */
class Cityandstate
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
     * @ORM\Column(name="city", type="string", length=21, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=20, nullable=true)
     */
    private $state;

    public function getUid(): ?int
    {
        return $this->uid;
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
