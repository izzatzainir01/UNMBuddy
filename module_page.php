<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/6397752591.js" crossorigin="anonymous"></script>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
	top:0px;
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

.Module_Page{
	position: relative;
	background: #fff;
	min-height: 100vh;
	width: calc(100% - 240px);
	left: 240px;
	transition: all 0.5s ease;
}

.sidebar.active ~ .Module_Page{
	width: calc(100% - 60px);
	left: 60px;
}

.sidebar.active ~ .Module_Page nav{
	left: 60px;
	width: calc(100% - 60px);
}

.Module_Page nav{
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


.sidebar.active ~ .Module_Page nav{
	left: 60px;
	width: calc(100% - 60px);
}

.Module_Page nav .day{
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

#navbar{
	overflow: hidden;
	background-color: none;
	width: 98%;
	height: 120px;
	margin-left: 1%;
	margin-top: 78px;
	top: 30px;	
	position: relative;
	border-radius: 10px;
}

#navbar h1{
	margin-top:10px;
	text-align:center;
	color:#000;
	font-size: 30px;
}

#navbar button{
	display: block;
	float: left;
	width: 20%;
	height:40px;
	border: 1px solid white;
	border-radius: 5px;
	text-align: center;
	padding: 10px 20px;
	margin-left: 50px;
	margin-top: 20px;
	text-decoration: none;
	font-size: 20px;
	cursor: pointer;
	background: #E0F5FE;
}

#navbar button:hover {
	background: skyblue;
}

#general{
	overflow: hidden;
	background-color: #E0F5FE;
	border: 2px solid black;
	width: 96%;	
	height: auto;
	margin-left: 2%;
	margin-top:60px;
	padding:20px 10px 20px 20px; 
	border-radius: 10px;
}

#Materials{
	background-color:#E0F5FE;
	border:2px solid black;
	width: 96%;
	height: 400px;
	margin-top: 50px;
	margin-left: 2%;
	padding:20px 10px 20px 20px; 
	border-radius: 10px;
}

#Assignment{
	background-color: #E0F5FE;
	border: 2px solid black;
	width: 96%;
	height: 400px;
	margin-top: 50px;
	margin-left: 2%;
	padding:20px 10px 20px 20px; 
	border-radius: 10px;
}

#Schedule{
	background-color: #E0F5FE;
	border: 2px solid black;
	width: 96%;
	height: 500px;
	margin-top: 50px;
	margin-left: 2%;
	padding:20px 10px 20px 20px; 
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

<section class="Module_Page">
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
	<button onclick="myFunction()" class="dropbtn"><i style="font-size:20px" class="fa-regular fa-circle-user"></i>&nbsp Angeline Lim Jia Yi</button>
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
	 <a href="login.php">
		<i class='bx bxs-log-out' ></i>
		<span class="list">Logout</span>
	</a>
	</div>
   </div>

</nav>

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