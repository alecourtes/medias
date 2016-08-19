<?php

namespace MediasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="MediasBundle\Repository\MediaRepository")
 */
class Media
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
     * @var type_media
     *
     * @ORM\ManyToOne(targetEntity="Type_media", inversedBy="medias")
     * @ORM\JoinColumn(name="type_media_id", referencedColumnName="id")
     */
    private $type_media;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom_media", type="string", length=100)
     */
    private $nomMedia;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="string", length=255)
     */
    private $descriptif;


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
     * Set nomMedia
     *
     * @param string $nomMedia
     *
     * @return Media
     */
    public function setNomMedia($nomMedia)
    {
        $this->nomMedia = $nomMedia;

        return $this;
    }

    /**
     * Get nomMedia
     *
     * @return string
     */
    public function getNomMedia()
    {
        return $this->nomMedia;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return Media
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

}

