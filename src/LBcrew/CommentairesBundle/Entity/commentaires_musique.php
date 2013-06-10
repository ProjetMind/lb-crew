<?php

namespace LBcrew\CommentairesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commentaires_musique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\CommentairesBundle\Entity\commentaires_musiqueRepository")
 */
class commentaires_musique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $commentaire
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @var \DateTime $date_pub_com
     *
     * @ORM\Column(name="date_pub_com", type="datetime")
     */
    private $date_pub_com;
    
    /**
     *
     * @var type integer
     * 
     * @ORM\Column(name="id_musique", type="integer")
     * @ORM\OneToOne(targetEntity="LBcrew\MediaBundle\Entity\musique")
     * @ORM\JoinColumn(name="id_musique", referencedColumnName="id")
     */
    private $id_musique;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return commentaires_musique
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set date_pub_com
     *
     * @param \DateTime $datePubCom
     * @return commentaires_musique
     */
    public function setDatePubCom($datePubCom)
    {
        $this->date_pub_com = $datePubCom;
    
        return $this;
    }

    /**
     * Get date_pub_com
     *
     * @return \DateTime 
     */
    public function getDatePubCom()
    {
        return $this->date_pub_com;
    }

    /**
     * Set id_musique
     *
     * @param integer $idMusique
     * @return commentaires_musique
     */
    public function setIdMusique($idMusique)
    {
        $this->id_musique = $idMusique;
    
        return $this;
    }

    /**
     * Get id_musique
     *
     * @return integer 
     */
    public function getIdMusique()
    {
        return $this->id_musique;
    }
}