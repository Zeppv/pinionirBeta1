<?php

if(isset($_POST['submit']))
{
    // Grabbing data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

    // instantiate signupcontr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-cont.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    // running error handlers and user signup
    $signup->signupUser();

    // going back to the front page
    header("Location: ../index.php?error=none");
}

?>
