<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participer
 *
 * @ORM\Table(name="participer", indexes={@ORM\Index(name="FK_Participer_id", columns={"id"}), @ORM\Index(name="IDX_EDBE16F82C6A49BA", columns={"idEvent"})})
 * @ORM\Entity
 */
class Participer
{
    /**
     * @var string
     *
     * @ORM\Column(name="numPlace", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numPlace;

    /**
     * @var \AppBundle\Entity\Personne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $idPersonne;

    /**
     * @var \AppBundle\Entity\Event
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEvent", referencedColumnName="idEvent")
     * })
     */
    private $idEvent;



    /**
     * Set numPlace
     *
     * @param string $numPlace
     *
     * @return Participer
     */
    public function setNumPlace($numPlace)
    {
        $this->numPlace = $numPlace;

        return $this;
    }

    /**
     * Get numPlace
     *
     * @return string
     */
    public function getNumPlace()
    {
        return $this->numPlace;
    }

    /**
     * Set idPersonne
     *
     * @param \AppBundle\Entity\Personne $idPersonne
     *
     * @return Participer
     */
    public function setIdPersonne(\AppBundle\Entity\Personne $idPersonne)
    {
        $this->idPersonne = $idPersonne;

        return $this;
    }

    /**
     * Get idPersonne
     *
     * @return \AppBundle\Entity\Personne
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * Set idEvent
     *
     * @param \AppBundle\Entity\Event $idEvent
     *
     * @return Participer
     */
    public function setIdEvent(\AppBundle\Entity\Event $idEvent)
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    /**
     * Get idEvent
     *
     * @return \AppBundle\Entity\Event
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }
}
