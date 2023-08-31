<?php

session_start();
session_unset();
session_destroy();

//going back to front page
header("lcoation: ../index.php?error=none")
