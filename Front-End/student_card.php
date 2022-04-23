<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/student_card.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Card</title>
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
    <section style="display: flex;">
      <div class="upc">
        <h3 style="margin: 9px 0px 15px 3%;">UNM Student Card</h3>
        <div class="sp">
          <table width="100%" height="207px" >
            <tr>
              <th rowspan = "5" width = "250px"><img src = "pictures/UNMB_Profile.png" height = "163px"></th>
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
            </tr>
            <tr>
              <th>Gender</th>
              <td>Male</td>
            </tr>
            <tr>
              <th>Roles</th>
              <td>Student</td>
            </tr>
            <tr>
              <th>Change Profile Pic <i class='bx bxs-edit' ></i></th>
              <th>Course</th>
              <td>Undergraduate</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="ach">
        <div class="sp">
          <button type="button">Status (Active/Non-Active)</button>
          <button type="button">Credit (RM40.00)</button>
          <button type="button">Pay</button>
        </div>
      </div>
    </section>

  </div>

    <div class="sidebar">
      <div class="profile">
        <img src="pictures/profile.png" alt="profile_picture">
        <h3><?php echo $_SESSION['last_name'], " ", $_SESSION['first_name'] ?></h3>
        <p>Student</p>
      </div>
      <ul>
        <li>
          <a href="home.html" class="active">
            <span class="icon"><i class="fa fa-home"></i></span>
            <span class="item">Home</span>
          </a>
        </li>
        <li>
          <a href="news.html">
            <span class="icon"><i class="fa fa-newspaper-o"></i></span>
            <span class="item">Newsletter</span>
          </a>
        </li>
        <li>
          <a href="class.html">
            <span class="icon"><i class="fa fa-book"></i></span>
            <span class="item">Class</span>
          </a>
        </li>
        <li>
          <a href="module_details.html">
            <span class="icon"><i class="fa fa-university"></i></span>
            <span class="item">Modules</span>
          </a>
        </li>
        <li>
          <a href="calendar.html">
            <span class="icon"><i class="fa fa-calendar"></i></span>
            <span class="item">Calendar</span>
          </a>
        </li>
        <li>
          <a href="search_people.html">
            <span class="icon"><i class="fa fa-users"></i></span>
            <span class="item">People</span>
          </a>
        </li>
        <li>
          <a href="result_page.html">
            <span class="icon"><i class="fa fa-graduation-cap"></i></span>
            <span class="item">Result</span>
          </a>
        </li>
        <li>
          <a href="finance.html">
            <span class="icon"><i class="fa fa-credit-card"></i></span>
            <span class="item">Finance</span>
          </a>
        </li>
        <li>
          <a href="help_page.html">
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
          <a href="login.html">
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
            <li><a href="home.html">Help Desk</a></li>
            <br>
            <li><a href="finance.html">Finance</a></li>
            <br>
            <li><a href="news.html">Newsletter</a></li>
            <br>
          </ul>
        </div>

        <div class="footer-main-item">
          <h2 class="footer-title">Navigation</h2>
          <ul>
            <br>
            <li><a href="home.html">Dashboard</a></li>
            <br>
            <li><a href="finance.html">Finance</a></li>
            <br>
            <li><a href="news.html">Newsletter</a></li>
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
} else {
    header("Location: index.php");
    exit();
}
?>