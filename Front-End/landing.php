<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

    ?>

<!DOCTYPE HTML>
<html>
  <head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>UNMBuddy</title>
    <meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/landing.css">

  </head>
    
  <body>
    <!--Navigation Bar Starts-->
    <header>
      <img class="logo" src="pictures/logo.jpeg" alt="logo">
        <nav>
          <ul class="nav_links">
            <li><a href="https://www.nottingham.edu.my/index.aspx">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="https://www.nottingham.edu.my/Study/Study.aspx">Study</a></li>
            <li><a href="https://www.nottingham.ac.uk/accommodation/">Campus Life</a></li>
            <li><a href="#">Search</a></li>
          </ul>
        </nav>
        <a class="cta" href="https://www.nottingham.edu.my/Study/How-to-apply/how-to-apply.aspx"><button>Apply NOW</button></a>
    </header>

	<!-- Navigation Bar Ends-->

      <section class="showcase">

        <video src="video/UniVideo.mp4" muted loop autoplay></video>

          <div class="text">
              <h2>UNMBuddy</h2>
              <h3>A Completely Different Life Experience Achievable With Our Virtual Buddy Unite With Us And Together We Shape Our Future</h3>
              <a href="home.php">Get Started</a>
          </div>

      </section>

	  <section class="division">
		  <div class="text_div">
		  <h2>Explore A whole different<br> world with us</h2>
		  <p>The University of Nottingham Malaysia is a private university branch campus of the University of Nottingham.The university is situated in Semenyih, Selangor, 
			  Malaysia Consistently ranked in the top 100 universities worldwide,
			  UNM has been granted self-accreditation status by the Malaysian Qualifications Agency for our teaching and learning.</p>

			</div>
      </section>

      <section class="courses">
          <h1>Welcome to UNMBuddy</h1>
          <p>Connectivity Is Our Top Priority</p>

          <div class="row">
            <div class="course-col">
              <h3>Connectivity with People</h3>
              <img src="pictures/connect_people.jpg">
            </div>
            <div class="course-col">
              <h3>Centralized Information Centre</h3>
              <img src="pictures/centralized.png">
            </div>
            <div class="course-col">
              <h3>Consolidated Platform</h3>
              <img src="pictures/consolidated_platform.jpeg">
            </div>
          </div>
      </section>

      <section class="campus">
        <h1>Faculties, Schools and Departments</h1>
        <p>In Nottingham Malaysia we got more then 30+ courses where allow us to provide the best module and course for u , 
          that allow us to teach u the best u needed and used In the industry world </p>

        <div class="row">
          <div class="campus-col">
            <img src="pictures/science.jpg" alt="Image">
            <div class="layer">
              <h3><a href="https://apps.nottingham.edu.my/jw/web/userview/admoff/admission/_/admission">Schools & Faculties</a></h3>
            </div>
          </div>
          <div class="campus-col">
            <img src="pictures/reading.jpg" alt="Image">
            <div class="layer">
              <h3>Scholarship</h3>
            </div>
          </div>
          <div class="campus-col">
            <img src="pictures/reading2.jpg" alt="Image">
            <div class="layer">
              <h3><a href="https://www.nottingham.ac.uk/departments/researchcentresandinstitutes.aspx">Research Centres and Facilities</a></h3>
            </div>
          </div>
          
        </div>
      </section>

      <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Alongside state-of-the-art academic facilities, 
          the University has a wide range of amenities and recreational enhancement to improve the quality of life on campus. </p>

        <div class="row">
          <div class="facilities-col">
            <img src="pictures/football.jpg" alt="Image">
            <h3>Sports Complex</h3>
            <p>The emphasis on sporting excellence can be seen throughout the University.
              The use of the sports facilities is free of charge and available to all staff and students. </p>
          </div>
          <div class="facilities-col">
            <img src="pictures/health.jpg" alt="Image">
            <h3>Health Service</h3>
            <p>The On-Campus Medical Clinic is operated by Kumpulan Medic, an independent health provider, whereby a fee will be charged for consultations.
              If required, the centre is also able to dispense medicines and arrange for laboratory tests. </p>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
              <a href="https://www.nottingham.edu.my/CurrentStudents/Facilities/Health.aspx">
                Clinic
              </a>
            </button>
          </div>
          <div class="facilities-col">
            <img src="pictures/mosuqe.jpg" alt="Image">
            <h3>Prayer</h3>
            <p>Prayer rooms are available 24 hours a day for Muslim
              students on the ground floor of the Computer Centre and
              within the Islamic Centre.  </p>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
              <a href="https://www.nottingham.edu.my/International/LifeinMalaysia/Culture/Religion.aspx">
              Mosque
              </a>
            </button>
          </div>
        </div>
      </section>

    <section class="services">
      <h1>Services</h1>
      <p>With UNMBuddy, accessing the services of UNM are convenient and efficient </p>

      <div class="row">
        <div class="services-col">
          <img src="pictures/football.jpg" alt="Image">
          <h3>Finance Office</h3>
          <p>The emphasis on sporting excellence can be seen throughout the University.
            The use of the sports facilities is free of charge and available to all staff and students. </p>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
            <a href="https://www.nottingham.edu.my/International/LifeinMalaysia/Finance/Index.aspx">
              Student Registry
            </a>
          </button>
        </div>
        <div class="services-col">
          <img src="pictures/health.jpg" alt="Image">
          <h3>Campus Service</h3>
          <p>The On-Campus Medical Clinic is operated by Kumpulan Medic, an independent health provider, whereby a fee will be charged for consultations.
            If required, the centre is also able to dispense medicines and arrange for laboratory tests. </p>
        </div>
        <div class="services-col">
          <img src="pictures/mosuqe.jpg" alt="Image">
          <h3>Student Registry</h3>
          <p>Prayer rooms are available 24 hours a day for Muslim
            students on the ground floor of the Computer Centre and
            within the Islamic Centre.  </p>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
            <a href="https://www.nottingham.edu.my/CurrentStudents/StudentRegistry/Index.aspx">
              Student Registry
            </a>
          </button>
        </div>
      </div>
    </section>

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

  </body>

</html>

<?php
} else {
    header("Location: index.php");
    exit();
}
?>