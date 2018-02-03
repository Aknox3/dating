<?php
//Validation functions for dating site
//Ashton Knox, 2/2/2018, validation.php

require "validation.php";

$errors = array();

//validate personal info
if (!validName($fname))
{
    $errors['name'] = "Please enter a valid name" ;
}

if (!validName($lname))
{
    $errors['name'] = "Please enter a valid name" ;
}

if (!validAge($age))
{
    $errors['age'] = "Please enter a valid age" ;
}

if (!validPhone($phone))
{
    $errors['phone'] = "Please enter a valid phone number";
}

$success = (sizeof($errors) == 0);
