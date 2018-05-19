<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OptionsRepository")
 */
class Options
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $owner;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ownerImage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ownerImageFile;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tobogan;

    /**
     * @ORM\Column(type="boolean")
     */
    private $towels;

    /**
     * @ORM\Column(type="boolean")
     */
    private $barbecue;

    /**
     * @ORM\Column(type="boolean")
     */
    private $kidsGames;

    /**
     * @ORM\Column(type="boolean")
     */
    private $shower;

    /**
     * @ORM\Column(type="boolean")
     */
    private $chair;

    /**
     * @ORM\Column(type="boolean")
     */
    private $fridge;

    /**
     * @ORM\Column(type="boolean")
     */
    private $heat;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pingPong;

    /**
     * @ORM\Column(type="boolean")
     */
    private $restauration;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pets;

    /**
     * @ORM\Column(type="boolean")
     */
    private $smoke;

    /**
     * @ORM\Column(type="boolean")
     */
    private $calm;

    /**
     * @ORM\Column(type="boolean")
     */
    private $kidsFree;

    /**
     * @ORM\Column(type="boolean")
     */
    private $kids;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ownerPresence;

    public function getId()
    {
        return $this->id;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getOwnerImage(): ?string
    {
        return $this->ownerImage;
    }

    public function setOwnerImage(string $ownerImage): self
    {
        $this->ownerImage = $ownerImage;

        return $this;
    }

    public function getOwnerImageFile(): ?string
    {
        return $this->ownerImageFile;
    }

    public function setOwnerImageFile(string $ownerImageFile): self
    {
        $this->ownerImageFile = $ownerImageFile;

        return $this;
    }

    public function getTobogan(): ?bool
    {
        return $this->tobogan;
    }

    public function setTobogan(bool $tobogan): self
    {
        $this->tobogan = $tobogan;

        return $this;
    }

    public function getTowels(): ?bool
    {
        return $this->towels;
    }

    public function setTowels(bool $towels): self
    {
        $this->towels = $towels;

        return $this;
    }

    public function getBarbecue(): ?bool
    {
        return $this->barbecue;
    }

    public function setBarbecue(bool $barbecue): self
    {
        $this->barbecue = $barbecue;

        return $this;
    }

    public function getKidsGames(): ?bool
    {
        return $this->kidsGames;
    }

    public function setKidsGames(bool $kidsGames): self
    {
        $this->kidsGames = $kidsGames;

        return $this;
    }

    public function getShower(): ?bool
    {
        return $this->shower;
    }

    public function setShower(bool $shower): self
    {
        $this->shower = $shower;

        return $this;
    }

    public function getChair(): ?bool
    {
        return $this->chair;
    }

    public function setChair(bool $chair): self
    {
        $this->chair = $chair;

        return $this;
    }

    public function getFridge(): ?bool
    {
        return $this->fridge;
    }

    public function setFridge(bool $fridge): self
    {
        $this->fridge = $fridge;

        return $this;
    }

    public function getHeat(): ?bool
    {
        return $this->heat;
    }

    public function setHeat(bool $heat): self
    {
        $this->heat = $heat;

        return $this;
    }

    public function getPingPong(): ?bool
    {
        return $this->pingPong;
    }

    public function setPingPong(bool $pingPong): self
    {
        $this->pingPong = $pingPong;

        return $this;
    }

    public function getRestauration(): ?bool
    {
        return $this->restauration;
    }

    public function setRestauration(bool $restauration): self
    {
        $this->restauration = $restauration;

        return $this;
    }

    public function getPets(): ?bool
    {
        return $this->pets;
    }

    public function setPets(bool $pets): self
    {
        $this->pets = $pets;

        return $this;
    }

    public function getSmoke(): ?bool
    {
        return $this->smoke;
    }

    public function setSmoke(bool $smoke): self
    {
        $this->smoke = $smoke;

        return $this;
    }

    public function getCalm(): ?bool
    {
        return $this->calm;
    }

    public function setCalm(bool $calm): self
    {
        $this->calm = $calm;

        return $this;
    }

    public function getKidsFree(): ?bool
    {
        return $this->kidsFree;
    }

    public function setKidsFree(bool $kidsFree): self
    {
        $this->kidsFree = $kidsFree;

        return $this;
    }

    public function getKids(): ?bool
    {
        return $this->kids;
    }

    public function setKids(bool $kids): self
    {
        $this->kids = $kids;

        return $this;
    }

    public function getOwnerPresence(): ?bool
    {
        return $this->ownerPresence;
    }

    public function setOwnerPresence(bool $ownerPresence): self
    {
        $this->ownerPresence = $ownerPresence;

        return $this;
    }
}
