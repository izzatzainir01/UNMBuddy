<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/module_page.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Page</title>
    <link href="pictures/UNMLogo.png" rel="icon" />
</head>

<body>
<div class="menusidebar">
    <div class="section">
        <div class="top_navbar">
            <div class="hamburger">
                <a href="#">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="search-container">
                    <form>
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <! contain >
        <div id="navbar">
            <h1>Software Engineering Group Project (COMP2019 UNMC)</h1>
            <button type="button" onclick="document.getElementById('general').scrollIntoView({behavior:'smooth', block: 'center'});">General</button>
            <button type="button" onclick="document.getElementById('Materials').scrollIntoView({behavior:'smooth', block: 'center'});">Materials</button>
            <button type="button" onclick="document.getElementById('Assignment').scrollIntoView({behavior:'smooth', block: 'center'});">Coursework</button>
            <button type="button" onclick="document.getElementById('Schedule').scrollIntoView({behavior:'smooth', block: 'center'});">Schedule</button>
        </div>

        <div id="general">
            <h2>General</h2><br>
            <p>Lecturer:&nbsp &nbsp Dr Chen ZhiYuan<br><br>
                Office:	BB71<br><br>
                Total Credits:&nbsp &nbsp 20<br><br>
            </p>
            <table class="classes" style="width:40%">
                <tr>
                    <th>Classes:</th>
                    <th style="text-align:center;">&nbsp Autumn</th>
                    <th style="text-align:center;">&nbsp Spring</th>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:center;">&nbsp Tuesday 13:00 -14:00 DA08</td>
                    <td style="text-align:center;">&nbsp Thursday 13:00-14:00 DA08</td>
                </tr>
            </table>
            <br>
            <table class="Meetings" style="width:40%">
                <tr>
                    <th>Meetings:</th>
                    <th style="text-align:center;">&nbsp Autumn</th>
                    <th style="text-align:center;">&nbsp Spring</th>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:center;">&nbsp Monday 14:00-16:00 BB80</td>
                    <td style="text-align:center;">&nbsp Monday 9:00-11:00 BB80</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:center;">&nbsp Wednesday 15:00-17:00 BB80</td>
                    <td style="text-align:center;">&nbsp Wednesday 14:00-16:00 BB80</td>
                </tr>
            </table>
            <br>
            <p>
                Online: Join the TEAM as follows:<br><br>
                Team Link :  #Teams<br><br>
                Team Code :  v2vw6if<br><br>
            </p>
            <br>
            <hr style="width:97%; float:left;"><br>

            <h2>Module Information</h2><br>
            <h3>Summary</h3>
            <p>This module is part of the Software Engineering theme in the School of Computer Science. Students are divided up into groups of around five or six students, and assigned a member of staff as their supervisor. Each supervisor will provide their group with a short written description of a computer application to be designed, programmed, and documented during the course of the module. Each group will have regular meetings with and without their supervisor present. Several introductory lectures will also be given.</p>

        </div>

        <div id="Materials">
            <h2>Materials</h2><br>
            <hr style="width:97%; float:left;"><br>
            <a href="#lecture1">Lecture 1</a><br><br>
            <a href="#lecture2">Lecture 2</a>
        </div>

        <div id="Assignment">
            <h2>Coursework</h2><br>
            <hr style="width:97%; float:left;"><br>
        </div>

        <div id="Schedule">
            <h2>Schedule</h2><br>
            <hr style="width:97%; float:left;"><br><br>
            <table style="width:99%; background:#fff" border="5" cellspacing="0" align="left">
                <!--<caption>Timetable</caption>-->
                <tr>
                    <td height="30" width="100">
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>9:00</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>9:30</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>10:00</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>10:30</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>11:00</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>11:30</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>12:00</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>12:30</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>13:00</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>13:30</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>14:00</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>14:30</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>15:00</b>
                    </td>
                    <td align="center" height="20"
                        width="100">
                        <b>15:30</b>
                    </td><td align="center" height="20"
                             width="100">
                    <b>16:00</b>
                </td><td align="center" height="20"
                         width="100">
                    <b>16:30</b>
                </td><td align="center" height="20"
                         width="100">
                    <b>17:00</b>
                </td><td align="center" height="20"
                         width="100">
                    <b>17:30</b>
                </td>
                </tr>
                <tr>
                    <td align="center-left" height="50">
                        <b>Mon</b></td>
                    <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Software Engineering Group Project<br>Block B-BB80</td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                </tr>
                <tr>
                    <td align="center-left" height="50">
                        <b>Tue</b>
                    </td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Software Engineering Group Project<br>Block B-BB80</td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                </tr>
                <tr>
                    <td align="center-left" height="50">
                        <b>Wed</b>
                    </td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                </tr>
                <tr>
                    <td align="center-left" height="50">
                        <b>Thu</b>
                    </td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td style="background-color:#aaa" colspan="2" align="center" height="50">Lecture<br>Software Engineering Group Project<br>Block B-BB80</td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                </tr>
                <tr>
                    <td align="center-left" height="50">
                        <b>Fri</b>
                    </td>
                    <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Software Engineering Group Project<br>Block B-BB80</td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                    <td align="center" height="50"></td>
                </tr>
            </table>
        </div>

        <div class="sidebar">
            <div class="profile">
                <img src="pictures/profile.png" alt="profile_picture">
                <h3><?php echo $_SESSION['last_name']," ", $_SESSION['first_name'] ?></h3>
                <p>Student</p>
            </div>
            <ul>
                <li>
                    <a href="home.php" class="active">
                        <span class="icon"><i class="fa fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="news.php">
                        <span class="icon"><i class="fa fa-newspaper-o"></i></span>
                        <span class="item">Newsletter</span>
                    </a>
                </li>
                <li>
                    <a href="class.php">
                        <span class="icon"><i class="fa fa-book"></i></span>
                        <span class="item">Class</span>
                    </a>
                </li>
                <li>
                    <a href="module_details.php">
                        <span class="icon"><i class="fa fa-university"></i></span>
                        <span class="item">Modules</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.php">
                        <span class="icon"><i class="fa fa-calendar"></i></span>
                        <span class="item">Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="search_people.php">
                        <span class="icon"><i class="fa fa-users"></i></span>
                        <span class="item">People</span>
                    </a>
                </li>
                <li>
                    <a href="result_page.php">
                        <span class="icon"><i class="fa fa-graduation-cap"></i></span>
                        <span class="item">Result</span>
                    </a>
                </li>
                <li>
                    <a href="finance.php">
                        <span class="icon"><i class="fa fa-credit-card"></i></span>
                        <span class="item">Finance</span>
                    </a>
                </li>
                <li>
                    <a href="help_page.php">
                        <span class="icon"><i class="fa fa-question-circle"></i></span>
                        <span class="item">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="fa fa-reply"></i></span>
                        <span class="item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>


        <hr class="rounded">
        <footer>
            <section class="footer-main">
                <div class="footer-main-item">
                    <h2 class="footer-title">Site Information</h2>
                    <ul>
                        <br>
                        <li><a href="home.php">Help Desk</a></li>
                        <br>
                        <li><a href="finance.php">Finance</a></li>
                        <br>
                        <li><a href="news.php">Newsletter</a></li>
                        <br>
                    </ul>
                </div>

                <div class="footer-main-item">
                    <h2 class="footer-title">Navigation</h2>
                    <ul>
                        <br>
                        <li><a href="home.php">Dashboard</a></li>
                        <br>
                        <li><a href="finance.php">Finance</a></li>
                        <br>
                        <li><a href="news.php">Newsletter</a></li>
                        <br>
                    </ul>
                </div>

                <div class="footer-main-item">
                    <h2 class="footer-title">Get in touch</h2>
                    <ul>
                        <br>
                        <li><b>Malaysia</b></li>
                        <br>
                        <li class="helpnumber"><i class ="fa fa-phone"></i> +6 (03) 8924 8199</li>
                        <br>
                        <li class="helpmail"><i class="fa fa-envelope"></i> ITServiceDesk@nottingham.edu.my</li>
                        <br>
                    </ul>
                </div>
            </section>

            <section class="footer-social">
                <table>
                    <tr class="footer-social-list">
                        <th><a href="#"><i class="fa fa-facebook-square"></i></a></th>
                        <th><a href="#"><i class="fa fa-twitter"></i></a></th>
                        <th><a href="#"><i class="fa fa-instagram"></i></a></th>
                        <th><a href="#"><i class="fa fa-github"></i></a></th>
                        <th><a href="#"><i class="fa fa-linkedin"></i></a></th>
                        <th><a href="#"><i class="fa fa-youtube"></i></a></th>
                    </tr>
                </table>
            </section>

            <section class="footer-legal">
                <ul class="footer-legal-list" >
                    <li>&copy; Copyright 2022 UNMBUDDY</li>
                </ul>
            </section>
        </footer>

        <script>
            var hamburger = document.querySelector(".hamburger");
            hamburger.addEventListener("click", function(){
                document.querySelector("body").classList.toggle("active");
            })
        </script>

    </div>
</div>

</body>
</html>

    <?php
}else{
    header("Location: index.php");
    exit();
}
?>