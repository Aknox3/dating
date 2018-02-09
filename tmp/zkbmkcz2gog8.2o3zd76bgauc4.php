

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Personal Info</title>
    <!--Author: Ashton Knox; Date: 2/2/2018; Dating Site personal info; -->
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-light bg-light">
    <h3 class="navbar-brand mb-0 text-secondary">My Dating Website</h3>
</nav>
<div id="base" class="container">

    <div class="border">
        <h1 class="font-weight-bold border-bottom">Personal Information</h1>
        <form method="POST" action="profile">
            <div>
                <?php if (isset($errors['fname'])): ?>
                    <p><?= ($errors['fname']) ?> </p>
                <?php endif; ?>
                <label><h6>First Name</h6>
                    <input type="text" name="fname" value=" <?= ($fname) ?>"></label>
                <div class="float-right border">
                <pre class="bg-light"><b>Note</b>: All information entered is protected
by our <span class="text-primary">privacy policy</span>. Profile Information
can only be viewed by others with your
permission</pre></div>
            </div>

            <div>
                <?php if (isset($errors['lname'])): ?>
                    <p><?= ($errors['lname']) ?> </p>
                <?php endif; ?>
                <label><h6>Last Name</h6>
                    <input type="text" name="lname" value="<?= ($lname) ?>"></label>
            </div>

            <div>
                <?php if (isset($errors['age'])): ?>
                    <p><?= ($errors['age']) ?> </p>
                <?php endif; ?>
                <label><h6>Age</h6>
                    <input type="text" name="age" value="<?= ($age) ?>"></label>
            </div>

            <div>
                <?php if (isset($errors['phone'])): ?>
                    <p><?= ($errors['phone']) ?> </p>
                <?php endif; ?>
                <h6>Gender</h6>
                <label>Male
                    <input type="checkbox" name="gender" value="male"></label>

                <label>female
                    <input type="checkbox" name="gender" value="female"></label>
            </div>

            <div>
                <?php if (isset($errors['phone])): ?>
                    <p><?= ($errors['phone']) ?> </p>
                <?php endif; ?>
                <label><h6>Phone Number</h6>
                    <input type="text" name="phone" value="<?= ($phone) ?>"></label>
            </div>
            <input type="submit" class="btn btn-primary float-right" >Next>
        </form>




    </div>
</div>
</body>
</html>