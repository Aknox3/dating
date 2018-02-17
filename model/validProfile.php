<?php
//Validation functions for dating site
//Ashton Knox, 2/2/2018, validation.php

require "validation.php";

$errors = array();

//validate profile
if (empty($email))
{
    $errors['email'] = "Please enter a valid email";
}


if (empty($state))
{
    $errors['state'] = "Please enter a valid state";
}


if (empty($bio))
{
    $errors['bio'] = "Please enter a valid bio";
}

if ($seeking != 'male' && $seeking != 'female')
{
    $errors['seeking'] = "please select a seeking";
}
$success = (sizeof($errors) == 0);
