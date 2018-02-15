<?php

/**
 * Class Member
 * A member class which contains info about a member
 * @author Ashton Knox
 * @version 1.1
 */
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

    /**
     * Member constructor.
     * @param $fname
     * @param $lname
     * @param $age
     * @param $gender
     * @param $phone
     */
    function __construct($fname, $lname,$age,$gender,$phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }

    /**
     * @return String name
     * Returns the first name of this member
     */
    function getfName()
    {
        return $this->fname;
    }

    /**
     * @param $fname
     * sets the first name of this member to the given string
     */
    function setfName($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return String lname
     * returns the last name of this member
     */
    function getlName()
    {
        return $this->lname;
    }

    /**
     * @param $lname
     * sets the last name of this member to the given string
     */
    function setlName($lname)
    {
        $this->lname = $lname;
    }

    /**
     * @return String
     * returns the age of this member
     */
    function getAge()
    {
        return $this->age;
    }

    /**
     * @param $age
     * Sets the age of this member to the given int
     */
    function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return String
     * returns the gender of this member object
     */
    function getGender()
    {
        return $this->gender;
    }

    /**
     * @param $gender
     * sets the gender of the member object to the given string
     */
    function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return String
     * returns the phone number of the given member
     */
    function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param $phone
     * sets the phone number of the member to the given string
     */
    function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return String
     * returns the email of the member
     */
    function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     * sets the email of the member to the given string
     */
    function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return String
     * returns the State of the member
     */
    function getState()
    {
        return $this->state;
    }

    /**
     * @param $state
     * sets the state of the member to the given string
     */
    function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return String
     * returns the seeking of this member object
     */
    function getSeeking()
    {
        return $this->seeking;
    }

    /**
     * @param $seeking
     * sets the seeking of this member to the given array
     */
    function setSeeking($seeking)
    {
        $this->seeking = $seeking;
    }

    /**
     * @return String
     * returns the bio of the memmber
     */
    function getBio()
    {
        return $this->bio;
    }

    /**
     * @param $bio
     * Sets the bio of the member to the given string
     */
    function setBio($bio)
    {
        $this->bio = $bio;
    }
}