<?php
class PremiumMember extends Member
{
    private $_indoorInterests = array();
    private $_outdoorInterests = array();

    function getIndoorInterests()
    {
        return $this->_indoorInterests;
    }

    function setIndoorInterests($indoorInterests)
    {
        $this->_indoorInterests = $indoorInterests;
    }

    function getOutdoorInterests()
    {
        return $this->_outdoorInterests;
    }

    function setOutdoorInterests($outdoorInterests)
    {
        $this->_outdoorInterests = $outdoorInterests;
    }

}