<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deplacement
 *
 * @ORM\Table(name="deplacement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DeplacementRepository")
 */
class Deplacement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pointSortie", type="string", length=255)
     */
    private $pointSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="positionEntree", type="string", length=255)
     */
    private $positionEntree;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pointSortie
     *
     * @param string $pointSortie
     *
     * @return Deplacement
     */
    public function setPointSortie($pointSortie)
    {
        $this->pointSortie = $pointSortie;

        return $this;
    }

    /**
     * Get pointSortie
     *
     * @return string
     */
    public function getPointSortie()
    {
        return $this->pointSortie;
    }

    /**
     * Set positionEntree
     *
     * @param string $positionEntree
     *
     * @return Deplacement
     */
    public function setPositionEntree($positionEntree)
    {
        $this->positionEntree = $positionEntree;

        return $this;
    }

    /**
     * Get positionEntree
     *
     * @return string
     */
    public function getPositionEntree()
    {
        return $this->positionEntree;
    }
}

