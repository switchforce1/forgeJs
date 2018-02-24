<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdresseRepository")
 */
class Adresse
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
     * @var int
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="typeVoie", type="string", length=255)
     */
    private $typeVoie;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="text")
     */
    private $valeur;


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
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Adresse
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set typeVoie
     *
     * @param string $typeVoie
     *
     * @return Adresse
     */
    public function setTypeVoie($typeVoie)
    {
        $this->typeVoie = $typeVoie;

        return $this;
    }

    /**
     * Get typeVoie
     *
     * @return string
     */
    public function getTypeVoie()
    {
        return $this->typeVoie;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     *
     * @return Adresse
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}

