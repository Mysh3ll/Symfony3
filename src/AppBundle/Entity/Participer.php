<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participer
 *
 * @ORM\Table(name="participer", indexes={@ORM\Index(name="FK_Participer_id", columns={"id"}), @ORM\Index(name="IDX_EDBE16F82C6A49BA", columns={"idEvent"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ParticiperRepository")
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
     * @var string
     *
     * @ORM\Column(name="html_id", type="string", length=10)
     */
    private $html_id;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=10)
     */
    private $price;

    /**
     * @var bool
     * @ORM\Column(name="enabled", type="boolean", options={"default":false})
     */
    protected $enabled;

    /**
     * @var string
     * @ORM\Column(name="codeUnique", type="string", length=255)
     */
    protected $codeUnique;

    /**
     * @var \AppBundle\Entity\User
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
     * Set html_id
     *
     * @param string $html_id
     *
     * @return Participer
     */
    public function setHtml_id($html_id)
    {
        $this->html_id = $html_id;

        return $this;
    }

    /**
     * Get html_id
     *
     * @return string
     */
    public function gethtml_id()
    {
        return $this->html_id;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Participer
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set idPersonne
     *
     * @param \AppBundle\Entity\User $idPersonne
     *
     * @return Participer
     */
    public function setIdPersonne(\AppBundle\Entity\User $idPersonne)
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

    /**
     * Set htmlId
     *
     * @param string $htmlId
     *
     * @return Participer
     */
    public function setHtmlId($htmlId)
    {
        $this->html_id = $htmlId;

        return $this;
    }

    /**
     * Get htmlId
     *
     * @return string
     */
    public function getHtmlId()
    {
        return $this->html_id;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Participer
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set codeUnique
     *
     * @param string $codeUnique
     *
     * @return Participer
     */
    public function setCodeUnique($codeUnique)
    {
        $this->codeUnique = $codeUnique;

        return $this;
    }

    /**
     * Get codeUnique
     *
     * @return string
     */
    public function getCodeUnique()
    {
        return $this->codeUnique;
    }
}
