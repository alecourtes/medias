<?php

namespace MediasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="MediasBundle\Repository\CommentsRepository")
 */
class Comments {

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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var media
     *
     * @ORM\ManyToOne(targetEntity="Media", inversedBy="comments")
     * @ORM\JoinColumn(name="media_id", referencedColumnName="id")
     */
    private $media;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Commentaire
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }


    /**
     * Set media
     *
     * @param \MediasBundle\Entity\Media $media
     *
     * @return Comments
     */
    public function setMedia(\MediasBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \MediasBundle\Entity\Media
     */
    public function getMedia()
    {
        return $this->media;
    }
}
