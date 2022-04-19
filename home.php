<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html>
<head>
<title>UNMBuddy</title>
<link rel="stylesheet" href="css/home.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="sidebar">
      <div class="logo">
      <a href="#">
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
            <span class="list">People's Profile</span>
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

<section class="dashboard">
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
<button onclick="myFunction()" class="dropbtn"><i style="font-size:20px" i class='bx bx-user-circle'></i><?php echo $_SESSION['last_name']," ", $_SESSION['first_name'] ?></button> 
<div id="dropdown" class="dropdown_menu"> 
<a href="student_profile.php"> <i class='bx bxs-user' ></i> <span class="list">Profile</span> </a>
<a href="finance1.php"> <i class='bx bx-wallet' ></i> <span class="list">Finance</span> </a>
<a href="#"> <i class='bx bx-wrench' ></i> <span class="list">Settings</span> </a>
<a href="logout.php"> <i class='bx bxs-log-out' ></i> <span class="list">Logout</span> </a>
</div> 
</div> 
</nav>  

<div class="activity">
<div class="box1">
<div class ="news">
<div class="topic">Recent News</div>
<div class="slider">
<div class="slides">
               <input type="radio" name="radio-btn" id="radio1">
               <input type="radio" name="radio-btn" id="radio2">
               <input type="radio" name="radio-btn" id="radio3">
        <div class="slide first">
        <a href="#">
        <img src="pictures/workshop1.jpg" >
        </a>
        </div>
        <div class="slide">
        <a href="#">
        <img src="pictures/workshop2.jpg" >
        </a>
        </div>
        <div class="slide">
        <a href="#">
        <img src="pictures/workshop3.jpg">
        </a>
        </div>
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
</div>
<div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 3){
        counter = 1;
      }
    }, 5000);
</script>

<div class = "module">
<div class="box2">
          <div class="title">Module Overview</div>
           <div class="Module-box">
             <div class= "Module-img">
                <img src="pictures/math.jpg" >
                </div>
                <div class="Module-Name">
                <a href="#" class=Name>Mathematics</a>
                </div>
                </div>
                <div class="Module-box">
                <div class= "Module-img">
                <img src="pictures/c.png" >
                </div>
                <div class="Module-Name">
                <a href="#" class=Name>C++ Language</a>
                </div>
                </div>
               <div class="Module-box">
                <div class= "Module-img">
                <img src="pictures/software.png" >
                </div>
                <div class="Module-Name">
                <a href="#" class=Name>Software Maintainance</a>
                </div>
                </div>
                <div class="Module-box">
                <div class= "Module-img">
                <img src="pictures/database.jpg" >
                </div>
                <div class="Module-Name">
                <a href="#" class=Name>Database Management </a>
                </div>
                </div>
</div>               
</div>


<div class=others>
<div class="calendar">
       
<div class ="title">  
<a href="#">Calendar</a>
</div>
        
<div class="calendar_top">
<button class="prev button">
<i class='bx bxs-left-arrow'></i>
</button>
<div class="month"></div>
<button class="next button">
<i class='bx bxs-right-arrow'></i>
</button>
</div>
<div class="calendar_box">
 <div class="weekday">
      <div class="name">Sat</div>
      <div class="name">Sun</div>
      <div class="name">Mon</div>
      <div class="name">Tue</div>
      <div class="name">Wed</div>
      <div class="name">Thu</div>
      <div class="name">Fri</div>
</div>
<div class="day"></div>
</div>
</div>

<div class="submission">
     <div class="title">Submission of Coursework</div>
           <div class="Submission_box">
              <ul class="submit">
               <li>
               <a href="#">
              <i class='bx bx-task' ></i>
              <span class="assignment_name">COMP_2043_Mathematics</span>
              </a>
               </li>
               <br>
               <li>
               <a href="submission.php">
              <i class='bx bx-task' ></i>
              <span class="assignment_name">COMP_2093_Database Management </span>
              </a>
               </li>
               <br>
               <li>
               <a href="#">
              <i class='bx bx-task' ></i>
              <span class="assignment_name">COMP_2903_Software Maintainance</span>
              </a>
               </li>
               <br>
               <li>
               <a href="#">
              <i class='bx bx-task' ></i>
              <span class="assignment_name">COMP_2813_C++ Language</span>
              </a>
               </li>
               </ul>
     </div>           
</div>
</div>
</div>

    <hr class="rounded">

<body>
    <div class="container"></div>
    <footer>

        <section class="footer-main">
            <div class="footer-main-item">
                <h2 class="footer-title">Site Information</h2>
                <ul>
                    <br>
                    <li><a href="home.php">Help Desk</a></li>
                    <br>
                    <li><a href="finance1.php">Finance</a></li>
                    <br>
                    <li><a href="newsletters.php">Newsletter</a></li>
                    <br>
                </ul>
            </div>

            <div class="footer-main-item">
                <h2 class="footer-title">Navigation</h2>
                <ul>
                    <br>
                    <li><a href="home.php">Dashboard</a></li>
                    <br>
                    <li><a href="finance1.php">Finance</a></li>
                    <br>
                    <li><a href="newsletters.php">Newsletter</a></li>
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
<script>
var month = document.querySelector(".month");
var calendarDays = document.querySelector(".calendar_box .day");
var today = new Date();
var date = new Date();
month.textContent = date.toLocaleDateString("en-US", {month:'long', year:'numeric'});
today.setHours(0,0,0,0);
renderCalendar();
function renderCalendar(){
    const prevLastDay = new Date(date.getFullYear(),date.getMonth(),0).getDate();
    const totalMonthDay = new Date(date.getFullYear(),date.getMonth()+1,0).getDate();
    const startWeekDay = new Date(date.getFullYear(),date.getMonth(),1).getDay();
    calendarDays.innerHTML = "";
    let totalCalendarDay = 6 * 7;
    for (let i = 0; i < totalCalendarDay; i++) {
        let day = i-startWeekDay;
        if(i <= startWeekDay){
            // adding previous month days
            calendarDays.innerHTML += `<div class='padding-day'>${prevLastDay-i}</div>`;
        }else if(i <= startWeekDay+totalMonthDay){
            // adding this month days
            date.setDate(day);
            date.setHours(0,0,0,0);           
            let dayClass = date.getTime()===today.getTime() ? 'current-day' : 'month-day';
            calendarDays.innerHTML += `<div class='${dayClass}'>${day}</div>`;
        }else{
            // adding next month days
            calendarDays.innerHTML += `<div class='padding-day'>${day-totalMonthDay}</div>`;
        }    }}
        document.querySelectorAll(".button").forEach(function (element) {
	element.addEventListener("click", function () {
		date = new Date(month.textContent);
        date.setMonth(date.getMonth() + (element.classList.contains("prev") ? -1 : 1));
		month.textContent = date.toLocaleDateString("en-US", {month:'long', year:'numeric'});
		renderCalendar();
	});});
	</script>
</body>
</html>

<?php
}else{
  header("Location: index.php");
  exit();
}
?>