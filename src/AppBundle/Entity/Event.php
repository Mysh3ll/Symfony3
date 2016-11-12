<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="FK_Event_idType", columns={"idType"}), @ORM\Index(name="FK_Event_idSalle", columns={"idSalle"})})
 * @ORM\Entity
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
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

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
     * Set path
     *
     * @param string $path
     *
     * @return Event
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
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
