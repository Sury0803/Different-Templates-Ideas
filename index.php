<?php
//This script will handle login
session_start();

//check is already logged in
if(isset($_SESSION['username'])){
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password ="";
$err = "";

//if request method is post

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password']))){
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
    if(empty($err)){
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username  = $username;
        //Try to execute this statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password))
                        {
                            //this means the password is correct, allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                        }
                        else{
                            echo '<script>alert("Incorrect password")</script>';
                        }
                    }
                }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
        <nav>
            <h3>SuRyAnSh</h3>
            <div class="nav-links">
                <ul>
                    <li><a href="features.php">FETAURES</a></li>
                    <li><a href="register.php">REGISTER</a></li>
                </ul>
            </div>
        </nav>
        <section class="rep-form">
            <div class="imgr">
                <img src="img\james-pond-1qkyck-UL3g-unsplash.jpg">
            </div>
            <div class="rcontent">
                <div class="formr">
                    <h2>Login</h2>
                    <form action="" method = "post">
                        <div class="inputr">
                            <span>Username</span>
                            <input type="text" name = "username" placeholder="Enter username" required>
                        </div>
                        <div class="inputr">
                            <span>Password</span>
                            <input type="password" name = "password" placeholder = "Enter password" required>
                        </div>
                        <div class="inputr">
                            <input type="submit" value="LOGIN">
                        </div>
                        <div class="inputr">
                            <p>Don't have an account? <a href=register.php >Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
</body>
</html>