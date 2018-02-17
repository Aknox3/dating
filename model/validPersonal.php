<?php
//Validation functions for dating site
//Ashton Knox, 2/2/2018, validation.php

require "validation.php";

$errors = array();

//validate personal info
if (!validName($fname))
{
    $errors['fname'] = "Please enter a valid  first name" ;
}

if (!validName($lname))
{
    $errors['lname'] = "Please enter a valid last name" ;
}

if (!validAge($age))
{
    $errors['age'] = "Please enter a valid age" ;
}

if (!validPhone($phone))
{
    $errors['phone'] = "Please enter a valid phone number";
}

if (!validGender($gender))
{
    $errors['gender'] = "Please select a gender";
}
$success = (sizeof($errors) == 0);
