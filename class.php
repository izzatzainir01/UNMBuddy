<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html>
<head>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<script src="https://kit.fontawesome.com/6397752591.js" crossorigin="anonymous"></script>
<style>

*{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
	font-family: sans-serif;
}

.sidebar{
	position: fixed;
	height: 100%;
	width: 250px;
	background: #151B54;
	transition: all 0.5s ease;
	top: 0px;
}

.sidebar.active{
	width: 60px;
}

.sidebar .logo{
	height: 80px;
	display: flex;
	align-items: center;
}

.sidebar .logo i{
	font-size: 28px;
	font-weight: 500;
	color: #fff;
	min-width: 60px;
	text-align: center;
}

.sidebar .options{
	margin-top: 40px;
}

.sidebar .options li{
	position: relative;
	list-style: none;
	height: 70px;
}

.sidebar .options li a{
	height: 100%;
	width: 100%;
	display: flex;
	align-items: center;
	text-decoration: none;
	transition: all 0.4s ease;
	color:#fff;
}

.options .search input{
	padding:10px 1px 10px 50px;
	font-size:18px;
	color:#000;
	background:#B0C4DE;
	border-radius:15px;
}

.search a{
	display:block;
	text-decoration:none; 
	font-size:18px;
	background-color:#B0C4DE;
	padding:20px;
	margin-top:5px;
	border-radius:5px;
	font-weight:bold;
}

.search ul{
	list-style:none;
	padding:0;
	width:465px;
}

.search ul li a:hover{
	color:#E74C3C;
}

.search .suggestions li{
	overflow:hidden;
	height:0;
	transition:all 0.3s ease-in-out;
}

input[type="search"]:focus + .suggestions li{
	height:50px;
}

.search .bx-search-alt{
	position:absolute;
	z-index:99;
	color:#fff;
	font-size:22px;
	bottom:35px;
}  

.sidebar .options li a:hover{
	background: #4682B4;
}

.sidebar .options li i{
	min-width: 65px;
	text-align: center;
	font-size: 22px;
	border-radius:12px;
	color: #fff;
}

.sidebar .options li a .list{
	color: #fff;
	font-size: 15px;
	font-weight: 400;
}

.class{
	position: relative;
	background: #fff;
	min-height: 100vh;
	width: calc(100% - 240px);
	left: 240px;
	transition: all 0.5s ease;
}

.sidebar.active ~ .class{
	width: calc(100% - 60px);
	left: 60px;
}

.class nav{
	justify-content: space-between;
	height: 78px;
	background: #fff;
	display: flex;
	align-items: center;
	position: fixed;
	width: calc(100% - 240px);
	left: 240px;
	z-index: 100;
	padding: 0 20px;
	box-shadow:  0px 1px 1px rgba(0, 0, 0, 0.1);
	transition: all 0.5s ease;
	top: 0px;
}


.sidebar.active ~ .class nav{
	left: 60px;
	width: calc(100% - 60px);
}

.class nav .day{
	background: #E0F5FE;
	text-align: center;
	color: #000; 
	padding: 20px 10px;
	margin-left: 10px;
	border-radius: 12px;
	width: 150px;
}  

.bell{
	font-size: 28px;
	cursor: pointer;
	position: fixed;
	left: 79%;
    margin-top: 5px;
}

.dropbtn {
	background-color: #E0F5FE;
	color: #000;
	padding: 13px;
	font-size: 20px;
	border: 1px solid black;
	cursor: pointer;
	border-radius: 10px;
	box-sizing: border-box;
	margin-right: 10px;
}

.dropbtn:hover{
	background-color: skyblue;
}

.dropdown_menu {
	display: none;
	position: absolute;
	background-color: #f1f1f1;
	width: 225px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	border-radius: 10px;
}

.dropdown_menu a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
}

.dropdown_menu a:hover {
    background-color: #ddd;
}

.show {
	display: block;
}

.Info{
	overflow: hidden;
	width: 100%;
	height: 100px;
	text-align: center;
	position: relative;
	margin-top: 78px;
}

.Info button{
	display: block;
	float: left;
	width: 25%;
	height:40px;
	border: none;
	text-align: center;
	padding: 10px 20px;
	margin-left: 6%;
	margin-top: 30px;
	text-decoration: none;
	font-size: 20px;
	cursor: pointer;
	background: #E0F5FE;
	border-radius: 5px;
}

