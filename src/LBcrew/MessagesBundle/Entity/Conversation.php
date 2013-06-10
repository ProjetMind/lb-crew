<?php

namespace LBcrew\MessagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conversation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="LBcrew\MessagesBundle\Entity\ConversationRepository")
 */
class Conversation
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
     *
     * @ORM\Column(name="tab_message", type="array")
     * @ORM\OneToMany(targetEntity="LBcrew\CommentairesBundle\Entity\message")
     * @ORM\JoinColumn(name="tab_message", referencedColumnName="id")
     * 
     * @var type array
     */
    private $tab_message;
    
    
    /**
     *
     * @ORM\Column(name="auteur_conversation", type="integer")
     * @ORM\OneToOne(targetEntity="LBcrew\UserBundle\Entity\user")
     * @ORM\JoinColumn(name="auteur_conversation", referencedColumnName="id")
     * 
     * @var type integer
     */
    private $auteur_conversation;

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
     * Set tab_message
     *
     * @param array $tabMessage
     * @return Conversation
     */
    public function setTabMessage($tabMessage)
    {
        $this->tab_message = $tabMessage;
    
        return $this;
    }

    /**
     * Get tab_message
     *
     * @return array 
     */
    public function getTabMessage()
    {
        return $this->tab_message;
    }

    /**
     * Set auteur_conversation
     *
     * @param integer $auteurConversation
     * @return Conversation
     */
    public function setAuteurConversation($auteurConversation)
    {
        $this->auteur_conversation = $auteurConversation;
    
        return $this;
    }

    /**
     * Get auteur_conversation
     *
     * @return integer 
     */
    public function getAuteurConversation()
    {
        return $this->auteur_conversation;
    }
}