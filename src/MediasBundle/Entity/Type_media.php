<?php

namespace MediasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_media
 *
 * @ORM\Table(name="type_media")
 * @ORM\Entity(repositoryClass="MediasBundle\Repository\Type_mediaRepository")
 */
class Type_media
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
     * @ORM\Column(name="nom", type="string", length=45)
     */
    private $nom;

    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Media", mappedBy="type_media")
     */
    private $medias;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return type_media
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}

