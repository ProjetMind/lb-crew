<?php

namespace LBcrew\CommentairesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commentaires_evenement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\CommentairesBundle\Entity\commentaires_evenementRepository")
 */
class commentaires_evenement
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
     * @ORM\Column(name="id_evenement", type="integer")
     * @ORM\OneToOne(targetEntity="LBcrew\MediaBundle\Entity\evenement")
     * @ORM\JoinColumn(name="id_evenement", referencedColumnName="id")
     */
    private $id_evenement;
    
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
     * @return commentaires_evenement
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
     * @return commentaires_evenement
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
     * Set id_evenement
     *
     * @param integer $idEvenement
     * @return commentaires_evenement
     */
    public function setIdEvenement($idEvenement)
    {
        $this->id_evenement = $idEvenement;
    
        return $this;
    }

    /**
     * Get id_evenement
     *
     * @return integer 
     */
    public function getIdEvenement()
    {
        return $this->id_evenement;
    }
}