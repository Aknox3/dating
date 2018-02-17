<?php



    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require_once "vendor/autoload.php";
    session_start();

    $f3 = Base::instance();

    $f3->route('POST /', function($f3) {
        $template = new Template();
        echo $template->render('pages/home.html');
    });

    $f3->route('GET|POST /personal_info', function($f3) {

        if(isset($_POST['submit']))
        {
            if (isset($_POST['premium']))
            {
                $premium = true;
                $_SESSION['premium'] = true;
            }

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            include 'model/validPersonal.php';
            $f3->set('premium',$premium);
            $f3->set('fname',$fname);
            $f3->set('lname',$lname);
            $f3->set('age',$age);
            $f3->set('gender',$gender);
            $f3->set('phone',$phone);
            $f3->set('errors', $errors);
            $f3->set('success', $success);

            if($success)
            {
                if (isset($_POST['premium']))
                {
                    $member = new PremiumMember($fname, $lname, $age, $gender, $phone);
                    $_SESSION['member'] = $member;
                }
                else{
                    $member = new Member($fname, $lname, $age, $gender, $phone);
                }

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

            if($success)
            {
                $member = $_SESSION['member'];
                $member->setEmail($email);
                $member->setState($state);
                $member->setBio($bio);
                $member->setSeeking($seeking);
                $_SESSION['member'] = $member;

                if ($_SESSION['premium'] == true) {
                    $f3->reroute("/interests");
                }
                else{
                    $f3->reroute("/profile_summary");
                }
            }
        }
        $template = new Template();
        echo $template->render('pages/profile.php');
    });

    $f3->route('GET|POST /interests', function($f3) {
        if (isset($_POST['submit'])) {
            $f3->reroute("/profile_summary");
            $outdoorInterests = array($_POST['outdoorInterests[]']);
            $indoorInterests = array($_POST['IndoorInterests[]']);

            include 'model/validInterests.php';

            if ($success) {
                $member = $_SESSION['member'];
                $member->setIndoorInterests($indoorInterests);
                $member->setOutdoorInterests($outdoorInterests);
                $f3->reroute("/profile_summary");
            }
        }
        $template = new Template();
        echo $template->render('pages/interests.php');
    });

    $f3->route('GET|POST /profile_summary', function($f3) {
        $member = $_SESSION['member'];
        $f3->set('fname',$member->getFname());
        $f3->set('lname', $member->getlname());
        $f3->set('age', $member->getAge());
        $f3->set('gender', $member->getGender());
        $f3->set('phone',$member->getPhone());
        $f3->set('email', $member->getEmail());
        $f3->set('state', $member->getState());
        $f3->set('bio', $member->getBio());
        $f3->set('seeking', $member->getSeeking());
        if ($_SESSION['premium'] == true) {
            $interests = $member->getOutdoorInterests . $member->getIndoorInterests;
        $f3->set('interests ', $interests);
            }

        $template = new Template();
        echo $template->render('pages/summary.php');
    });

    $f3->run();
?>
