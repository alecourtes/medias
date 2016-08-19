<?php

namespace MediasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="MediasBundle\Repository\CommentaireRepository")
 */
class Commentaire {

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
     * @ORM\Column(name="titre_commentaire", type="string", length=255)
     */
    private $titreCommentaire;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titreCommentaire
     *
     * @param string $titreCommentaire
     *
     * @return Commentaire
     */
    public function setTitreCommentaire($titreCommentaire) {
        $this->titreCommentaire = $titreCommentaire;

        return $this;
    }

    /**
     * Get titreCommentaire
     *
     * @return string
     */
    public function getTitreCommentaire() {
        return $this->titreCommentaire;
    }

}
