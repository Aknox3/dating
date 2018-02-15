<?php
class Member
{
    protected $fname;
    protected $lname;
    protected $age;
    protected $gender;
    protected $phone;
    protected $email;
    protected $state;
    protected $seeking;
    protected $bio;

    /*
     * Constructor for a member object
     */
    function __construct($fname, $lname,$age,$gender,$phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }

    /*
     * Returns the first name of this member
     */
    function getfName()
    {
        return $this->fname;
    }

    /*
     * sets the first name of this member to the given string
     */
    function setfName($fname)
    {
        $this->fname = $fname;
    }

    /*
     * returns the last name of this member
     */
    function getlName()
    {
        return $this->lname;
    }

    /*
     * sets the last name of this member to the given string
     */
    function setlName($lname)
    {
        $this->lname = $lname;
    }

    /*
     * returns the age of this member
     */
    function getAge()
    {
        return $this->age;
    }

    /*
     * Sets the age of this member to the given int
     */
    function setAge($age)
    {
        return $this->age = $age;
    }

    /*
     * returns the gender of this member object
     */
    function getGender()
    {
        return $this->gender;
    }

    /*
     * sets the gender of the member object to the given string
     */
    function setGender($gender)
    {
        return $this->gender = $gender;
    }

    /*
     * returns the phone number of the given member
     */
    function getPhone()
    {
        return $this->phone;
    }

    /*
     * sets the phone number of the member to the given string
     */
    function setPhone($phone)
    {
        return $this->phone = $phone;
    }

    /*
     * returns the email of the member
     */
    function getEmail()
    {
        return $this->email;
    }

    /*
     * sets the email of the member to the given string
     */
    function setEmail($email)
    {
        return $this->email = $email;
    }

    /*
     * returns the State of the member
     */
    function getState()
    {
        return $this->state;
    }

    /*
     * sets the state of the member to the given string
     */
    function setState($state)
    {
        return $this->state = $state;
    }

    /*
     * returns the seeking of this member object
     */
    function getSeeking()
    {
        return $this->seeking;
    }

    /*
     * sets the seeking of this member to the given array
     */
    function setSeeking($seeking)
    {
        return $this->seeking = $seeking;
    }

    /*
     * returns the bio of the memmber
     */
    function getBio()
    {
        return $this->bio;
    }

    /*
     * Sets the bio of the member to the given string
     */
    function setBio($bio)
    {
        return $this->bio = $bio;
    }
}