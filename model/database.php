<?php
/*
CREATE TABLE IF NOT EXISTS `members` (
`member_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`fname` varchar(30) NOT NULL,
`lname` varchar(30) NOT NULL,
`age` int(3) NOT NULL,
`gender` varchar(30) NOT NULL,
`phone` varchar(30) NOT NULL,
`email` varchar(30) NOT NULL,
`state` varchar(30) NOT NULL,
`seeking` varchar(30) NOT NULL,
`bio` varchar(300) NOT NULL,
`premium` TINYINT(1) DEFAULT 0,
`image` varchar(30) DEFAULT NULL,
`interests` varchar(300) DEFAULT NULL)
*/

function connect()
{
    require_once '/home/aknoxgre/config.php';
    try {
        //Instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME,
            DB_PASSWORD );
        //echo "Connected to database!!!";
        return $dbh;
    }
    catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }
}

function getMembers()
{
    global $dbh;

    //1. Define the query
    $sql = "SELECT * FROM members ORDER BY lname";

    //2. Prepare the statement
    $statement = $dbh->prepare($sql);

    //3. Bind parameters

    //4. Execute the query
    $statement->execute();

    //5. Get the results
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    //print_r($result);
    return $result;
}

function insertMember($fname, $lname, $age, $gender, $email, $state, $seeking, $bio, $premium, $image, $interests)
{
    global $dbh;

    //1. Define the query
    $sql = "INSERT INTO members VALUES (:fname, :lname, :age, :gender, :phone, :email, :state, :seeking, :bio, :premium, :image, :interests)";

    //2. Prepare the statement
    $statement = $dbh->prepare($sql);

    //3. Bind parameters
    $statement->bindParam(':fname', $fname, PDO::PARAM_STR);
    $statement->bindParam(':lname', $lname, PDO::PARAM_STR);
    $statement->bindParam(':age', $age, PDO::PARAM_STR);
    $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
    $statement->bindParam(':phone', $phone, PDO::PARAM_STR);
    $statement->bindParam(':email', $email, PDO::PARAM_STR);
    $statement->bindParam(':state', $state, PDO::PARAM_STR);
    $statement->bindParam(':seeking', $seeking, PDO::PARAM_STR);
    $statement->bindParam(':bio', $bio, PDO::PARAM_STR);
    $statement->bindParam(':premium', $premium, PDO::PARAM_STR);
    $statement->bindParam(':image', $image, PDO::PARAM_STR);
    $statement->bindParam(':interests', $interests, PDO::PARAM_STR);
    //4. Execute the query
    $result = $statement->execute();

    //5. Return the result
    return $result;
}

function getMember($fname, $lname)
{
    global $dbh;
    $sql = ("SELECT * FROM members WHERE fname = :fname AND lname = :lname");
    $statement = $dbh->prepare($sql);

    //5. Get the results
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $first = $result['first'];
    $member = new Member($result['fname'],$result['lname'],$result['age'],$result['gender'],$result['phone']);
    //print_r($result);
    $member->setSeeking($result['seeking']);
    $member->setState($result['state']);
    $member->setBio($result['bio']);
    $member->setInterests($result['interests']);
    $member->setImage($result['image']);
    $member->setPremium($result['premium']);
    return $member;
}
