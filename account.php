
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content = "Dela Rosa">
    <meta name='description' content='Personalized account page'>   
    <title>My Account</title>

</head>
<body>
    <?php include 'navbar.php'?>   
    <main class='afterNav' role='main'>
    <div name='body'>
		<div name='welcome-msg'>
			<h1 style='text-align: center'>Welcome back!</em></h1>
		</div>
		<div name='info' style='width: 80%;display:block;margin:auto;border-bottom-style:solid;padding-bottom:5vh;'>
			<img style='border-radius:25px;margin-right:2.5vw;' class='profile_pic' src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSZVLlHlKrUYXoD_kgc2VHr7qRiQppYqYAeNw&usqp=CAU" alt="Your profile photo here!">
			<div class='align-middle' name='basic_info' style='margin:auto;display: inline-block;'>
				<h5>Full Name: <?php echo $info[0]['fname'] . " " . $info[0]['lname']?></h5>
				<h5>Email: <?php echo $info[0]['email']?></h5>
                <h5>Computing ID: <?php echo $info[0]['cid']?></h5>
                <h5>Major: <?php echo $info[0]['major']?></h5>
                <p><a href="upload.php" class="btn btn-primary">Upload AR Report</a></p>
		</div>
    </div>
    </main>

</body>
</html>