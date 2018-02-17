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
                if ($premium)
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

                if ($f3->get('premium') == true) {
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
        $outdoorInterests = $_POST['outdoorInterests'];
        $indoorInterests = $_POST['IndoorInterests'];
        $interests = $_POST['outdoorInterests'] . $_POST['IndoorInterests'];
        include 'model/validInterests.php';
        $template = new Template();
        echo $template->render('pages/interests.php');
    });

    $f3->route('GET|POST /profile_summary', function($f3) {
        $member = $_SESSION['member'];
        $fname = $member->getFname();
        $lname = $member->getlname();
        $age = $member->getAge();
        $gender = $member->getGender();
        $phone = $member->getPhone();
        $email = $member->getEmail();
        $state = $member->getState();
        $bio = $member->getBio();
        $seeking = $member->getSeeking();
        if ($f3->get('premium')) {
            $interests = $f3->get('interests');
        }
        $template = new Template();
        echo $template->render('pages/summary.php');
    });

    $f3->run();
?>
