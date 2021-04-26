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
    <title>What's Next</title>
</head>
<body>
    <?php include 'navbar.php'?>
    <main class="afterNav">
        <div style='text-align:center;'>
            <h1 style='text-align:center;'>Proposed Schedule</h1>
            <p>Next Semester: Fall 2021</p>
        </div>
        <div class="container" style='max-width:100%;'>
        <div class="container" style='max-width:100%'>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="bg-light-gray">
                                <th class="text-uppercase">Time</th>
                                <th class="text-uppercase">Monday</th>
                                <th class="text-uppercase">Tuesday</th>
                                <th class="text-uppercase">Wednesday</th>
                                <th class="text-uppercase">Thursday</th>
                                <th class="text-uppercase">Friday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class='align-middle'>8:00am</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="align-middle">09:00am</td>
                                <td>
                                    <span>PHYS 2415</span>
                                    <div>Intro Physics 2 for Engineers</div>
                                    <div>9:00-9:50</div>
                                </td>
                                <td></td>
                                <td>
                                    <span>PHYS 2415</span>
                                    <div>Intro Physics 2 for Engineers</div>
                                    <div>9:00-9:50</div>
                                </td>
                                <td></td>
                                <td>
                                    <span>PHYS 2415</span>
                                    <div>Intro Physics 2 for Engineers</div>
                                    <div>9:00-9:50</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">10:00am</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="align-middle">11:00am</td>
                                <td></td>
                                <td>
                                    <span>CS 4620</span>
                                    <div>Compilers</div>
                                    <div>11:00-12:15</div>
                                </td>
                                <td></td>
                                <td>
                                    <span>CS 4620</span>                                
                                    <div>Compilers</div>
                                    <div>11:00-12:15</div>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="align-middle">12:00pm</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class="align-middle">1:00pm</td>
                                <td>
                                    <span>RELG 1500</span>
                                    <div>Intro to Western Religions</div>
                                    <div>1:00-1:50</div>
                                </td>
                                <td></td>
                                <td>
                                    <span>RELG 1500</span>
                                    <div>Intro to Western Religions</div>
                                    <div>1:00-1:50</div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td class='align-middle'>2:00pm</td>
                                <td></td>
                                <td>
                                    <span>CS 3240</span>
                                    <div>Adv Software Development Methods</div>
                                    <div>2:00-3:15</div>
                                </td>
                                <td></td>
                                <td>
                                    <span>CS 3240</span>
                                    <div>Adv Software Development Methods</div>
                                    <div>2:00-3:15</div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class='align-middle'>3:00pm</td>
                                <td>
                                    <span>CS 3102</span>
                                    <div>Theory of Computation</div>
                                    <div>3:30-4:45</div>
                                </td>
                                <td></td>
                                <td>
                                    <span>CS 3102</span>
                                    <div>Theory of Computation</div>
                                    <div>3:30-4:45</div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class='align-middle'>4:00pm</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class='align-middle'>5:00pm</td>
                                <td>
                                    <span>STS 3500</span>
                                    <div>Adv Topics in Tech and Society</div>
                                    <div>5:00-7:00</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class='align-middle'>6:00pm</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class='align-middle'>7:00pm</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>