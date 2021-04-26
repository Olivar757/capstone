<?php
    require('connectdb.php');
    require('db.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3;url=index.php" />
    <title>Success!</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <main class="afterNav">
        <div style='text-align:center;'>
            <h1>Successfully uploaded your report!</h1>
            <h4 style='color:grey;'><i>Redirecting in 3 seconds...</i></h4>
        </div>
    </main>
</body>
</html>