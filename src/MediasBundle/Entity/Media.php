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
     * @var media_type
     *
     * @ORM\ManyToOne(targetEntity="MediaType", inversedBy="medias")
     * @ORM\JoinColumn(name="media_type_id", referencedColumnName="id")
     */
    private $media_type;
    
    
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

     /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Comments", mappedBy="media")
     */
    private $comments;
     /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Users", mappedBy="medias")
     */
    private $users;

     /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Platform", inversedBy="medias")
     */
    private $platforms;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Theme", inversedBy="medias")
     */
    private $themes;


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
     * @return Media
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Media
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->platforms = new \Doctrine\Common\Collections\ArrayCollection();
        $this->themes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set mediaType
     *
     * @param \MediasBundle\Entity\MediaType $mediaType
     *
     * @return Media
     */
    public function setMediaType(\MediasBundle\Entity\MediaType $mediaType = null)
    {
        $this->media_type = $mediaType;

        return $this;
    }

    /**
     * Get mediaType
     *
     * @return \MediasBundle\Entity\MediaType
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * Add comment
     *
     * @param \MediasBundle\Entity\Comments $comment
     *
     * @return Media
     */
    public function addComment(\MediasBundle\Entity\Comments $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \MediasBundle\Entity\Comments $comment
     */
    public function removeComment(\MediasBundle\Entity\Comments $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add user
     *
     * @param \MediasBundle\Entity\Users $user
     *
     * @return Media
     */
    public function addUser(\MediasBundle\Entity\Users $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \MediasBundle\Entity\Users $user
     */
    public function removeUser(\MediasBundle\Entity\Users $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add platform
     *
     * @param \MediasBundle\Entity\Platform $platform
     *
     * @return Media
     */
    public function addPlatform(\MediasBundle\Entity\Platform $platform)
    {
        $this->platforms[] = $platform;

        return $this;
    }

    /**
     * Remove platform
     *
     * @param \MediasBundle\Entity\Platform $platform
     */
    public function removePlatform(\MediasBundle\Entity\Platform $platform)
    {
        $this->platforms->removeElement($platform);
    }

    /**
     * Get platforms
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlatforms()
    {
        return $this->platforms;
    }

    /**
     * Add theme
     *
     * @param \MediasBundle\Entity\Theme $theme
     *
     * @return Media
     */
    public function addTheme(\MediasBundle\Entity\Theme $theme)
    {
        $this->themes[] = $theme;

        return $this;
    }

    /**
     * Remove theme
     *
     * @param \MediasBundle\Entity\Theme $theme
     */
    public function removeTheme(\MediasBundle\Entity\Theme $theme)
    {
        $this->themes->removeElement($theme);
    }

    /**
     * Get themes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getThemes()
    {
        return $this->themes;
    }
}
