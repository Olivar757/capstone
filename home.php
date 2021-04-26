<?php
    require('connectdb.php');
    require('db.php');
    session_start();
    if(!isset($_SESSION['loggedbool'])) $_SESSION['loggedbool'] = 'Login';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <main role='main' class='afterNav' style='margin-top:3.5rem;'>
    <div class="container-fluid px-0" style='text-align:center;margin-right:0;margin-left:0;width:100%;'>
        <div class="jumbotron" style='height:25rem;'>
            <div class="welcome-msg">
                <h1 class="display-3">Welcome, Wahoos!</h1>
                <h5>This is a tool to be used in conjunction with UVA's Academic Requirements Report, <br>which is generated per the unique needs of each student.</h5>
            </div>
        </div>
    </div>
    <div class="container">        <!-- Example row of columns -->
        <div class="row">
            <?php if($_SESSION['loggedbool'] == 'Login'):?>
                <div class="col">
                    <h2>Get Logged In</h2>
                    <p>To get started, click below to log in!</p>
                    <p><a href="login.php" class="btn btn-secondary">Login</a></p>
                </div>
            <?php elseif($_SESSION['loggedbool']=="Account"):?>
                <div class="col">
                    <h2>Get Started</h2>
                    <p>To get started, click below to begin the process of calculating the rest of your requirements!</p>
                    <p><a href="upload.php" class="btn btn-secondary">Start here</a></p>
                </div>
            <?php endif;?>
        </div>
        <hr>
    </div>
    </main>

    <footer class="container">
      <p>&copy; Noah Dela Rosa, UVA BSCS Undergrad, Class of 2021</p>
    </footer>
</body>
</html>