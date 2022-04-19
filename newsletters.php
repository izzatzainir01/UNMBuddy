<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/newsletters.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   </head>
<body>
<div class="sidebar">
      <div class="logo">
      <a href="home.php">
      <i class='bx bx-home-alt'></i>
      </a>
      <figure>
	      <img src="pictures/logo.jpeg "width="180px" style="left:80%">
	  </figure> 
      </div>
      <ul class="options">
        <li>
           <form class="search">
           <i class='bx bx-search-alt' ></i>
           <input type="search" placeholder="  Search.." />
           <ul class="suggestions">
           <li><a href="https://pagedart.com/blog/how-to-add-a-search-bar-in-html/">Course Details</a></li>
           </ul>
           </form>
        </li>
        <br>
          <li>
              <a href="calendar.php">
                  <i class='bx bxs-calendar' ></i>
                  <span class="list">Calendar</span>
              </a>
          </li>
          <li>
              <a href="student_search.php">
                  <i class='bx bxs-group' ></i>
                  <span class="list">Student & Lecturer Profile</span>
              </a>
          </li>
          <li>
              <a href="newsletters.php">
                  <i class='bx bxs-news' ></i>
                  <span class="list">Newsletter</span>
              </a>
          </li>
          <li>
              <a href="results.php">
                  <i class='bx bxs-graduation' ></i>
                  <span class="list">Result</span>
              </a>
          </li>
          <li>
              <a href="class.php">
                  <i class='bx bx-book-reader' ></i>
                  <span class="list">Class</span>
              </a>
          </li>
          <li>
              <a href="module_details.php">
                  <i class='bx bx-book' ></i>
                  <span class="list">Module Overview</span>
              </a>
          </li>
          <li>
              <a href="help.php">
                  <i class='bx bx-help-circle' ></i>
                  <span class="list">Help</span>
              </a>
          </li>
      </ul>
      </div>
<section class="newsletter">
<nav>
 <div class="day"> 
 <div id = "Date"></p> 
 <script> 
 date = new Date(); 
 month = date.getMonth(); 
 monthlist = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"] 
 Cdate = date.getDate(); day = date.getDay(); 
 daylist = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]; 
 document.getElementById("Date").innerHTML = daylist[day] + " " + Cdate + " " + monthlist[month]; 
 </script> 
 </div> 
 </div> 
 <div class="bell"> 
 <i class='bx bx-bell' ></i> 
 </div> 
<div class="profile_menu"> 
<button onclick="myFunction()" class="dropbtn"><i style="font-size:20px" i class='bx bx-user-circle'></i>&nbsp <?php echo $_SESSION['last_name']," ", $_SESSION['first_name'] ?></button> 
<div id="dropdown" class="dropdown_menu"> 
<a href="student_profile.php"> <i class='bx bxs-user' ></i> <span class="list">Profile</span> </a>
<a href="finance1.php"> <i class='bx bx-wallet' ></i> <span class="list">Finance</span> </a>
<a href="#"> <i class='bx bx-wrench' ></i> <span class="list">Settings</span> </a>
<a href="login.php"> <i class='bx bxs-log-out' ></i> <span class="list">Logout</span> </a>
</div> 
</div> 
</nav>
<div class="activity">
<div class="box">
<div class ="news">
<div class="top">Co-curricular</div>
<img src ="pictures/co.png">
<div><a href="https://www.sanottingham.org/" class="view_btn">See for more details</a></div>
</div>
</div>

<div class=filter>
<div class="Category_box">

<div class="top2">Filter Result</div>
<br>
     <div class="title">Category</div>
         <br>
         <form>
    <label><input type="checkbox"value="SA"/> SA Activities</label><br>
    <label><input type="checkbox"value="Career"/> Career</label><br>
    <label><input type="checkbox"value="Office"/> Provost Office</label><br>
    
  </form>
     <div class="Date_box">
     <div class="title">Date</div>
         <br>
  <form>
   <label><input type="checkbox"value="This"/>This Week</label><br>
    <label><input type="checkbox"value="Last"/>Last Week</label><br>
    <label><input type="checkbox"value="Month"/>Last Month</label><br>
  </form>  
</div>
</div>
   
