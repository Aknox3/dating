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

    function __construct($fname, $lname,$age,$gender,$phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }

    function getfName()
    {
        return $this->fname;
    }

    function setfName($fname)
    {
        return $this->fname = $fname;
    }

    function getlName()
    {
        return $this->lname;
    }

    function setlName($lname)
    {
        return $this->lname = $lname;
    }

    function getAge()
    {
        return $this->age;
    }

    function setAge($age)
    {
        return $this->age = $age;
    }

    function getGender()
    {
        return $this->gender;
    }

    function setGender($gender)
    {
        return $this->gender = $gender;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function setPhone($phone)
    {
        return $this->phone = $phone;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        return $this->email = $email;
    }

    function getState()
    {
        return $this->state;
    }

    function setState($state)
    {
        return $this->state = $state;
    }

    function getSeeking()
    {
        return $this->seeking;
    }

    function setSeeking($seeking)
    {
        return $this->seeking = $seeking;
    }

    function getBio()
    {
        return $this->bio;
    }

    function setBio($bio)
    {
        return $this->bio = $bio;
    }
}