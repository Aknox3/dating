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

    <title>Summary</title>
    <!--Author: Ashton Knox; Date: 2/2/2018; Dating Site summary; -->
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-light bg-light">
    <h3 class="navbar-brand mb-0 text-secondary">My Dating Website</h3>
</nav>
<div id="base" class="container">

    <div class="border">
        <form method="POST" action="#">
            <div>
                <div class="float-right border">
                    <img class="img-rounded" src="../images/male.png" alt="Silhouette">
                    <p>Bio: </p>
                </div>
            </div>

            <div class="border">
                <p>Name: {{ @fname }} {{ @lname }}</p>
            </div>

            <div class="border">
                <p>Gender: {{ @gender }}</p>
            </div>

            <div class="border">
                <p>Age: {{ @age }}</p>
            </div>

            <div class="border">
                <p>Phone: {{ @phone }}</p>
            </div>

            <div class="border">
                <p>Email: {{ @email }}</p>
            </div>

            <div class="border">
                <p>State: {{ @state }}</p>
            </div>

            <div class="border">
                <p>Seeking: {{ @seeking }}</p>
            </div>

            <div class="border">
                <p>interest: <repeat group="{{ @interests }}" value="{{ @interest }}">
                        <option value="{{ @interest }}">{{ @interest }}</option>

                    </repeat></p>
            </div>







        </form>

        <button type="button" class="btn btn-primary float-right" >Contact Me!></button>

    </div>
</div>
</body>
</html>