<?php

namespace LBcrew\MessagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * LBcrew\MessagesBundle\Entity\message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\MessagesBundle\Entity\messageRepository")
 */
class message
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
     * @var string $message
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var \DateTime $date_send_message
     *
     * @ORM\Column(name="date_send_message", type="datetime")
     */
    private $date_send_message;

    /**
     * @var boolean $lu_message
     *
     * @ORM\Column(name="lu_message", type="boolean")
     */
    private $lu_message;

    /**
     *
     * @ORM\Column(name="tab_destinataire", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="tab_destinataire", referencedColumnName="id")
     * @var type Array
     */
    private $tab_destinataire;
    
    /**
     * @ORM\Column(name="expediteur", type="integer")
     * @ORM\ManyToOne(targetEntity="LBcrew\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="expediteur", referencedColumnName="id")
     *
     * @var User $user
     */
    private $user;
    
    /**
     *
     * @ORM\Column(name="id_conversation", type="integer")
     * @ORM\OneToOne(targetEntity="LBcrew\CommentairesBundle\Entity\message")
     * @ORM\JoinColumn(name="id_conversation", referencedColumnName="ide")
     * 
     * @var type  integer
     */
    private $conversation;


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
     * Set message
     *
     * @param string $message
     * @return message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date_send_message
     *
     * @param \DateTime $dateSendMessage
     * @return message
     */
    public function setDateSendMessage($dateSendMessage)
    {
        $this->date_send_message = $dateSendMessage;
    
        return $this;
    }

    /**
     * Get date_send_message
     *
     * @return \DateTime 
     */
    public function getDateSendMessage()
    {
        return $this->date_send_message;
    }

    /**
     * Set lu_message
     *
     * @param boolean $luMessage
     * @return message
     */
    public function setLuMessage($luMessage)
    {
        $this->lu_message = $luMessage;
    
        return $this;
    }

    /**
     * Get lu_message
     *
     * @return boolean 
     */
    public function getLuMessage()
    {
        return $this->lu_message;
    }

    /**
     * Set user
     *
     * @param LBcrew\UserBundle\Entity\User $user
     * @return message
     */
    public function setUser(\LBcrew\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return LBcrew\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set tab_destinataire
     *
     * @param array $tabDestinataire
     * @return message
     */
    public function setTabDestinataire($tabDestinataire)
    {
        $this->tab_destinataire = $tabDestinataire;
    
        return $this;
    }

    /**
     * Get tab_destinataire
     *
     * @return array 
     */
    public function getTabDestinataire()
    {
        return $this->tab_destinataire;
    }

    /**
     * Set conversation
     *
     * @param integer $conversation
     * @return message
     */
    public function setConversation($conversation)
    {
        $this->conversation = $conversation;
    
        return $this;
    }

    /**
     * Get conversation
     *
     * @return integer 
     */
    public function getConversation()
    {
        return $this->conversation;
    }
}