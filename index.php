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
                <div class="light-dark-toggle">
                    <label class="switch">
                        <input type="checkbox" id="light-dark-toggle" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="register-window">
                <h1>Register account</h1>
                <div class="register-frame">
                    <section class="form signup">
                        <form action="#" enctype="multipart/form-data">
                            <div class="error-txt"></div>
                            <div class="name-details">
                                <div class="field input">
                                    <label>First name</label>
                                    <input type="text" name="fname" placeholder="Enter first name" required autocomplete="off">
                                </div>
                                <div class="field input">
                                    <label>Last name</label>
                                    <input type="text" name="lname" placeholder="Enter last name" required autocomplete="off">
                                </div>
                            </div>
                            <div class="field input">
                                <label>Email address</label>
                                <input type="text" name="email" placeholder="Enter email" required>
                            </div>
                            <div class="field input">
                                <label>Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter password" required autocomplete="off">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="field input">
                                <label>Re-enter password</label>
                                <input type="password" name="repassword" id="repassword" placeholder="Re-enter password" required autocomplete="off">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="field image">
                                <label>Profile image</label>
                                <input type="file" name="image" required>
                            </div>
                            <div class="field button">
                                <input type="submit" value="Start chatting!">
                            </div>
                        </form>
                    </section>
                    <div class="link">Have an account? <a href="login.php">Login now</a></A></div>
                </div>
            </div>
        </div>
    </div>
    <script src="./javascript/light-dark-mode.js"></script>
    <script src="javascript/password-show-hide.js"></script>
    <script type="module" src="javascript/signup.js"></script>
</body>
</html>