<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use \Symfony\Component\HttpFoundation\File\File as SymfoFile;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PoolRepository")
 * @Vich\Uploadable
 */
class Pool
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @Vich\UploadableField(mapping="images_file", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

//    /**
//     * @ORM\Column(type="string", length=150)
//     */
//    private $owner;
//
//    /**
//     * @ORM\Column(type="string", length=255)
//     */
//    private $ownerImage;
//
//    /**
//     * @ORM\Column(type="string", length=255)
//     */
//    private $ownerImageFile;

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

//    /**
//     * @ORM\Column(type="array")
//     */
//    private $capacity;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string")
     */
    private $slug;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getCoords()
    {
        return json_encode([
            'lat' => $this->getLatitude(),
            'lng' => $this->getLongitude(),
        ]);
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Blog
     */
    public function setSlug($slug)
    {
        $this->slug = $this->slugify($slug);

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('#[^-\w]+#', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Partenaires
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set imageFile
     *
     * @param string $imageFile
     *
     * @return Partenaires
     */
    public function setImageFile(SymfoFile $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * Get imageFile
     *
     * @return string
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Blog
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

//    public function getOwner(): ?string
//    {
//        return $this->owner;
//    }
//
//    public function setOwner(string $owner): self
//    {
//        $this->owner = $owner;
//
//        return $this;
//    }
//
//    public function getOwnerImage(): ?string
//    {
//        return $this->ownerImage;
//    }
//
//    public function setOwnerImage(string $ownerImage): self
//    {
//        $this->ownerImage = $ownerImage;
//
//        return $this;
//    }
//
//    public function getOwnerImageFile(): ?string
//    {
//        return $this->ownerImageFile;
//    }
//
//    public function setOwnerImageFile(string $ownerImageFile): self
//    {
//        $this->ownerImageFile = $ownerImageFile;
//
//        return $this;
//    }

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
