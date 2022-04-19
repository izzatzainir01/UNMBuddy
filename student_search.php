<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>

<html>
<head>
	<title>Student Search</title>
	<link href="pictures/UNMLogo.png" rel="icon" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<style>
		a { 
			text-decoration: none; 
			color:black;
		}
		#table1 {
			color:0fd6ab;
			font-size: 20px;
			width:10%;
			align: center; 
			valign: middle;
		}
	
		input {
			width:100%;
			font-size:15px;
			padding:9px;
		}
		select {
			background-color:#151B54;
			color:white;
		}
		.footer {
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

		*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: sans-serif;
		}
		.sidebar{
		position: fixed;
		height: 100%;
		width: 240px;
		background: #151B54;
		transition: all 0.5s ease;
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
		text-align: center
		}

		.sidebar .options{
		margin-top: 40px;
		}

		.sidebar .options li{
		position: relative;
		list-style: none;
		height: 60px;
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

		.sidebar .options li a:hover{
		background: #6daffe;
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

		input[type="search"]{
		padding:10px 1px 10px 50px;
		font-size:18px;
		color:#000;
		background-color:#B0C4DE;
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
		bottom:25px;
		}  

		.main{
		position: relative;
		background: #fff;
		min-height: 10vh;
		width: calc(100% - 240px);
		left: 240px;
		transition: all 0.5s ease;
		}

		.sidebar.active ~ .main{
		width: calc(100% - 60px);
		left: 60px;
		}

		.sidebar.active ~ .footer{
		width: calc(100% - 60px);
		left: 60px;
		}

		.sidebar.active ~ .main nav{
		left: 60px;
		width: calc(100% - 60px);
		}

		.main nav{
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


		.sidebar.active ~ .main nav{
			left: 60px;
			width: calc(100% - 60px);
		}

		.main nav .day{
			background: #E0F5FE;
			text-align: center;
			padding: 20px 10px;
			margin-left: 10px;
			border-radius: 12px;
			width: 150px;
		}

		.main nav .profile{
		display: flex;
		align-items: center;
		background: #F5F6FA;
		border: 2px solid #EFEEF1;
		border-radius: 6px;
		height: 50px;
		min-width: 190px;
		padding: 0 15px 0 2px;
		}

		nav .profile img{
		height: 40px;
		width: 40px;
		border-radius: 6px;
		object-fit: cover;
		}

		nav .profile i{
		font-size: 25px;
		color: #333;
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
			color: black;
			padding: 13px;
			font-size: 20px;
			border: 1px solid black;
			cursor: pointer;
			border-radius: 10px;
			box-sizing: border-box;
			margin-right: 10px;
		}

		.dropbtn:hover{
			background-color:#6daffe;
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
			background-color: #6daffe;
		}

		.show {
			display: block;
		}

		.content{
		margin: 6px;
		height:1150px;
		background: #fff;
		padding: 20px 30px;
		overflow: scroll;
		box-shadow: 0px 0px 0px #000;
		}

		.ss{
          margin-top: 10px;
          overflow: hidden;
          background-color: #fff;
          border: 2px solid black;
          width: 100%; 
          height: auto;
          padding:20px 10px 20px 10px; 
          box-sizing: border-box;
          border-radius: 10px;
        }

        .ss table{
          width: 100%;
		  background: #E0F5FE;
		  color: #000;
		  border-radius: 10px;
        }
        .ss td{
          text-align: center;
          padding: 8px;
        }

        .ss th{
          text-align: left;
          padding: 8px;
          font-weight: bold;
        }

        input[type="stusearch"]{
		padding:10px 1px 10px 50px;
		font-size:18px;
		color:#000;
		background-color:#fff;
		border-radius:15px;
		}
		.stusearch {
			margin: 9px 0px 18px 0px;
			width: 35%;
			float: left;
		}

		.std {
			float: left;
			margin: 18px 0% 18px 3%;
		}

		.lec {
			float: right;
			margin: 18px 25% 18px 0%;
		}

		.sort .container {
			display: block;
			position: relative;
			padding-left: 35px;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 22px;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		.sort .container input {
			position: absolute;
			opacity: 0;
			cursor: pointer;
			height: 0;
			width: 0;
		}

		.checkmark {
			position: absolute;
			top: 0;
			left: 0;
			height: 25px;
			width: 25px;
			background-color: #eee;
		}

		.sort .container:hover input ~ .checkmark {
			background-color: #ccc;
		}

		.sort .container input:checked ~ .checkmark {
		background-color: #2196F3;
		}

		.checkmark:after {
		content: "";
		position: absolute;
		display: none;
		}

		.sort .container input:checked ~ .checkmark:after {
		display: block;
		}

		.sort .container .checkmark:after {
		left: 9px;
		top: 5px;
		width: 5px;
		height: 10px;
		border: solid white;
		border-width: 0 3px 3px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
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
  	<section class="main">
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
			 <a href="login.php">
				<i class='bx bxs-log-out' ></i>
				<span class="list">Logout</span>
			</a>
			</div>
		   </div>
		
		</nav>
		<script>
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
		
  	</section>
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
	
		<footer class = "footer">
			<section class="footerone">
				<figure>
				<img src="pictures/logo.jpeg"width="100px">
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

</body>


</html>

<?php
}else{
  header("Location: index.php");
  exit();
}
?>