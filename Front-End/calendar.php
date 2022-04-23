<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/calendar.css">
        <link rel="stylesheet" href="css/style.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calendar</title>
        <link href="pictures/UNMLogo.png" rel="icon"/>
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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section"></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="content w-100">
                            <div class="calendar-container">
                                <div class="calendar">
                                    <div class="year-header">
                                        <span class="left-button fa fa-chevron-left" id="prev"> </span>
                                        <span class="year" id="label"></span>
                                        <span class="right-button fa fa-chevron-right" id="next"> </span>
                                    </div>
                                    <table class="months-table w-100">
                                        <tbody>
                                        <tr class="months-row">
                                            <td class="month">Jan</td>
                                            <td class="month">Feb</td>
                                            <td class="month">Mar</td>
                                            <td class="month">Apr</td>
                                            <td class="month">May</td>
                                            <td class="month">Jun</td>
                                            <td class="month">Jul</td>
                                            <td class="month">Aug</td>
                                            <td class="month">Sep</td>
                                            <td class="month">Oct</td>
                                            <td class="month">Nov</td>
                                            <td class="month">Dec</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table class="days-table w-100">
                                        <td class="day">Sun</td>
                                        <td class="day">Mon</td>
                                        <td class="day">Tue</td>
                                        <td class="day">Wed</td>
                                        <td class="day">Thu</td>
                                        <td class="day">Fri</td>
                                        <td class="day">Sat</td>
                                    </table>
                                    <div class="frame">
                                        <table class="dates-table w-100">
                                            <tbody class="tbody">
                                            </tbody>
                                        </table>
                                    </div>
                                    <button class="button" id="add-button">Add Event</button>
                                </div>
                            </div>
                            <div class="events-container">
                            </div>
                            <div class="dialog" id="dialog">
                                <h2 class="dialog-header"> Add New Event </h2>
                                <form class="form" id="form">
                                    <div class="form-container" align="center">
                                        <label class="form-label" id="valueFromMyButton" for="name">Event name</label>
                                        <input class="input" type="text" id="name" maxlength="36">
                                        <label class="form-label" id="valueFromMyButton" for="count">Number of people to
                                            invite</label>
                                        <input class="input" type="number" id="count" min="0" max="1000000"
                                               maxlength="7">
                                        <input type="button" value="Cancel" class="button" id="cancel-button">
                                        <input type="button" value="OK" class="button button-white" id="ok-button">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            </section>
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>
            <script>
                let sidebar = document.querySelector(".sidebar");
                let searchBtn = document.querySelector(".bx-search-alt");
                searchBtn.onclick = function () {
                    sidebar.classList.toggle("active");
                }
            </script>

            <div class="sidebar">
                <div class="profile">
                    <img src="pictures/profile.png" alt="profile_picture">
                    <h3><?php echo $_SESSION['last_name'], " ", $_SESSION['first_name'] ?></h3>
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
                            <li class="helpnumber"><i class="fa fa-phone"></i> +6 (03) 8924 8199</li>
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
                    <ul class="footer-legal-list">
                        <li>&copy; Copyright 2022 UNMBUDDY</li>
                    </ul>
                </section>
            </footer>

            <script>
                var hamburger = document.querySelector(".hamburger");
                hamburger.addEventListener("click", function () {
                    document.querySelector("body").classList.toggle("active");
                })
            </script>

        </div>
    </div>

    </body>
    </html>

    <?php
} else {
    header("Location: index.php");
    exit();
}
?>