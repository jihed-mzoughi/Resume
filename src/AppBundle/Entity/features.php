<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * features
 *
 * @ORM\Table(name="features")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\featuresRepository")
 */
class features
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
     * @ORM\Column(name="name_feature", type="text")
     */
    private $nameFeature;


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
     * Set nameFeature
     *
     * @param string $nameFeature
     *
     * @return features
     */
    public function setNameFeature($nameFeature)
    {
        $this->nameFeature = $nameFeature;

        return $this;
    }

    /**
     * Get nameFeature
     *
     * @return string
     */
    public function getNameFeature()
    {
        return $this->nameFeature;
    }
}

