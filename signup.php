<?php
    require('connectdb.php');
    require('db.php');
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $username = $_POST['username'];
        $pwd = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $cid = $_POST['computingID'];
        $major = $_POST['major'];

        if($pwd != ""){
            $uppercase = preg_match('@[A-Z]@', $pwd);
            $lowercase = preg_match('@[a-z]@', $pwd);
            $number    = preg_match('@[0-9]@', $pwd);
            if(!preg_match('/[A-Z]/', $pwd)){
                $code = 1;
                $err = "Password should include at least one upper case letter.";
            }
            elseif(!preg_match('/[a-z]/', $pwd)){
                $code = 2;
                $err = "Password should include at least one lower case letter.";
            }
            elseif(!preg_match('/\d/', $pwd)){
                $code = 3;
                $err = "Password should include one number.";
            }
            elseif(strlen($pwd)<8) $err = "Password must be at least 8 characters long.";
        }
        else $err = "You need to enter a password.";

        $hash = htmlspecialchars($pwd); 
        $hash = crypt($hash, "web4640");

        if(isset($_POST['submit'])){
            if(!isset($err)){
                addAccount($username, $hash);
                addAccountInfo($username, $email, $fname, $lname, $cid, $major);
                header("Location: login.php");
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
    <title>Create an Account</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <main class='afterNav' role='main'>
    <div class='container' style='margin:auto;'>
        <div class='column'id='form'>
            <h2 style='text-align:center;'>Create Your Account!</h2>
            <form method="post" onsubmit="return validateSignUp()">
                <div class="form-row">
                    <div class="col">
                        Username:<input type="text" name="username" id="username" class="form-control"  autofocus placeholder="Enter Your Username"/>
                    </div>
                    <div class="col">
                        Password:<input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        First Name: <input type="text" name="fname" id="fname" class='form-control' placeholder="Enter Your First Name">
                    </div>
                    <div class="col">
                        Last Name: <input type="text" name="lname" id="lname" class='form-control' placeholder="Enter Your Last Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        Email: <input type="email" name="email" id="email" class='form-control' placeholder="Enter Your Email">
                    </div>
                    <div class="col">
                        Computing ID: <input type="text" name='computingID' id="computingID" class='form-control' placeholder="Enter your Computing ID">
                    </div>
                    <div class="col">
                        Major: <input type="text" name='major' id='major' class='form-control' placeholder="Enter your Major">
                    </div>
                </div>
                <input name="submit" type="submit" value="Sign Up" class="btn btn-secondary" style='margin-top:1vh;'/>
            </form>
        </div>
    </div> 
    <?php if(isset($err)){echo "<script>alert('$err')</script>";$err = null; unset($err);}?>
    </main>

    <script> 
        function validateSignUp() {
            var u = document.getElementById("username").value;
            var p = document.getElementById("password").value;
            var f = document.getElementById("fname").value;
            var l = document.getElementById("lname").value;
            var e = document.getElementById("email").value;
            var c = document.getElementById("computingID").value;
            var m = document.getElementById('major').value;

            if(u == "" || p == "" || f == "" || l == "" || e == "" || c == "" || m == "") //if the length of the username is less than or equal to 0 then there is no username entered 
            {
                alert ("Please fill the missing field(s)."); //display alert message that username/password must be entered
                return false;
            }
        }
        
    </script>
</body>
</html>