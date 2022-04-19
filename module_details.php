<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>

<html>
<head>
	<title>Module Details</title>
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
			background-color: #6daffe;
		}

		.show {
			display: block;
		}

		.content{
		margin-top:3px;
		height:450px;
		background: #fff;
		padding: 20px 30px;
		overflow: scroll;
		box-shadow: 0px 0px 0px #000;
		}

		.md{
          margin-left: 3%;
          margin-top: 10px;
          margin-right: 3%; 
          overflow: hidden;
          background-color: #fff;
          border: 2px solid black;
          width: 94%; 
          height: auto;
          padding:20px 10px 20px 10px; 
          box-sizing: border-box;
          border-radius: 10px;
        }

        .md table{
          width: 100%;
          background: #E0F5FE;
		  color: #000;
		  border-radius: 10px;
		  border: 2px solid #151B54;
          text-align: center;
          border-collapse: collapse;
        }
        .md tr{
        border: none;
        }
        .md td{
          text-align: center;
          padding: 8px;
          border-right: solid 1px #151B54; 
          border-left: solid 1px #151B54;
        }

        .md th{
          padding: 8px;
          font-weight: bold;
          border: 2px solid #151B54;
        }
		.tab {
			overflow: hidden;
			border: 1px solid #ccc;
			border-radius: 10px;
			background-color: #f1f1f1;
		}
		.tab button {
			background-color: inherit;
			float: left;
			border: none;
			border-radius: 10px;
			outline: none;
			cursor: pointer;
			padding: 14px 14.605% 16px 14.605%;
			transition: 0.3s;
			font-weight: bold;
		}
		.tab button:hover {
			background-color: #6daffe;
		}
		.tab button.active {
			background-color: #151B54;
			color: #fff;
		}
		.tabcontent {
			display: none;
			padding: 6px 12px;
			border-top: none;
			animation: fade 1s;
		}
		@keyframes fade {
			from {opacity: 0;}
			to {opacity: 1;}
		}
	
	</style>
</head>

<body onload="document.getElementById('defaultOpen').click();">

	<div class="sidebar">
		<div class="logo">
		<a href="#">
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
			 <li><a href="home.php">Course Details</a></li>
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
		function openModule(evt, moduleName) {
			var i, tabcontent, tabs;

			tabcontent = document.getElementsByClassName("tabcontent");
			for(i = 0; i < tabcontent.length; i++) {
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
	
<section class = "main">
	
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