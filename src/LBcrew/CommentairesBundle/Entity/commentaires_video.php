<?php

namespace LBcrew\CommentairesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LBcrew\CommentairesBundle\Entity\commentaires_video
 *
 * @ORM\Table(name="commentaires_video")
 * @ORM\Entity(repositoryClass="LBcrew\CommentairesBundle\Entity\commentaires_videoRepository")
 */
class commentaires_video 
{
    /**
     * @var integer $id
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
     * @ORM\Column(name="id_video", type="integer")
     * @ORM\OneToOne(targetEntity="LBcrew\MediaBundle\Entity\video")
     * @ORM\JoinColumn(name="id_video", referencedColumnName="id")
     */
    private $id_video;

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
     * @return commentaires
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
     * @return commentaires
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
     * Set media
     *
     * @param LBcrew\MediaBundle\Entity\media $media
     * @return commentaires
     */
    public function setMedia(\LBcrew\MediaBundle\Entity\media $media = null)
    {
        $this->media = $media;
    
        return $this;
    }

    /**
     * Get media
     *
     * @return LBcrew\MediaBundle\Entity\media 
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set id_video
     *
     * @param integer $idVideo
     * @return commentaires_video
     */
    public function setIdVideo($idVideo)
    {
        $this->id_video = $idVideo;
    
        return $this;
    }

    /**
     * Get id_video
     *
     * @return integer 
     */
    public function getIdVideo()
    {
        return $this->id_video;
    }
}