<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinionir</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <h1 class="pinionir">Pinionir</h1>
            <ul>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Profile</a></li>
                <li><a href='#'>Search</a></li>
                <li><a href='#'>Post</a></li>
                <li><a href='login.html'>Login</a></li>
                <li><a href='signup.html' >Sign Up</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>Pinionir</h1>
            <p>Share your ratings with your friends!</p>
            <div>
                <button id="loginButton" type="button">Login</button>
                <button id="signupButton" type="button">Sign Up</button>
            </div>
            <script>
                const loginButton = document.getElementById("loginButton");
            
                loginButton.addEventListener("click", function() {
                    window.location.href = "login.html";
                });

                const signupButton = document.getElementById("signupButton");
            
                signupButton.addEventListener("click", function() {
                    window.location.href = "signup.html";
                });
            </script>
        </div>
    </div>
</body>
</html>