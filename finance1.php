<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>


<html>
    <head>
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
      
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
        margin-top: 80px;
        }

        .sidebar .options li{
        position: relative;
        list-style: none;
        height: 80px;
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
        bottom:45px;
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

        .dashboard{
        position: relative;
        background: #fff;
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
        }

        .sidebar.active ~ .dashboard{
        width: calc(100% - 60px);
        left: 60px;
        }

        .sidebar.active ~ .dashboard nav{
        left: 60px;
        width: calc(100% - 60px);
        }

        .header {
          margin-left: 2%;
          height: 120px;
        }

        .header #Date{
          background: #E0F5FE;
          border: 1px solid black;
          box-sizing: border-box;
          border-radius: 20px;
          width: 200px;
          height: 50px;
          font-size: 15px;
          font-weight: bold;
          text-align: center;
          color: black;
          padding-top: 15px;
          margin: 20px 0px 20px 10px;
          position: absolute;
        }

        .header #nottification{
          float: right;
          font-size: 25px;
          cursor: pointer;
          margin: 32px 0px 20px 0px;
          position: absolute;
          left:80%;
        }

        .dropbtn {
          background-color: #E0F5FE;
          color: black;
          padding: 16px;
          font-size: 15px;
          font-weight: bold;
          border: none;
          width: 200px;
          height: 50px;
          border-radius: 10px;
          border: 1px solid black;
          box-sizing: border-box;
        }

        .dropdown {
          position: relative;
          display: inline-block;
          margin: 20px 3% 20px 0px;
          width: 200px;
          height: 50px;


        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          width: 200px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
          border-radius: 10px;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: skyblue;}

        .til{
          margin-left: 3%;
        }

        .til a{
         background-color: #E0F5FE;
          color: black;
          padding: 16px;
          font-size: 15px;
          font-weight: bold;
          width: 180px;
          height: 50px;
          border-radius: 20px;
          border: 1px solid black;
          box-sizing: border-box;
          margin: 0px 3% 0px 0px;
          text-decoration: none;
          text-align: center;
        }

        .til a:hover{
          background-color: skyblue;
        }

        .ct{
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

        .ct table{
          width: 100%;
        }
        .ct td{
          text-align: left;
          padding: 8px;
        }

        .ct th{
          text-align: left;
          padding: 8px;
          font-weight: bold;
        }

        .ct tr:nth-child(even){
          background-color: #dddddd;
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
	      <img src="pictures/logo.jpeg "width="180px" style="left:80%">
          </a>
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
<section class="dashboard">

<div class="header">
    <div id="Date">
      <script type="text/javascript">
        date = new Date();
        month = date.getMonth();
        monthlist = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]
        Cdate = date.getDate();
        day = date.getDay();
        daylist = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
        document.getElementById("Date").innerHTML = daylist[day]  + " " + Cdate + " " + monthlist[month];
      </script>
    </div>
  <div class="dropdown" style="float: right; ">
    <button class="dropbtn"><?php echo $_SESSION['last_name']," ", $_SESSION['first_name'] ?></button>
    <div class="dropdown-content">
      <a href="student_profile.php">Profile</a>
      <a href="finance1.php">Finance</a>
      <a href="#">Settings</a>
      <a href="login.php">Log Out</a>
    </div>
  </div>
</div>
  
<div class="til" >
    <h1 style="font-size: 50px;">Finance
    <a href="finance2.php" style="float:right; " href="finance2.php" >Make Payment</a>
    </h1>
</div>

<div class="ct">
  <table>
    <tr>
      <th>Fee ID</th>
      <th>Description</th>
      <th>Date Issued</th>
      <th>Fee Amount</th>
      <th>Status</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Year 1 Sem 1 Fees</td>
      <td>20-2-2021</td>
      <td>$18,000</td>
      <td>Completed</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Lab Fees</td>
      <td>20-2-2021</td>
      <td>$2,000</td>
      <td>Completed</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Club session Fees</td>
      <td>20-2-2021</td>
      <td>$50</td>
      <td>Completed</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Year 1 Sem 2 Fees</td>
      <td>20-7-2021</td>
      <td>$18,000</td>
      <td>Completed</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Rental</td>
      <td>20-2-2022</td>
      <td>$7,800</td>
      <td>Completed</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Sport wears Fees</td>
      <td>20-2-2022</td>
      <td>$600</td>
      <td>Completed</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Year 2 Sem 1 Fees</td>
      <td>20-2-2022</td>
      <td>$19,000</td>
      <td>Pending</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Security Fees</td>
      <td>20-2-2022</td>
      <td>$600</td>
      <td>Pending</td>
    </tr>
    <tr>
      <td>9</td>
      <td>Year 2 Sem 2 Fees</td>
      <td>20-7-2022</td>
      <td>$19,000</td>
      <td>Pending</td>
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
</script>



</body>
</html>


<?php
}else{
  header("Location: index.php");
  exit();
}
?>