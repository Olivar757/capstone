<?php
    require('connectdb.php');
    require('db.php');
    session_start();
    $info = getMyInfo($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Summary</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <main class='afterNav' role='main'>
        <div name='body'>
            <div>
                <h1 style='text-align:center;'>Class Summary</h1>
            </div> <!-- End of header -->
            <div class="container" id='needed'>
                <h3>Classes You Need</h3>
                <div>
                    <ul class="list-group mb-3">
                        <li class="list-group-item">One CS Elective</li>
                        <li class="list-group-item">One HSS Elective</li>
                        <li class="list-group-item">CS 3102: Theory of Computation</li>
                        <li class="list-group-item">CS 3240: Advanced Software Development Methods</li>
                        <li class="list-group-item">CS 4620: Compilers</li>
                        <li class="list-group-item">CS 4414: Operating Systems</li>
                        <li class="list-group-item">&vellip;</li>
                    </ul>
                </div>
            </div>
            <div class="container" id='taken'>
                <h3>Classes You've Taken</h3>
                <div>
                    <ul class="list-group">
                        <li class="list-group-item">ENGR 1620: Introduction to Engineering</li>
                        <li class="list-group-item">ENGR 1621: Intro to Engineering Lab</li>
                        <li class="list-group-item">CS 1110: Introduction to Programming</li>
                        <li class="list-group-item">CS 2102: Discrete Mathematics</li>
                        <li class="list-group-item">CS 2110: Software Development Methods</li>
                        <li class="list-group-item">CS 2150: Program & Data Representation</li>
                        <li class="list-group-item">&vellip;</li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>    
    </main>

    <footer class="container">
      <p>&copy; Noah Dela Rosa, UVA BSCS Undergrad, Class of 2021</p>
    </footer>
</body>
</html>