<?php

namespace MediasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaType
 *
 * @ORM\Table(name="media_type")
 * @ORM\Entity(repositoryClass="MediasBundle\Repository\MediaTypeRepository")
 */
class MediaType
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
     * @ORM\Column(name="name", type="string", length=45)
     */
    private $name;

    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Media", mappedBy="media_type")
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
     * Set name
     *
     * @param string $name
     *
     * @return media_type
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

