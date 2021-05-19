<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            //Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken";
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);


//Check for password

if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password']))<5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);

}

// Check for confirm password field

if(trim($_POST['password']) != trim($_POST['confirm_password'])){
    $password_err = "Password should match";
    echo '<script>alert("Password mismatch")</script>';
}

//If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        //Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        //Try to exeute the query
        if(mysqli_stmt_execute($stmt)){
            header("location: index.php");
        }
        else{
            echo "Something went wrong";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
        <nav>
            <h3>SuRyAnSh</h3>
            <div class="nav-links">
                <ul>
                    <li><a href="features.php">FETAURES</a></li>
                    <li><a href="index.php">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h2>Please Register Here</h2>
            <form action="" method = "post">
                <p>Username: *<input type="text" name = "username" placeholder="example@gmail.com" required></p>
                <p>Password: *<input type="password" name = "password" placeholder = "Enter password" required></p>
                <p>Confirm password: *<input type="password" name = "confirm_password" placeholder = "Enter confirm password" required></p>
                <input type="submit" value="Register Now">
            </form>
        </div>
</body>
</html>