<?php
//Validation functions for dating site
//Ashton Knox, 2/2/2018, validation.php

require "validation.php";

$errors = array();

//validate profile
if (!validName($email))
{
    $errors['name'] = "Please enter a valid email" ;
}


if (!validName($state))
{
    $errors['name'] = "Please enter a valid state" ;
}


if (!validName($bio))
{
    $errors['name'] = "Please enter a valid bio" ;
}

$success = (sizeof($errors) == 0);
