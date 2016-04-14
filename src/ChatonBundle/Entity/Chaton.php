<?php

namespace ChatonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chaton
 *
 * @ORM\Table(name="chaton")
 * @ORM\Entity(repositoryClass="ChatonBundle\Repository\ChatonRepository")
 */
class Chaton
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    private $miaule;

    private $mange;

    private $age;

    private $nom;

    private $couleur;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

     public function setMiaule($miaule)
    {
        $this->miaule = $miaule;

        return $this;
    }

    public function getMiaule()
    {
        return $this->miaule;
    }

     public function setMange($mange)
    {
        $this->mange = $mange;

        return $this;
    }

    public function getMange()
    {
        return $this->mange;
    }

     public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }


     public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

     public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

   
}

