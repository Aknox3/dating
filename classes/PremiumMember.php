<?php

/**
 * Class PremiumMember
 * A premium member, which is a member with interests
 * @author Ashton Knox
 * @version 1.0
 */
class PremiumMember extends Member
{
    private $_indoorInterests = array();
    private $_outdoorInterests = array();

    /**
     * Returns indoorInterests as an array
     * @return array indoorInterests
     */
    function getIndoorInterests()
    {
        return $this->_indoorInterests;
    }

    /**
     * @param $indoorInterests
     * sets indoor interests to the given array
     */
    function setIndoorInterests($indoorInterests)
    {
        $this->_indoorInterests = $indoorInterests;
    }

    /**
     * @return array outdoorInterests
     * returns outdoorInterests as an array
     */
    function getOutdoorInterests()
    {
        return $this->_outdoorInterests;
    }

    /**
     * @param $outdoorInterests
     * sets outdoor interests to the given array
     */
    function setOutdoorInterests($outdoorInterests)
    {
        $this->_outdoorInterests = $outdoorInterests;
    }

}