.Info button:hover {
	background: skyblue;
}

.Info .module_code{
	display: block;
	float: left;
	width: 25%;
	height:40px;
	border: none;
	margin-left: 6%;
	margin-top: 30px;
	background: #fff;
	border-radius: 5px;
}

.Info .module_code input {
	width: 100%;
	height: 40px;
	padding: 20px;
	background: #E0F5FE;
	border:	none;
	text-align: center;
	font-size: 15px;
}

.Info .module_code i{
	border: none;
	font-size: 20px;
	margin-top: 10px;
	margin-left: 50px;
	position: absolute;
	float: left;
}

.Quick_Acess{
	width: 96%;
	height: 400px;
	overflow: auto;
	border: 1px solid black;
	margin-left: 2%;
	background: #E0F5FE;
	margin-top: 10px;
	border-radius: 10px;
}

.Quick_Acess div{
	float: left;
	width: 290px;
	height: 200px;
	border: 1px solid black;
	margin: 0 0 50px 50px;
	background: #fff;
}

.Quick_Acess .module1 div{
	margin-top: -3px;
	margin-left: 0px;
	width: 100%;
	height: 59px;
	border: none;
	padding: 15px 5px 10px 5px;
}

#Timetable{
	background:#E0F5FE;
	border:	2px solid black;
	width: 96%;
	height:550px;
	padding-left:20px;
	margin: 40px 0 0 2%;
	font-size:15px;
	border-radius: 10px;
}

.footer{
	width: 100%;
	background-color:#1762A7;
	height: 500px;
	margin-top: 40px;
}

.footerone,
.footertwo,
.footerthree
 {
	width:28%;
	float: left;
	text-align: left;
	color: #fff;
	padding-left: 20px;
	padding-top: 20px;
}

.footerone ul{
	margin: 0px;
	padding: 0;
	list-style: none;
}

.footerone img{
	border: none;
	padding-bottom: 5px;
	margin: 15px 10px 0px 10px;
}

.footerone p{
	width: 70%;
	margin-top: 0px;
	font-family: bahnscrift semibold semiconden;
}

.footertwo ul{
	margin: 10px;
	list-style: none;
}
.footertwo ul a{
	text-transform: uppercase;
	text-decoration: none;
	color: #fff;
	font-size: 25;
	font-weight: bold;
	font-size: 15px;
}

.footer_bottom{
	width: 100%;
	background-color: #003558;
	color: white;
	height: 25px;
	float: right;
	font-weight: normal;
	text-align: center;
	position: absolute;
	bottom: 0px;
	left: 0px;
	padding top: 20px;
}  

</style>
   </head>
<body>
<div class="sidebar">
      <div class="logo">
      <a href="home.php">
      <i class='bx bx-home-alt'></i>
      </a>
      <figure>
	      <img src="pictures/logo.jpeg"width="180px" style="left:80%">
	  </figure> 
      </div>
      <ul class="options">
        <li>
           <form class="search">
           <i class='bx bx-search-alt' ></i>
           <input type="search" placeholder="  Search.." />
           <ul class="suggestions">
           <li><a href="#">Course Details</a></li>
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
<section class="class">
<nav>
	<div class="day">
		<div id = "Date"></p> 
			<script> 
			date = new Date();
			 month = date.getMonth();
			  monthlist = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]
			   Cdate = date.getDate(); 
			   day = date.getDay(); 
			   daylist = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]; 
			   document.getElementById("Date").innerHTML = daylist[day] + " " + Cdate + " " + monthlist[month]; 
			</script> 
		</div>
	</div>
	
	<div class="bell">
		<i class='bx bx-bell' ></i>
	</div>
	
   <div class="profile_menu">
	<button onclick="myFunction()" class="dropbtn"><i style="font-size:20px" class="fa-regular fa-circle-user"></i>&nbsp <?php echo $_SESSION['last_name']," ", $_SESSION['first_name'] ?></button>
	<div id="dropdown" class="dropdown_menu">
	 <a href="student_profile.php">
		<i class='bx bxs-user' ></i>
		<span class="list">Profile</span>
	</a>
	 <a href="finance1.php">
		<i class='bx bx-wallet' ></i>
		<span class="list">Finance</span>
	</a>
	 <a href="#">
		<i class='bx bx-wrench' ></i>
		<span class="list">Settings</span>
	</a>
	 <a href="logout.php">
		<i class='bx bxs-log-out' ></i>
		<span class="list">Logout</span>
	</a>
	</div>
   </div>

