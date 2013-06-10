<?php

namespace LBcrew\CommentairesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commentaires_photo
 *
 * @ORM\Table(name="commentaires_photo")
 * @ORM\Entity(repositoryClass="LBcrew\CommentairesBundle\Entity\commentaires_photoRepository")
 */
class commentaires_photo
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
     * @ORM\Column(name="id_photo", type="integer")
     * @ORM\OneToOne(targetEntity="LBcrew\MediaBundle\Entity\photo")
     * @ORM\JoinColumn(name="id_photo", referencedColumnName="id")
     */
    private $id_photo;

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
     * @return commentaires_photo
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
     * @return commentaires_photo
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
     * Set id_photo
     *
     * @param integer $idPhoto
     * @return commentaires_photo
     */
    public function setIdPhoto($idPhoto)
    {
        $this->id_photo = $idPhoto;
    
        return $this;
    }

    /**
     * Get id_photo
     *
     * @return integer 
     */
    public function getIdPhoto()
    {
        return $this->id_photo;
    }
}