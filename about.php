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
    <title>About</title>
</head>
<body>
    <?php include "navbar.php"?>

    <main class="afterNav">
        <div>
            <h1 style='text-align:center;'>About</h1>
        </div>
        <div style='text-align:center;'>
            <p class='abtMsg'>This tool was developed to address the outdated method that UVA's SIS provides students with their up-to-date progress through their curriculum.
            <br>It strives to address the current Academic Requirements Report deficiencies in <b>two ways</b>: 
            <br>The first, a page that lays out exactly which classes the student needs in addition to the courses they've already taken. 
            <br>The second, is a page that would take this list of needed courses in and attempt to generate proposed schedules 
            <br>for the next semester to keep the student in line with their major's curriculum.</p>
        </div>
        <div style='text-align:center;'>
            <h2>On Safety</h2>
            <p class='abtMsg'>One of the concerns with this tool is that of students' privacy on multiple levels. Including but not limited to GPA, identifying information like full name and SIS ID, courses failed, etc.
            <br>These concerns would need to be addressed before the implementation of a tool such as this. This could be done in multiple parts. For example, when scraping the academic requirements report for necessary information, all strings to be stored in a database could be hashed before they are stored. Or during scraping, purposefully identify which information to leave out. The database this tool would interact with would also need necessary safeguards to prevent hackers from gaining any sensitive information. Furthermore, each individual's account would need to be protected from hackers which could be done by having password requirements (which I have coded to be: 8 character length minimum, needs one upper case letter, and needs one lower case letter) this password is then hashed before it is stored in the database. Lastly administrators of such a tool would have to protect against cross-site scripting to prevent unauthorized data accesses which could be done in various manners.</p>
        </div>
    </main>
</body>
</html>