<?php
    session_start();
    // if user has previously logged in or not, if previous logged in - redirects to users page
    if(isset($_SESSION['userid'])){
        header("location: chat.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="navigation-bar">
                <div class="light-dark-toggle">
                    <label class="switch">
                        <input type="checkbox" id="light-dark-toggle" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="form-window">
                <h1>Login to account</h1>
                <div class="form-frame">
                    <section class="form login">
                        <form action="#" enctype="multipart/form-data">
                            <div class="error-txt"></div>
                            <div class="field input">
                                <label>Email address</label>
                                <input type="text" name="email" placeholder="Enter email" required>
                            </div>
                            <div class="field password input">
                                <label>Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter password" required autocomplete="off">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="field button">
                                <input type="submit" value="Start chatting!">
                            </div>
                        </form>
                    </section>
                    <div class="link">Don't have an account? <a href="index.php">Register now</a></A></div>
                </div>
            </div>
        </div>
    </div>
    <script src="./javascript/light-dark-mode.js"></script>
    <script src="javascript/password-show-hide.js"></script>
    <script type="module" src="javascript/login.js"></script>
</body>
</html>