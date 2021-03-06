<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/search_people.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
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
        <script>
            let sidebar = document.querySelector(".sidebar");
            let searchBtn = document.querySelector(".bx-search-alt");
            searchBtn.onclick = function(){
                sidebar.classList.toggle("active");}
        </script>
        <script>
            function stdSort() {
                var checkbox = document.getElementById("stdCheck");
                var text = document.getElementsByClassName("std");

                if (checkbox.checked == true){
                    text.style.display = "block";
                } else {
                    text.style.display = "none";
                }
            }
            function lecSort() {
                var checkbox = document.getElementById("lecCheck");
                var text = document.getElementsByClassName("lec");

                if (checkbox.checked == true){
                    text.style.display = "block";
                } else {
                    text.style.display = "none";
                }
            }
        </script>

        <section class = "main">
            <div class="content">
                <section>
                    <div class="stusearch">
                        <form>
                            <input type="stusearch" placeholder="  Search.." />
                        </form>
                    </div>
                    <div class="sort">
                        <div class="std">
                            <label class="container">Students
                                <input type="checkbox" id="stdCheck" onclick="stdSort()">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="lec">
                            <label class="container">Lecturers
                                <input type="checkbox" id="lecCheck" onclick="lecSort()">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="ss">
                        <table width="100%" height="207px" style="border: 2px solid #151B54">
                            <tr>
                                <th rowspan = "6" width = "250px"><img src = "pictures/UNMB_Profile.png" height = "163px"></th>
                                <th>User ID</th>
                                <td>20228347</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>Student Name</td>
                            </tr>
                            <tr>
                                <th>University Email</th>
                                <td>University@email.com</td>
                            </tr><tr>
                            <th>Gender</th>
                            <td>Male</td>
                        </tr><tr>
                            <th>Roles</th>
                            <td>Student</td>
                        </tr><tr>
                            <th>Course</th>
                            <td>Undergraduate</td>
                        </tr>
                        </table>
                    </div>
                </section>
                <section>
                    <div class="ss">
                        <table width="100%" height="207px" style="border: 2px solid #151B54">
                            <tr>
                                <th rowspan = "6" width = "250px"><img src = "pictures/UNMB_Profile.png" height = "163px"></th>
                                <th>User ID</th>
                                <td>20212348</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>Lecturer Name</td>
                            </tr>
                            <tr>
                                <th>University Email</th>
                                <td>University@email.com</td>
                            </tr><tr>
                            <th>Gender</th>
                            <td>Female</td>
                        </tr><tr>
                            <th>Roles</th>
                            <td>Lecturer</td>
                        </tr><tr>
                            <th>Course</th>
                            <td>Undergraduate</td>
                        </tr>
                        </table>
                    </div>
                </section>
                <section>
                    <div class="ss std">
                        <table width="100%" height="207px" style="border: 2px solid #151B54">
                            <tr>
                                <th rowspan = "6" width = "250px"><img src = "pictures/UNMB_Profile.png" height = "163px"></th>
                                <th>User ID</th>
                                <td>20202736</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>Student Name</td>
                            </tr>
                            <tr>
                                <th>University Email</th>
                                <td>University@email.com</td>
                            </tr><tr>
                            <th>Gender</th>
                            <td>Other</td>
                        </tr><tr>
                            <th>Roles</th>
                            <td>Student</td>
                        </tr><tr>
                            <th>Course</th>
                            <td>Postgraduate</td>
                        </tr>
                        </table>
                    </div>
                </section>
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