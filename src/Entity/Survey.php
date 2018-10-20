<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey
 *
 * @ORM\Table(name="survey", uniqueConstraints={@ORM\UniqueConstraint(name="phone", columns={"phone"})})
 * @ORM\Entity
 */
class Survey
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=50, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="district", type="string", length=50, nullable=true)
     */
    private $district;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=50, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="answers", type="text", length=65535, nullable=true)
     */
    private $answers;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sid", type="string", length=50, nullable=true)
     */
    private $sid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="q1", type="boolean", nullable=true)
     */
    private $q1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="q2", type="boolean", nullable=true)
     */
    private $q2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="q3", type="boolean", nullable=true)
     */
    private $q3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="q4", type="boolean", nullable=true)
     */
    private $q4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="q5", type="boolean", nullable=true)
     */
    private $q5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="q6", type="boolean", nullable=true)
     */
    private $q6;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="q7", type="boolean", nullable=true)
     */
    private $q7;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="q8", type="boolean", nullable=true)
     */
    private $q8;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="q9", type="boolean", nullable=true)
     */
    private $q9;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="q10", type="boolean", nullable=true)
     */
    private $q10;

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

    public function getAnswers(): ?string
    {
        return $this->answers;
    }

    public function setAnswers(?string $answers): self
    {
        $this->answers = $answers;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSid(): ?string
    {
        return $this->sid;
    }

    public function setSid(?string $sid): self
    {
        $this->sid = $sid;

        return $this;
    }

    public function getQ1(): ?bool
    {
        return $this->q1;
    }

    public function setQ1(?bool $q1): self
    {
        $this->q1 = $q1;

        return $this;
    }

    public function getQ2(): ?bool
    {
        return $this->q2;
    }

    public function setQ2(?bool $q2): self
    {
        $this->q2 = $q2;

        return $this;
    }

    public function getQ3(): ?bool
    {
        return $this->q3;
    }

    public function setQ3(?bool $q3): self
    {
        $this->q3 = $q3;

        return $this;
    }

    public function getQ4(): ?bool
    {
        return $this->q4;
    }

    public function setQ4(?bool $q4): self
    {
        $this->q4 = $q4;

        return $this;
    }

    public function getQ5(): ?bool
    {
        return $this->q5;
    }

    public function setQ5(?bool $q5): self
    {
        $this->q5 = $q5;

        return $this;
    }

    public function getQ6(): ?bool
    {
        return $this->q6;
    }

    public function setQ6(?bool $q6): self
    {
        $this->q6 = $q6;

        return $this;
    }

    public function getQ7(): ?bool
    {
        return $this->q7;
    }

    public function setQ7(?bool $q7): self
    {
        $this->q7 = $q7;

        return $this;
    }

    public function getQ8(): ?bool
    {
        return $this->q8;
    }

    public function setQ8(?bool $q8): self
    {
        $this->q8 = $q8;

        return $this;
    }

    public function getQ9(): ?bool
    {
        return $this->q9;
    }

    public function setQ9(?bool $q9): self
    {
        $this->q9 = $q9;

        return $this;
    }

    public function getQ10(): ?bool
    {
        return $this->q10;
    }

    public function setQ10(?bool $q10): self
    {
        $this->q10 = $q10;

        return $this;
    }


}
