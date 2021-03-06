<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/module_details.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Details</title>
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
        <script>
            function openModule(evt, moduleName) {
                var i, tabcontent, tabs;

                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                tabs = document.getElementsByClassName("tabs");
                for (i = 0; i < tabs.length; i++) {
                    tabs[i].className = tabs[i].className.replace(" active", "");
                }

                document.getElementById(moduleName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            document.getElementById('defaultOpen').click();
        </script>

        <div class="content">

            <h2>Modules</h2>

            <div class="tab">
                <button class="tabs active" onclick="openModule(event, 'Current')" id="defaultOpen">Current</button>
                <button class="tabs" onclick="openModule(event, 'Past')">Past</button>
                <button class="tabs" onclick="openModule(event, 'Future')">Future</button>
            </div>

            <div id="Current" class="tabcontent">
                <div class="md">
                    <table width="100%">
                        <tr>
                            <th>Module Code</th>
                            <th>Module Name</th>
                            <th>Module Credits</th>
                            <th>Module Status</th>
                        </tr>
                        <tr>
                            <td>COMP3422</td>
                            <td>Artificial Intelligence</td>
                            <td>20</td>
                            <td>Compulsory</td>
                        </tr>
                        <tr>
                            <td>COMP2624</td>
                            <td>Software Engineering</td>
                            <td>10</td>
                            <td>Compulsory</td>
                        </tr>
                        <tr>
                            <td>COMP2732</td>
                            <td>Algorithms Correctness</td>
                            <td>20</td>
                            <td>Compulsory</td>
                        </tr>
                        <tr>
                            <td>COMP2833</td>
                            <td>Human Computer Interaction</td>
                            <td>10</td>
                            <td>Optional</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="Past" class="tabcontent">
                <div class="md">
                    <table width="100%">
                        <tr>
                            <th>Module Code</th>
                            <th>Module Name</th>
                            <th>Module Credits</th>
                            <th>Module Status</th>
                        </tr>
                        <tr>
                            <td>COMP1457</td>
                            <td>World Wide Web</td>
                            <td>20</td>
                            <td>Compulsory</td>
                        </tr>
                        <tr>
                            <td>COMP2054</td>
                            <td>Operating Systems</td>
                            <td>20</td>
                            <td>Compulsory</td>
                        </tr>
                        <tr>
                            <td>COMP1822</td>
                            <td>Software Maintenance</td>
                            <td>10</td>
                            <td>Compulsory</td>
                        </tr>
                        <tr>
                            <td>COMP1328</td>
                            <td>Computer Fundamentals</td>
                            <td>10</td>
                            <td>Compulsory</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="Future" class="tabcontent">
                <div class="md">
                    <table width="100%">
                        <tr>
                            <th>Module Code</th>
                            <th>Module Name</th>
                            <th>Module Credits</th>
                            <th>Module Status</th>
                        </tr>
                        <tr>
                            <td>COMP2822</td>
                            <td>Final Year Project</td>
                            <td>20</td>
                            <td>Compulsory</td>
                        </tr>
                        <tr>
                            <td>COMP2283</td>
                            <td>Machine Learning</td>
                            <td>10</td>
                            <td>Compulsory</td>
                        </tr>
                        <tr>
                            <td>COMP1374</td>
                            <td>Image Processing</td>
                            <td>10</td>
                            <td>Optional</td>
                        </tr>
                        <tr>
                            <td>COMP2721</td>
                            <td>C++</td>
                            <td>10</td>
                            <td>Optional</td>
                        </tr>
                    </table>
                </div>
            </div>

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
}else{
    header("Location: index.php");
    exit();
}
?>