<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="uid", columns={"uid"}), @ORM\UniqueConstraint(name="phone", columns={"phone"})}, indexes={@ORM\Index(name="username", columns={"username"})})
 * @ORM\Entity
 */
class User
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
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="plan", type="integer", nullable=true, options={"default"="1"})
     */
    private $plan = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="s_plan", type="boolean", nullable=true, options={"default"="1"})
     */
    private $sPlan = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="text", length=65535, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=50, nullable=true)
     */
    private $phone;

    /**
     * @var bool
     *
     * @ORM\Column(name="p_verified", type="boolean", nullable=false)
     */
    private $pVerified = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="i_verified", type="boolean", nullable=false)
     */
    private $iVerified = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=50, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=true)
     */
    private $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facebook", type="text", length=65535, nullable=true)
     */
    private $facebook;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paytm", type="string", length=15, nullable=true)
     */
    private $paytm;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="profession_code", type="boolean", nullable=true)
     */
    private $professionCode = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="mode", type="integer", nullable=true)
     */
    private $mode = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent", type="text", length=65535, nullable=true)
     */
    private $parent;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isact", type="boolean", nullable=true)
     */
    private $isact = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DT", type="datetime", nullable=true)
     */
    private $dt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grandparent", type="string", length=50, nullable=true)
     */
    private $grandparent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sibling", type="integer", nullable=true)
     */
    private $sibling;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="actdate", type="datetime", nullable=true)
     */
    private $actdate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="child", type="integer", nullable=true)
     */
    private $child = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="grandchild", type="integer", nullable=true)
     */
    private $grandchild = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=50, nullable=true, options={"default"="PNA"})
     */
    private $photo = 'PNA';

    /**
     * @var string
     *
     * @ORM\Column(name="iphoto", type="string", length=50, nullable=false, options={"default"="PNA"})
     */
    private $iphoto = 'PNA';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="refunded", type="boolean", nullable=true)
     */
    private $refunded = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="comm", type="boolean", nullable=true)
     */
    private $comm = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="royalty", type="boolean", nullable=true)
     */
    private $royalty = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="golddate", type="date", nullable=true)
     */
    private $golddate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pearldate", type="date", nullable=true)
     */
    private $pearldate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="suffiredate", type="date", nullable=true)
     */
    private $suffiredate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="diamonddate", type="date", nullable=true)
     */
    private $diamonddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=50, nullable=true)
     */
    private $ip;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="logintime", type="datetime", nullable=true)
     */
    private $logintime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pastip", type="string", length=50, nullable=true, options={"default"="0.0.0.0"})
     */
    private $pastip = '0.0.0.0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pastlogintime", type="datetime", nullable=true)
     */
    private $pastlogintime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OTP", type="integer", nullable=true, options={"default"="19384"})
     */
    private $otp = '19384';

    /**
     * @var string|null
     *
     * @ORM\Column(name="apikey", type="text", length=65535, nullable=true)
     */
    private $apikey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pin", type="integer", nullable=true, options={"default"="9989"})
     */
    private $pin = '9989';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pincode", type="string", length=7, nullable=true)
     */
    private $pincode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isfranchise", type="boolean", nullable=true)
     */
    private $isfranchise = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isapi", type="boolean", nullable=false)
     */
    private $isapi = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fran_uid", type="integer", nullable=true)
     */
    private $franUid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="l_block", type="boolean", nullable=true)
     */
    private $lBlock = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="p_block", type="boolean", nullable=true)
     */
    private $pBlock = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="r_block", type="boolean", nullable=true)
     */
    private $rBlock = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="family", type="bigint", nullable=true)
     */
    private $family = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="reward", type="integer", nullable=true)
     */
    private $reward;

    /**
     * @var int|null
     *
     * @ORM\Column(name="scale_family", type="bigint", nullable=true)
     */
    private $scaleFamily = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pro_flag", type="boolean", nullable=true)
     */
    private $proFlag = '0';

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function setUid(int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getPlan(): ?int
    {
        return $this->plan;
    }

    public function setPlan(?int $plan): self
    {
        $this->plan = $plan;

        return $this;
    }

    public function getSPlan(): ?bool
    {
        return $this->sPlan;
    }

    public function setSPlan(?bool $sPlan): self
    {
        $this->sPlan = $sPlan;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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

    public function getPVerified(): ?bool
    {
        return $this->pVerified;
    }

    public function setPVerified(bool $pVerified): self
    {
        $this->pVerified = $pVerified;

        return $this;
    }

    public function getIVerified(): ?bool
    {
        return $this->iVerified;
    }

    public function setIVerified(bool $iVerified): self
    {
        $this->iVerified = $iVerified;

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

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function setFacebook(?string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function getPaytm(): ?string
    {
        return $this->paytm;
    }

    public function setPaytm(?string $paytm): self
    {
        $this->paytm = $paytm;

        return $this;
    }

    public function getProfessionCode(): ?bool
    {
        return $this->professionCode;
    }

    public function setProfessionCode(?bool $professionCode): self
    {
        $this->professionCode = $professionCode;

        return $this;
    }

    public function getMode(): ?int
    {
        return $this->mode;
    }

    public function setMode(?int $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(?string $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getIsact(): ?bool
    {
        return $this->isact;
    }

    public function setIsact(?bool $isact): self
    {
        $this->isact = $isact;

        return $this;
    }

    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(?\DateTimeInterface $dt): self
    {
        $this->dt = $dt;

        return $this;
    }

    public function getGrandparent(): ?string
    {
        return $this->grandparent;
    }

    public function setGrandparent(?string $grandparent): self
    {
        $this->grandparent = $grandparent;

        return $this;
    }

    public function getSibling(): ?int
    {
        return $this->sibling;
    }

    public function setSibling(?int $sibling): self
    {
        $this->sibling = $sibling;

        return $this;
    }

    public function getActdate(): ?\DateTimeInterface
    {
        return $this->actdate;
    }

    public function setActdate(?\DateTimeInterface $actdate): self
    {
        $this->actdate = $actdate;

        return $this;
    }

    public function getChild(): ?int
    {
        return $this->child;
    }

    public function setChild(?int $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function getGrandchild(): ?int
    {
        return $this->grandchild;
    }

    public function setGrandchild(?int $grandchild): self
    {
        $this->grandchild = $grandchild;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getIphoto(): ?string
    {
        return $this->iphoto;
    }

    public function setIphoto(string $iphoto): self
    {
        $this->iphoto = $iphoto;

        return $this;
    }

    public function getRefunded(): ?bool
    {
        return $this->refunded;
    }

    public function setRefunded(?bool $refunded): self
    {
        $this->refunded = $refunded;

        return $this;
    }

    public function getComm(): ?bool
    {
        return $this->comm;
    }

    public function setComm(?bool $comm): self
    {
        $this->comm = $comm;

        return $this;
    }

    public function getRoyalty(): ?bool
    {
        return $this->royalty;
    }

    public function setRoyalty(?bool $royalty): self
    {
        $this->royalty = $royalty;

        return $this;
    }

    public function getGolddate(): ?\DateTimeInterface
    {
        return $this->golddate;
    }

    public function setGolddate(?\DateTimeInterface $golddate): self
    {
        $this->golddate = $golddate;

        return $this;
    }

    public function getPearldate(): ?\DateTimeInterface
    {
        return $this->pearldate;
    }

    public function setPearldate(?\DateTimeInterface $pearldate): self
    {
        $this->pearldate = $pearldate;

        return $this;
    }

    public function getSuffiredate(): ?\DateTimeInterface
    {
        return $this->suffiredate;
    }

    public function setSuffiredate(?\DateTimeInterface $suffiredate): self
    {
        $this->suffiredate = $suffiredate;

        return $this;
    }

    public function getDiamonddate(): ?\DateTimeInterface
    {
        return $this->diamonddate;
    }

    public function setDiamonddate(?\DateTimeInterface $diamonddate): self
    {
        $this->diamonddate = $diamonddate;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getLogintime(): ?\DateTimeInterface
    {
        return $this->logintime;
    }

    public function setLogintime(?\DateTimeInterface $logintime): self
    {
        $this->logintime = $logintime;

        return $this;
    }

    public function getPastip(): ?string
    {
        return $this->pastip;
    }

    public function setPastip(?string $pastip): self
    {
        $this->pastip = $pastip;

        return $this;
    }

    public function getPastlogintime(): ?\DateTimeInterface
    {
        return $this->pastlogintime;
    }

    public function setPastlogintime(?\DateTimeInterface $pastlogintime): self
    {
        $this->pastlogintime = $pastlogintime;

        return $this;
    }

    public function getOtp(): ?int
    {
        return $this->otp;
    }

    public function setOtp(?int $otp): self
    {
        $this->otp = $otp;

        return $this;
    }

    public function getApikey(): ?string
    {
        return $this->apikey;
    }

    public function setApikey(?string $apikey): self
    {
        $this->apikey = $apikey;

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

    public function getPincode(): ?string
    {
        return $this->pincode;
    }

    public function setPincode(?string $pincode): self
    {
        $this->pincode = $pincode;

        return $this;
    }

    public function getIsfranchise(): ?bool
    {
        return $this->isfranchise;
    }

    public function setIsfranchise(?bool $isfranchise): self
    {
        $this->isfranchise = $isfranchise;

        return $this;
    }

    public function getIsapi(): ?bool
    {
        return $this->isapi;
    }

    public function setIsapi(bool $isapi): self
    {
        $this->isapi = $isapi;

        return $this;
    }

    public function getFranUid(): ?int
    {
        return $this->franUid;
    }

    public function setFranUid(?int $franUid): self
    {
        $this->franUid = $franUid;

        return $this;
    }

    public function getLBlock(): ?bool
    {
        return $this->lBlock;
    }

    public function setLBlock(?bool $lBlock): self
    {
        $this->lBlock = $lBlock;

        return $this;
    }

    public function getPBlock(): ?bool
    {
        return $this->pBlock;
    }

    public function setPBlock(?bool $pBlock): self
    {
        $this->pBlock = $pBlock;

        return $this;
    }

    public function getRBlock(): ?bool
    {
        return $this->rBlock;
    }

    public function setRBlock(?bool $rBlock): self
    {
        $this->rBlock = $rBlock;

        return $this;
    }

    public function getFamily(): ?int
    {
        return $this->family;
    }

    public function setFamily(?int $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function getReward(): ?int
    {
        return $this->reward;
    }

    public function setReward(?int $reward): self
    {
        $this->reward = $reward;

        return $this;
    }

    public function getScaleFamily(): ?int
    {
        return $this->scaleFamily;
    }

    public function setScaleFamily(?int $scaleFamily): self
    {
        $this->scaleFamily = $scaleFamily;

        return $this;
    }

    public function getProFlag(): ?bool
    {
        return $this->proFlag;
    }

    public function setProFlag(?bool $proFlag): self
    {
        $this->proFlag = $proFlag;

        return $this;
    }


}
