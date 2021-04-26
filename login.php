<?php
    require('connectdb.php');
    require('db.php');
    session_start();

    $username = "";
    $password = "";
    $mainpage = "signup.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
        }
        if(!isset($_SESSION['loggedbool'])) $_SESSION['loggedbool'] = "Login";
        if (!empty($_POST['login'])) {
           // echo "login not empty<br>";
            if(validate_login($username, $password) == 1){
                $_SESSION["user"]=$username;
                $_SESSION['loggedbool'] = "Account";
                header("Location:index.php");
            }   
            else{
                $err = "Your username or password does not match any accounts in our database.";
            }
        } 
        if(isset($_SESSION['user'])){
             echo "user is " . $_SESSION['user'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en" style='overflow:scroll;'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel='stylesheet' href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style='overflow:auto;'>
    <?php include "navbar.php"?>

    <main role='main' class='afterNav'>
        <div class="container-fluid" style='margin:auto;overflow:auto;'>
            <div class="container" style='text-align:center;'>
                <h2>Login</h2>
            </div>
            <div class="container">
            <form method="post">
                <div class ="form-group"> 
                    <!--- js autofocus on the username box so there are less clicks for the user-->
                    Username:<input type="text" name='username' id="username" class="form-control"  autofocus placeholder="Enter Your Username"/>
                </div>
                <div class ="form-group"> 
                    Password:<input type="password" name='password' id="password" class="form-control" placeholder="Enter Your Password"/>
                </div>
                
                <input id='sbtn' name="login" type="submit" value="Log in" class="btn btn-secondary" />
                <!-- sign up button, will link to a registration page in future implementation-->
                <input id='sbtn' style='width:80px;' name='signup' value="Sign Up" class="btn btn-secondary" onclick="myfunction()"/>
                <script>
                    function myfunction(){
                        location.href="signup.php";
                    }
                </script>
            </form>
            </div>
        </div>
    </main>
</body>
</html>