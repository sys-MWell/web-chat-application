<?php
    session_start();
    include_once "config.php";
    // retrieve data from
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $status = "Online";
    
    // checks if user has entered email and password
    if(!empty($email) && !empty($password))
    {
        // Unhash password
        //$hash = md5($password);
        $hash = $password;
        
        // Check username and password in the database
        // Possibly add seperate check for both email and password, can then say is email is not found or password is incorrect etc
        $sql_check = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND userpassword = '{$hash}'");
        if (mysqli_num_rows($sql_check) > 0){ // if user credentials match
            $row_data = mysqli_fetch_assoc($sql_check);

            // update user status
            $sql_update_status = mysqli_query($conn, "UPDATE userprofilestatus SET userstatus = '{$status}' WHERE userid = {$row_data['UserId']}");
            if ($sql_update_status)
            {
                $_SESSION['userid'] = $row_data['UserId']; // unique_id is session
                echo "success";
            }
        }
        else
        {
            echo "Incorrect credentials";   
        }
    }
    else
    {
        echo "All inputs are required!";
    }
?>