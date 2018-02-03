<?php
//Validation functions for dating site
//Ashton Knox, 2/2/2018, validation.php

function validName($name)
{
    //name contains only alpha characters
    return ctype_alpha($name);
}

function validAge($age)
{
    //age is a number over 18
    return $age > 18 && ctype_digit($age);
}

function validPhone($phone)
{
    //phone is alphanumeric
    return ctype_alnum($phone);
}

function validOutdoor($outdoor, $outdoors)
{
    foreach ($outdoor as $interest)
    {
        if (!in_array($outdoors, $interest)) return false;
    }
}

function validIndoor($indoor, $indoors)
{
    return validOutdoor($indoor,$indoors);
}

/*
if (!validString($type))
{
    $errors['type'] = "Please enter a valid type.";
}
$success = (sizeof($errors) == 0);
*/