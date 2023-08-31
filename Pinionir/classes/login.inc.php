<?php

if(isset($_POST['sumbit']))
{

    //Grabbing data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // instantiate signupcontr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-cont.classes.php";
    $login = new LoginContr($uid, $pwd);

    //running error handlers and user signup
    $login->$loginUser();

    //going back to front page
    header("lcoation: ../index.php?error=none");
}