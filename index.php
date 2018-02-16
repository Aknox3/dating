<?php

    session_start();

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require_once "vendor/autoload.php";

    $f3 = Base::instance();

    $f3->route('POST /', function($f3) {
        $template = new Template();
        echo $template->render('pages/home.html');
    });

    $f3->route('GET|POST /personal_info', function($f3) {

        if(isset($_POST['submit']))
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            include 'model/validPersonal.php';
            $f3->set('fname',$fname);
            $f3->set('lname',$lname);
            $f3->set('age',$age);
            $f3->set('gender',$gender);
            $f3->set('phone',$phone);
            $f3->set('errors', $errors);
            $f3->set('success', $success);

            if($success)
            {
                $f3->reroute("/profile");
            }
        }
        $template = new Template();
        echo $template->render('pages/info.php');
    });

    $f3->route('POST|GET /profile', function($f3) {

        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $state = $_POST['state'];
            $bio = $_POST['bio'];
            $seeking = $_POST['seeking'];
            include 'model/validProfile.php';
            $f3->set('email',$email);
            $f3->set('state',$state);
            $f3->set('bio',$bio);
            $f3->set('seeking',$seeking);
            $f3->set('errors', $errors);
            $f3->set('success', $success);

        }
        $template = new Template();
        echo $template->render('pages/profile.php');
    });

    $f3->route('GET|POST /interests', function() {
        $outdoorInterests = $_POST['outdoorInterests'];
        $indoorInterests = $_POST['IndoorInterests'];
        $interests = $_POST['outdoorInterests'] . $_POST['IndoorInterests'];
        include 'model/validInterests.php';
        $template = new Template();
        echo $template->render('pages/interests.php');
    });

    $f3->route('GET|POST /profile_summary', function() {
        $template = new Template();
        echo $template->render('pages/summary.php');
    });

    $f3->run();
?>
