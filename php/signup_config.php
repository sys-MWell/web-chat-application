<?php
    session_start();
    include_once "configuration.php";
    // Retrieve data from signup form
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $repassword = mysqli_real_escape_string($conn, $_POST['repassword']);


    // check if class details are empty or not
    if(!empty($fname) && !empty($lname) && !empty($dob) && !empty($email) && !empty($password) && !empty($repassword)){
        // check requirements
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // if email is valid
            // check if email already associated with an account
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){ // if email exists
                echo "$email - Email already associated with an account";
            }
            else
            {
              // check if profile img uploaded
              if (isset($_FILES['image'])){
                $img_name = $_FILES['image']['name']; // get uploaded image name
                //$img_type = $_FILES['image']['type']; // get uploaded image type
                $tmp_name = $_FILES['image']['tmp_name']; // temp name for saving purposes
                // explode image, get file extension
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode); // get file extension

                $extensions_list = ['png', 'jpeg', 'jpg']; // img extensions
                if(in_array($img_ext, $extensions_list) === true){ // if extension accepted
                    $current_time = time(); // return current time, will be used to name image file
                    $new_img_name = $current_time.$img_name;

                    if(move_uploaded_file($tmp_name, "./users/profile_images/".$new_img_name)){ // if successful upload, move file to new folder
                        $status = "Online"; // when user signup they are active)
                        $random_id = rand(time(), 10000000); // create random ID
                        
                        // Hash password
                        $hash = md5($password);

                        $sql_user = mysqli_query($conn, "INSERT INTO users (userid, firstname, lastname, dob, email, userpassword)
                                                        VALUES ({$random_id}, '{$fname}', '{$lname}', '{$dob}', '{$email}', '{$hash}')");
                        
                        $sql_user_profileimg = mysqli_query($conn, "INSERT INTO userprofileimg (userid, img)
                                                            VALUES ({$random_id}, '{$new_img_name}')");

                        $sql_user_status = mysqli_query($conn, "INSERT INTO userprofilestatus (userid, userstatus)
                                                        VALUES ({$random_id}, '{$status}')");
                        
                        if ($sql_user && $sql_user_profileimg && $sql_user_status) // if data successfully inserted
                        {
                            $sql_select_existing_email = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql_select_existing_email) > 0){
                                $row = mysqli_fetch_assoc($sql_select_existing_email);
                                $_SESSION['UserId'] = $row['userid']; // unique_id is users session
                                echo "success";
                            };
                        }
                        else
                        {
                            echo "Something went wrong!";
                        }
                    }
                }
                else
                {
                    echo "Please enter a valid file extension - png, jpeg, jpg";
                }
            } 
              else
              {
                echo "Image file not uploaded";
              }
            }
        }
        else
        {
            echo "$email - Not valid email";
        }
    }
    else
    {
        echo "All input fields are required";
    }
?>
