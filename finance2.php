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


        .side{
          float: right;
          margin: 20px 3% 0px 10px;
          width: 30%;
          box-sizing: border-box;
          border-radius: 15px;
          border: 1px solid black;
          height: 650px;
          padding: 10px 10px 10px 10px;
          background-color: #1762A7;
        }

        .cont{
          margin: 20px 4% 0px 3%;
          width: 60%;
          box-sizing: border-box;
          border-radius: 15px;
          border: 1px solid black;
          height: 650px;
          padding: 10px 10px 10px 10px;
          background-color: #1762A7;

        }
        
        .side h1{
          color: white;
          font-size: 25px;
          font-weight: bold;
          text-align: center;
          padding: 20px 0px 10px 0px;
        }

        .side h3{
          color: white;
          font-size: 18px;
          padding: 5px 5% 5px 5%;
          text-align: center;
        }

        .side button{

          margin: 10px 5% 10px 5%;
          width: 90%;
          box-sizing: border-box;
          border-radius: 15px;
          border: 1px solid black;
          background-color:  #E0F5FE;
          color: black;
          height: 50px;
          font-size: 20px;
          font-weight: bold;
        }

        .side button:hover{
          background-color: skyblue;
        }


        /* The container */
        .container {
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
          color: white;
          margin: 20px 5% 5px 5%;
        }

        .container input {
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
          border-radius: 50%;
        }

        .container:hover input ~ .checkmark {
          background-color: #ccc;
        }

        .container input:checked ~ .checkmark {
          background-color: #E0F5FE;;
        }

        .checkmark:after {
          content: "";
          position: absolute;
          display: none;
        }

        .container input:checked ~ .checkmark:after {
          display: block;
        }

        .container .checkmark:after {
          left: 9px;
          top: 5px;
          width: 5px;
          height: 10px;
          border: solid black;
          border-width: 0 3px 3px 0;
          -webkit-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          transform: rotate(45deg);
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
  
<div style="display: flex;">

  <div class="cont">
    <label class="container">1 &nbsp Year 2 Sem 1 Fees &nbsp &nbsp &nbsp $19,000
      <input type="checkbox" checked="checked">
      <span class="checkmark"></span>
    </label>
    <label class="container">2 &nbsp Security Fees  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp $600
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
    <label class="container">3 &nbsp Year 2 Sem 2 Fees &nbsp &nbsp &nbsp $19,000
      <input type="checkbox">
      <span class="checkmark"></span>
    </label>
  </div>

  <div class="side">
    <h1>Billing Summary</h1>
    <hr style="width:90%; margin: 15px 5% 15px 5%;">
    <h3>Tuition Fees &nbsp $19,000</h3>
    <h3>Security Fees &nbsp $600</h3>
    <hr style="width:90%; margin: 15px 5% 15px 5%;">
    <h3>Subtotal &nbsp $19,600</h3>
    <h3>Discont $50</h3>
    <h3>Total $19,550</h3>
    <hr style="width:90%; margin: 15px 5% 15px 5%;">
    <button type="button">Credit / Debit Card</button>
    <button type="button">Bank Transfer</button>
    <button type="button">E-Wallet</button>
    <button type="button">Other Method</button>

  </div>


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