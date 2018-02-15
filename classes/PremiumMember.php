<?php
class PremiumMember extends Member
{
    private $_indoorInterests = array();
    private $_outdoorInterests = array();

    /*
     * Returns indoorInterests as an array
     */
    function getIndoorInterests()
    {
        return $this->_indoorInterests;
    }

    /*
     * sets indoor interests to the given array
     */
    function setIndoorInterests($indoorInterests)
    {
        $this->_indoorInterests = $indoorInterests;
    }
    /*
     * returns outdoorInterests as an array
     */
    function getOutdoorInterests()
    {
        return $this->_outdoorInterests;
    }

    /*
     * sets outdoor interests to the given array
     */
    function setOutdoorInterests($outdoorInterests)
    {
        $this->_outdoorInterests = $outdoorInterests;
    }

}