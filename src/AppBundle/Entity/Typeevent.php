<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeevent
 *
 * @ORM\Table(name="typeevent")
 * @ORM\Entity
 */
class Typeevent
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelleType", type="string", length=25, nullable=true)
     */
    private $libelleType;

    /**
     * @var integer
     *
     * @ORM\Column(name="idType", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idType;



    /**
     * Set libelleType
     *
     * @param string $libelleType
     *
     * @return Typeevent
     */
    public function setLibelleType($libelleType)
    {
        $this->libelleType = $libelleType;

        return $this;
    }

    /**
     * Get libelleType
     *
     * @return string
     */
    public function getLibelleType()
    {
        return $this->libelleType;
    }

    /**
     * Get idType
     *
     * @return integer
     */
    public function getIdType()
    {
        return $this->idType;
    }
}
