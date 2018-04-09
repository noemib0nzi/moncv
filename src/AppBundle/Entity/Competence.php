<?php // src/AppBundle/Entity/competences.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="competences")
 */
class Competence
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

    public function __construct()
    {
        
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this
        ->name = $name;
    }
}
