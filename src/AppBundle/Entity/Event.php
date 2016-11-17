<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="FK_Event_idType", columns={"idType"}), @ORM\Index(name="FK_Event_idSalle", columns={"idSalle"})})
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Event
{
    /**
     * @var string
     *
     * @ORM\Column(name="titreEvent", type="string", length=25, nullable=true)
     */
    private $titreEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvent", type="date", nullable=true)
     */
    private $dateEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="pathImage", type="string", length=255, nullable=true)
     */
    protected $pathImage;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="event_image", fileNameProperty="pathImage")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEvent", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var \AppBundle\Entity\Typeevent
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Typeevent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idType", referencedColumnName="idType")
     * })
     */
    private $idType;

    /**
     * @var \AppBundle\Entity\Salle
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSalle", referencedColumnName="idSalle")
     * })
     */
    private $idSalle;



    /**
     * Set titreEvent
     *
     * @param string $titreEvent
     *
     * @return Event
     */
    public function setTitreEvent($titreEvent)
    {
        $this->titreEvent = $titreEvent;

        return $this;
    }

    /**
     * Get titreEvent
     *
     * @return string
     */
    public function getTitreEvent()
    {
        return $this->titreEvent;
    }

    /**
     * Set dateEvent
     *
     * @param \DateTime $dateEvent
     *
     * @return Event
     */
    public function setDateEvent($dateEvent)
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    /**
     * Get dateEvent
     *
     * @return \DateTime
     */
    public function getDateEvent()
    {
        return $this->dateEvent;
    }

    /**
     * Set pathImage
     *
     * @param string $pathImage
     *
     * @return User
     */
    public function setPathImage($pathImage)
    {
        $this->pathImage = $pathImage;

        return $this;
    }

    /**
     * Get pathImage
     *
     * @return string
     */
    public function getPathImage()
    {
        return $this->pathImage;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return User
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Get idEvent
     *
     * @return integer
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * Set idType
     *
     * @param \AppBundle\Entity\Typeevent $idType
     *
     * @return Event
     */
    public function setIdType(\AppBundle\Entity\Typeevent $idType = null)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return \AppBundle\Entity\Typeevent
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set idSalle
     *
     * @param \AppBundle\Entity\Salle $idSalle
     *
     * @return Event
     */
    public function setIdSalle(\AppBundle\Entity\Salle $idSalle = null)
    {
        $this->idSalle = $idSalle;

        return $this;
    }

    /**
     * Get idSalle
     *
     * @return \AppBundle\Entity\Salle
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }
}
