<?php
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class MemberCollection extends ArrayCollection
{
    public function addMember($name, $part, $joinedDate)
    {
        $member = new Member($name, $part, $joinedDate);
        $this->add($member);
    }
}
