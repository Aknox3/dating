<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Profile</title>
    <!--Author: Ashton Knox; Date: 2/2/2018; Dating Site profile; -->
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-light bg-light">
    <h3 class="navbar-brand mb-0 text-secondary">My Dating Website</h3>
    <a href="admin">Admin panel</a>
</nav>
<div id="base" class="container">

    <div class="border">
        <h1 class="font-weight-bold border-bottom">Profile</h1>
        <form method="POST" action="#">
            <div>

                <check if="{{ isset(@errors['email']) }}">
                    <p>{{ @errors['email'] }} </p>
                </check>
                <label><h6>Email!</h6>
                    <input type="text" name="email" value="{{ @email }}"></label>
                <div class="float-right border">
                <label> Bio
                    <input type="text" name="bio" value="{{ @bio }}">
                </label>
                </div>
            </div>

            <div>
                <check if="{{ isset(@errors['state']) }}">
                    <p>{{ @errors['state'] }} </p>
                </check>
                <label><h6>State</h6>
                    <input type="text" name="state" value="{{ @state }}"></label>
            </div>

            <div>
                <check if="{{ isset(@errors['seeking']) }}">
                    <p>{{ @errors['seeking'] }} </p>
                </check>
                <h6>Seeking</h6>
                <label>Male
                    <input type="checkbox" name="seeking" value="male"></label>

                <label>female
                    <input type="checkbox" name="seeking" value="female"></label>
            </div>
            <repeat group="{{ @errors }}" value="{{ @interest }}">
                <option value="{{ @interest }}">{{ @interest }}</option>

            </repeat></p>

            <input type="submit"name="submit" class="btn btn-primary float-right">
        </form>



    </div>
</div>
</body>
</html>