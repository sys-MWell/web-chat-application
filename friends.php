<!-- PHP to check session status, if invalid user redirected -->
<?php
    // session_start();
    // if (!isset($_SESSION['unique_ID'])){
    // header("location: login.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <title>Friends page</title>
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
        </div>
    </div>
    <script src="./javascript/light-dark-mode.js"></script>
</body>
</html>