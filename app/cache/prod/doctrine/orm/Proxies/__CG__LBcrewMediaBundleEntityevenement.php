<?php

namespace Proxies\__CG__\LBcrew\MediaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class evenement extends \LBcrew\MediaBundle\Entity\evenement implements \Doctrine\ORM\Proxy\Proxy
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

    public function setDateEvenement($dateEvenement)
    {
        $this->__load();
        return parent::setDateEvenement($dateEvenement);
    }

    public function getDateEvenement()
    {
        $this->__load();
        return parent::getDateEvenement();
    }

    public function setHeureDeb($heureDeb)
    {
        $this->__load();
        return parent::setHeureDeb($heureDeb);
    }

    public function getHeureDeb()
    {
        $this->__load();
        return parent::getHeureDeb();
    }

    public function setHeureFin($heureFin)
    {
        $this->__load();
        return parent::setHeureFin($heureFin);
    }

    public function getHeureFin()
    {
        $this->__load();
        return parent::getHeureFin();
    }

    public function setOrganisateur($organisateur)
    {
        $this->__load();
        return parent::setOrganisateur($organisateur);
    }

    public function getOrganisateur()
    {
        $this->__load();
        return parent::getOrganisateur();
    }

    public function setPrix($prix)
    {
        $this->__load();
        return parent::setPrix($prix);
    }

    public function getPrix()
    {
        $this->__load();
        return parent::getPrix();
    }

    public function setAdresse($adresse)
    {
        $this->__load();
        return parent::setAdresse($adresse);
    }

    public function getAdresse()
    {
        $this->__load();
        return parent::getAdresse();
    }

    public function addGenresEvenement(\LBcrew\MediaBundle\Entity\genreEvenement $genresEvenement)
    {
        $this->__load();
        return parent::addGenresEvenement($genresEvenement);
    }

    public function removeGenresEvenement(\LBcrew\MediaBundle\Entity\genreEvenement $genresEvenement)
    {
        $this->__load();
        return parent::removeGenresEvenement($genresEvenement);
    }

    public function getGenresEvenement()
    {
        $this->__load();
        return parent::getGenresEvenement();
    }

    public function setImageEvenement(\LBcrew\MediaBundle\Entity\imageEvenement $imageEvenement = NULL)
    {
        $this->__load();
        return parent::setImageEvenement($imageEvenement);
    }

    public function getImageEvenement()
    {
        $this->__load();
        return parent::getImageEvenement();
    }

    public function setTitreMedia($titreMedia)
    {
        $this->__load();
        return parent::setTitreMedia($titreMedia);
    }

    public function getTitreMedia()
    {
        $this->__load();
        return parent::getTitreMedia();
    }

    public function setDatePubMedia($datePubMedia)
    {
        $this->__load();
        return parent::setDatePubMedia($datePubMedia);
    }

    public function getDatePubMedia()
    {
        $this->__load();
        return parent::getDatePubMedia();
    }

    public function setNbVueMedia($nbVueMedia)
    {
        $this->__load();
        return parent::setNbVueMedia($nbVueMedia);
    }

    public function getNbVueMedia()
    {
        $this->__load();
        return parent::getNbVueMedia();
    }

    public function setDescripMedia($descripMedia)
    {
        $this->__load();
        return parent::setDescripMedia($descripMedia);
    }

    public function getDescripMedia()
    {
        $this->__load();
        return parent::getDescripMedia();
    }

    public function setTest($test)
    {
        $this->__load();
        return parent::setTest($test);
    }

    public function getTest()
    {
        $this->__load();
        return parent::getTest();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'titre_media', 'date_pub_media', 'nb_vue_media', 'descrip_media', 'date_evenement', 'heure_deb', 'heure_fin', 'organisateur', 'prix', 'adresse', 'genres_evenement', 'image_evenement');
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