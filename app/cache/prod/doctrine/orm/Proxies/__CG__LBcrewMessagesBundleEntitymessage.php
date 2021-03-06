<?php

namespace Proxies\__CG__\LBcrew\MessagesBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class message extends \LBcrew\MessagesBundle\Entity\message implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setMessage($message)
    {
        $this->__load();
        return parent::setMessage($message);
    }

    public function getMessage()
    {
        $this->__load();
        return parent::getMessage();
    }

    public function setDateSendMessage($dateSendMessage)
    {
        $this->__load();
        return parent::setDateSendMessage($dateSendMessage);
    }

    public function getDateSendMessage()
    {
        $this->__load();
        return parent::getDateSendMessage();
    }

    public function setLuMessage($luMessage)
    {
        $this->__load();
        return parent::setLuMessage($luMessage);
    }

    public function getLuMessage()
    {
        $this->__load();
        return parent::getLuMessage();
    }

    public function setUser(\LBcrew\UserBundle\Entity\User $user = NULL)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'message', 'date_send_message', 'lu_message', 'user');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}