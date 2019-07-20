<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * University
 *
 * @ORM\Table(name="university")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UniversityRepository")
 */
class University
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
     * @ORM\Column(name="name_uni", type="text")
     */
    private $nameUni;


    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;


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
     * Set nameUni
     *
     * @param string $nameUni
     *
     * @return University
     */
    public function setNameUni($nameUni)
    {
        $this->nameUni = $nameUni;

        return $this;
    }

    /**
     * Get nameUni
     *
     * @return string
     */
    public function getNameUni()
    {
        return $this->nameUni;
    }
}