<div class="Result"> 
        <div class="title">Search Result</div>
           <div class="Result_box"> 
           <div class="Search_result_box">
           <div class="result" data-category="SA Month">
             <div class= "Result_img">
                <img src="pictures/fiction day.png" >
                </div>
                <div class="Description">
                <a href="#" class=name>Fiction Day</a>
                <p>Dark and difficult times lie ahead. Soon we must all face the choice between what is right and what is easy. It is unknown the unknown we fear when we look upon death and darkness, nothing more. Pick your right fictional character to survive through the adventure! </p>
                <p>Date:15th February 2022</p>
                </div>
                </div>
            </div>
            
          
            <div class="Search_result_box">
            <div class="result" data-category="Office This">
               <div class= "Result_img">
                <img src="pictures/announcement.jpg" >
                </div>
                <div class="Description">
                <a href="#" class=name>Reporting of individual COVID-19 cases on campus</a>
                <p>The Senior Defence Minister YB Dato' Seri Hishammuddin Tun Hussein recently announced that Malaysia is transitioning to the endemic stage of COVID-19 with the removal of several restrictions and standard operating procedures.
                   In view of this change, the university will stop sending emails to report individual COVID-19 positive cases on campus. Instead, we will notify the university community of an outbreak or high risk of an outbreak to contain the spread on a fortnightly basis.</p>
                </div>
                </div>
                </div>
           
           
            <div class="Search_result_box">
             <div class="result" data-category="Career Last">
               <div class= "Result_img">
                <img src="pictures/KPMG.jpg" >
                </div>
                <div class="Description">
                <a href="#" class=name>Data Analytic Workshop by KPMG (Career Skills Workshop)</a>
                <p>Date: 9th March 2022 (Wednesday) </p>
                <p>Time: 4.30 PM – 6.30 PM (Malaysia Time GMT 8)</p>
                <p>Platform : TEAMS (Email invite will be sent to registered participants)</p>
                </div>
                </div>
                </div>
          
        </div>   
     </div>     

</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script>
var $filterCheckboxes = $('input[type="checkbox"]');
var filterFunc = function() {
  
  var selectedFilters = {};

  $filterCheckboxes.filter(':checked').each(function() {

    if (!selectedFilters.hasOwnProperty(this.name)) {
      selectedFilters[this.name] = [];
    }

    selectedFilters[this.name].push(this.value);
  });

  var $filteredResults = $('.result');
  $.each(selectedFilters, function(name, filterValues) {


    $filteredResults = $filteredResults.filter(function() {

      var matched = false,
        currentFilterValues = $(this).data('category').split(' ');

    
      $.each(currentFilterValues, function(_, currentFilterValue) {

    

        if ($.inArray(currentFilterValue, filterValues) != -1) {
          matched = true;
          return false;
        }
      });
            return matched;

    });
  });

  $('.result').hide().filter($filteredResults).show();
}

$filterCheckboxes.on('change', filterFunc);  

</script>
            

<footer class="footer">
<section class="footerone">
    <figure>
    <img src="pictures/logo.jpeg "width="100px">
    </figure>
    <br>
    <p>UNM BUDDY is an integrated platform for improving student engagement in higher education</p>
</section>
<section class="footertwo">
    <br>
    <h2>Navigation</h2>
    <ul>
    <br>
    <li><a href="home.php">Dashboard</a></li>
    <br>
    <li><a href="finance1.php">Finance</a></li>
    <br>
    <li><a href="newsletters.php">Newsletter</a></li>
    <br>
    <li><a href="results.php">Result</a></li>
    <br>
    <li><a href="class.php">Class</a></li>
    <br>
    <li><a href="module_page.php">Module Page</a></li>
    <br>
    <li><a href="module_details.php">Module Details</a></li>
    <br>
    <li><a href="student_profile.php">Student Profile</a></li>
    </ul>

</section>
<section class="footerthree">
    <br>
    <h2>Get in touch</h2>
    <br>
    <p><b>Malaysia</b></p>
    <br>
    <p class="helpnumber">+6 (03) 8924 8199</p>

    <br>

    <p class="helpmail">ITServiceDesk@nottingham.edu.my</p>
    <br><br>
    <p><b>China</b></p>
    <br>
    <p class="helpnumber">+86 (0574) 8818 0000 (ext.8915)</p>

    <br>

    <p class="helpmail">e-learning-support@nottingham.edu.cn</p>
    <br><br>
    <p><b>United Kingdom</b></p>
    <br> 
    <p class="helpnumber">+44 (0115) 9516677 (24hrs)</p>

    <br>

    <p class="helpmail"> https://selfservice.nottingham.ac.uk/</p>
</section>

<aside class="footer_bottom">
&copy; &nbsp UNMBUDDY.com  | Based In Malaysia
</aside>
</footer>
</section>

<script>

let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector(".bx-search-alt");
searchBtn.onclick = function(){
sidebar.classList.toggle("active");}
function myFunction() {
  document.getElementById("dropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown_menu");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}    
</script>
</body>
</html>


<?php
}else{
  header("Location: index.php");
  exit();
}
?>