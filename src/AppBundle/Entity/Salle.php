<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity
 */
class Salle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbPlaces", type="integer", nullable=false)
     * @Assert\Regex(pattern="/\d+/")
     * @Assert\NotBlank()
     */
    private $nbPlaces;

    /**
     * @var string
     *
     * @ORM\Column(name="nomSalle", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Le nom de la salle doit faire au minimum  caractères",
     *      maxMessage = "Le nom de la salle doit faire au maximum  caractères"
     * )
     */
    private $nomSalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSalle", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSalle;



    /**
     * Set nbPlaces
     *
     * @param integer $nbPlaces
     *
     * @return Salle
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    /**
     * Get nbPlaces
     *
     * @return integer
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * Set nomSalle
     *
     * @param string $nomSalle
     *
     * @return Salle
     */
    public function setNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }

    /**
     * Get nomSalle
     *
     * @return string
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     * Get idSalle
     *
     * @return integer
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }
}
