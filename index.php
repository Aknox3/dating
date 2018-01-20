<?php

    session_start();

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require_once "vendor/autoload.php";

    $f3 = Base::instance();

    $f3->route('GET /', function() {
       ;
    });

    $f3->route('GET /', function() {
    $template = new Template();
    echo $template->render('pages/home.html');
});

    $f3->run();
?>
