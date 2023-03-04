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
    <title>Registration page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="navigation-bar">
                <div class="navigation">
                    <ul>
                        <li class="list" style="--clr:#ffa117;">
                            <a href="javascript:delay('users.php')">
                                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            </a>
                        </li>
                        <li class="list active" style="--clr:#0fc70f;">
                        <a href="javascript:delay('available_discussions.php')">
                                <span class="icon"><ion-icon name="chatbubble-ellipses-outline"></ion-icon></span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#2196f3;"> 
                        <a href="javascript:delay('settings.php?user_ID=<?php echo $row_data['unique_ID'] ?>')">
                                <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                            </a>
                        </li>
                        <li class="list" style="--clr:#b145e9;">
                            <a href="javascript:delay('php/logout.php?logout_ID=<?php echo $row_data['unique_ID'] ?>')" class="logout">
                                <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="light-dark-toggle">
                    <label class="switch">
                        <input type="checkbox" id="light-dark-toggle" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="conversation-window">
                <div class="conversation-list-frame">
                    
                </div>
                <div class="conversation-frame">

                </div>
            </div>
        </div>
    </div>
    <!-- JS for day/night mode -->
    <script src="./javascript/light-dark-mode.js"></script>
    <!-- JS for nav icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>