</nav>

<div class="Info">
	<button type="button" onclick="#"><i class="fa-solid fa-graduation-cap"></i>&nbsp &nbsp <a style="text-decoration:none; color:black" href="results.php">Exam Marks</a></button>
	<button type="button" onclick="#"><i class="fa-solid fa-book"></i>&nbsp &nbsp <a style="text-decoration:none; color:black" href="https://nusearch.nottingham.edu.my/">NuSearch</a></button>
	<div  class="module_code">
		<form action="#">
			<i class="fa-solid fa-magnifying-glass"></i>
			<input type="text" placeholder="Enter Module Code" name="search">
		</form>
	</div>
</div>

<div class="Quick_Acess">
	<h3 style="margin:10px">Module overview</h3>
	<div class="module1">
		<img style="width:100%; height:70%" src="pictures/SE.jpg">
		<div><a href="module_page.php">Software Engineering Group Project (COMP2019)</a></div>
	</div>
	<div class="module2">
	</div>
	<div class="module3">
	</div>
	<div class="module4">
	</div>
	<div class="module5">
	</div>
</div>

<div id="Timetable">
	<h2 style="margin-top:20px; margin-bottom:10px;">Timetable</h2>
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
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Software Specification<br>Block F3-F3B08</td>
            <td align="center" height="50"></td>
            <td align="center" height="50"></td>
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Artificial Intelligence Methods(20cr)<br>Block B-BB80</td>
			<td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>C++ Programming<br>Block F3-F3C04</td>
        </tr>
        <tr>
            <td align="center-left" height="50">
                <b>Tue</b>
            </td>
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Algorithms Correctness And Efficiency<br>Block F3-F3C04</td>
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Languanges And Computation<br>Block F3-F3C04</td>
            <td align="center" height="50"></td>
            <td align="center" height="50"></td>
			<td style="background-color:#aaa" colspan="2" align="center" height="50">Computing<br>Introduction To Image Processing<br>Block B-BB80</td>
			<td style="background-color:#aaa" colspan="2" align="center" height="50">Computing<br>Introduction To Image Processing<br>Block B-BB80</td>
			<td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Algorithms Correctness And Efficiency<br>Block B-BB80</td>
        </tr>
        <tr>
            <td align="center-left" height="50">
                <b>Wed</b>
            </td>
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Introduction To Image Processing<br>Block F3-F3A04</td>
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Algorithms Correctness And Efficiency<br>Block D-DA08</td>
            <td align="center" height="50"></td>
            <td align="center" height="50"></td>
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Software Engineering Group Project<br>Block B-BB80</td>
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Artificial Intelligence Methods(20cr)<br>Block B-BB80</td>
        </tr>
        <tr>
            <td align="center-left" height="50">
                <b>Thu</b>
            </td>
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>C++ Programming<br>Block F2-TCR1</td>
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Software Specification<br>Block B-BB80</td>
            <td style="background-color:#aaa" colspan="2" align="center" height="50">Lecture<br>Software Engineering Group Project<br>Block D-DA08</td>
			<td align="center" height="50"></td>
			<td align="center" height="50"></td>
			<td style="background-color:#aaa" colspan="2" align="center" height="50">Tutorial<br>Algorithms Correctness And Efficiency<br>Block F3-F3C04</td>
			<td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Artificial Intelligence Methods(20cr)<br>Block F3-F3C04</td>
		</tr>
		<tr>
			<td align="center-left" height="50">
                <b>Fri</b>
            </td>
			<td style="background-color:#aaa" colspan="4" align="center" height="50">Computing<br>Software Engineering Group Project<br>Block B-BB80</td>
            <td style="background-color:#aaa" colspan="4" align="center" height="50">Lecture<br>Human Computer Interaction<br>Block F1-F1A02</td>
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
	
	<p class="helpmail"> https://selfservice.nottingham.ac.uk</p>
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