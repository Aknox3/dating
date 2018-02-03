<?php

    session_start();

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require_once "vendor/autoload.php";

    $f3 = Base::instance();

    $f3->route('GET /', function($f3) {
        $template = new Template();
        echo $template->render('pages/home.html');
    });

    $f3->route('GET /personal_info', function($f3) {

        if(isset($_POST['submit']))
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            include 'model/validPersonal.php';
            $f3->set('fname',$fname);
            $f3->set('fname',$lname);
            $f3->set('fname',$age);
            $f3->set('fname',$gender);
            $f3->set('errors', $errors);
            $f3->set('success', $success);
        }
        $template = new Template();
        echo $template->render('pages/info.html');
    });

    $f3->route('GET /profile', function($f3) {

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
        echo $template->render('pages/profile.html');
    });

    $f3->route('GET /interests', function() {
        $outdoorInterests = $_POST['outdoorInterests'];
        $indoorInterests = $_POST['outdoorInterests'];
        include 'model/validInterests.php';
        $template = new Template();
        echo $template->render('pages/interests.html');
    });

    $f3->route('GET /profile_summary', function() {
        $template = new Template();
        echo $template->render('pages/summary.html');
    });

    $f3->run();
?>
