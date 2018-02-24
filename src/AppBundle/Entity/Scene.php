<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scene
 *
 * @ORM\Table(name="scene")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SceneRepository")
 */
class Scene
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="configuration", type="string", length=255)
     */
    private $configuration;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier", type="string", length=255)
     */
    private $fichier;

    /**
     * @var int
     *
     * @ORM\Column(name="sequence", type="integer", nullable=true)
     */
    private $sequence;

    /**
     * @var bool
     *
     * @ORM\Column(name="defaut", type="boolean")
     */
    private $defaut;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Scene
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set configuration
     *
     * @param string $configuration
     *
     * @return Scene
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * Get configuration
     *
     * @return string
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Set fichier
     *
     * @param string $fichier
     *
     * @return Scene
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return string
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return Scene
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set defaut
     *
     * @param boolean $defaut
     *
     * @return Scene
     */
    public function setDefaut($defaut)
    {
        $this->defaut = $defaut;

        return $this;
    }

    /**
     * Get defaut
     *
     * @return bool
     */
    public function getDefaut()
    {
        return $this->defaut;
    }
}

