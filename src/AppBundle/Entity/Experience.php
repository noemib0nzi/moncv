<?php // src/AppBundle/Entity/experiences.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="experiences")
 */
class Experience
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /** 
     * @ORM\Column(type="string")
     **/
    private $desc;
    /** 
     * @ORM\Column(type="date")
     **/
    private $dateDebut;
    /** 
     * @ORM\Column(type="date")
     **/
    private $dateFin;
    /** 
     * @ORM\Column(type="string")
     **/
    private $lieu;
}