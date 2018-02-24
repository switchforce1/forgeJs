<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PositionEntree
 *
 * @ORM\Table(name="position_entree")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PositionEntreeRepository")
 */
class PositionEntree
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

