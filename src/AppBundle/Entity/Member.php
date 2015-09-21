<?php
namespace AppBundle\Entity;

class Member
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $part;

    /**
     * @var \DateTime
     */
    private $joinedDate;

    public function __construct($name, $part, $joinedDate)
    {
        $this->name = $name;
        $this->part = $part;
        $this->joinedDate = $joinedDate;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * @param string $part
     */
    public function setPart($part)
    {
        $this->part = $part;
    }

    /**
     * @return \DateTime
     */
    public function getJoinedDate()
    {
        return $this->joinedDate;
    }

    /**
     * @param \DateTime $joinedDate
     */
    public function setJoinedDate($joinedDate)
    {
        $this->joinedDate = $joinedDate;
    }
}
