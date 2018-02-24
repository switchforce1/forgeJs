<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Position
 *
 * @ORM\Table(name="position")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PositionRepository")
 */
class Position
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
     * @ORM\Column(name="scene", type="string", length=255)
     */
    private $scene;


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
     * Set scene
     *
     * @param string $scene
     *
     * @return Position
     */
    public function setScene($scene)
    {
        $this->scene = $scene;

        return $this;
    }

    /**
     * Get scene
     *
     * @return string
     */
    public function getScene()
    {
        return $this->scene;
    }
}

