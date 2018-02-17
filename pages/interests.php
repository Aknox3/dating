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

    <title>Interests</title>
    <!--Author: Ashton Knox; Date: 2/2/2018; Dating Site interests; -->
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-light bg-light">
    <h3 class="navbar-brand mb-0 text-secondary">My Dating Website</h3>
</nav>
    <div id="base" class="container">
        <div class="border">
            <h1 class="font-weight-bold border-bottom">Interests</h1>
            <form method="POST" action="#">

                <check if="{{ isset(@errors['indoor']) }}">
                    <p>{{ @errors['indoor'] }} </p>

                <h6 class="text-center">In-door interests</h6>
                <div class="text-center">
                    <label>tv
                        <input type="checkbox" name="IndoorInterests[]" value="tv"/></label>
                    <label>movies
                        <input type="checkbox" name="IndoorInterests[]" value="movies"/></label>
                    <label>cooking
                        <input type="checkbox" name="IndoorInterests[]" value="cooking"/></label>
                    <label>board games
                        <input type="checkbox" name="IndoorInterests[]" value="bgames"/></label>
                </div>

                <div class="text-center">
                    <label>puzzles
                        <input type="checkbox" name="IndoorInterests[]" value="puzzles"/></label>
                    <label>reading
                        <input type="checkbox" name="IndoorInterests[]" value="reading"/></label>
                    <label>cards
                        <input type="checkbox" name="IndoorInterests[]" value="cards"/></label>
                    <label>video games
                        <input type="checkbox" name="IndoorInterests[]" value="vgames"/></label>
                </div>

                <check if="{{ isset(@errors['outdoor']) }}">
                    <p>{{ @errors['outdoor'] }} </p>

                <h6 class="text-center">Out-door interests</h6>
                <div class="text-center">
                    <label>hiking
                        <input type="checkbox" name="outdoorInterests[]" value="hiking"/></label>
                    <label>biking
                        <input type="checkbox" name="outdoorInterests[]" value="biking"/></label>
                    <label>swimming
                        <input type="checkbox" name="outdoorInterests[]" value="swimming"/></label>
                    <label>collecting
                        <input type="checkbox" name="outdoorInterests[]" value="collecting"/></label>
                </div>

                <div class="text-center">
                <label>walking
                    <input type="checkbox" name="outdoorInterests[]" value="walking"/></label>
                <label>climbing
                    <input type="checkbox" name="outdoorInterests[]" value="climbing"/></label>
                </div>
                <input type="submit" name="submit" class="btn btn-primary float-right" >
            </form>



        </div>
    </div>
</body>
</html>