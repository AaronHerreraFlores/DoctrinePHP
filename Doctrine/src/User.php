<?php
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;/**
* @Entity @Table(name="products")
**/
// src/User.php
/**
 * @Entity @Table(name="users")
 */
class User
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;

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
        $this->name = $name;
    }

    public function __construct()
    {
        $this->reportedBugs = new ArrayCollection();
        $this->assignedBugs = new ArrayCollection();
    }

    private $reportedBugs = null;
    private $assignedBugs = null;

    public function addReportedBug($bug)
    {
        $this->reportedBugs[] = $bug;
    }

    public function assignedToBug($bug)
    {
        $this->assignedBugs[] = $bug;
    }
}
