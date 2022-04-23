<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/home.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="pictures/UNMLogo.png" rel="icon"/>

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

            <div class="carousell-wrapper">
                <div class="sdtop">
                    <div class="slider">
                        <div class="slides">
                            <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <div class="slide first">
                                <a href="#">
                                    <img src="pictures/IMG2.jpeg">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="#">
                                    <img src="pictures/IMG1.jpeg">
                                </a>
                            </div>
                            <div class="slide">
                                <a href="#">
                                    <img src="pictures/IMG3.jpeg">
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
                <script type="text/javascript">
                    var counter = 1;
                    setInterval(function () {
                        document.getElementById('radio' + counter).checked = true;
                        counter++;
                        if (counter > 3) {
                            counter = 1;
                        }
                    }, 5000);
                </script>

                <h1>Modules</h1>
                <div class="modv">
                    <ul class="cards">
                        <li>
                            <a href="" class="card">
                                <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt=""/>
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path/>
                                        </svg>
                                        <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt=""/>
                                        <div class="card__header-text">
                                            <h3 class="card__title">Software Engineering Group Project</h3>
                                            <span class="card__status">COMP2019</span>
                                        </div>
                                    </div>
                                    <p class="card__description">Summary of Software Engineering Group Project</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="card">
                                <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt=""/>
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path/>
                                        </svg>
                                        <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt=""/>
                                        <div class="card__header-text">
                                            <h3 class="card__title">Introduction to Macroeconomics</h3>
                                            <span class="card__status">ECON1027</span>
                                        </div>
                                    </div>
                                    <p class="card__description">Summary of Introduction to Macroeconomics</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="card">
                                <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt=""/>
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path/>
                                        </svg>
                                        <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt=""/>
                                        <div class="card__header-text">
                                            <h3 class="card__title">Fundamentals of Neuroscience</h3>
                                            <span class="card__tagline"></span>
                                            <span class="card__status">LIFE1051</span>
                                        </div>
                                    </div>
                                    <p class="card__description">Summary of Fundamentals of Neuroscience</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="card">
                                <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt=""/>
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path/>
                                        </svg>
                                        <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt=""/>
                                        <div class="card__header-text">
                                            <h3 class="card__title">Social Psychology</h3>
                                            <span class="card__status">PSGY1012</span>
                                        </div>
                                    </div>
                                    <p class="card__description">Summary of Social Psychology</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <!--Calendar and Submission div -->
                <div class="cns">
                    <div class="calendar"><!--Calendar-->
                        <div class="title">
                            <a href="#">Calendar</a>
                        </div>

                        <div class="calendar_top">
                            <button class="prev button">
                                <i class='fa fa-chevron-left fa-2x'></i>
                            </button>
                            <div class="month"></div>
                            <button class="next button">
                                <i class='fa fa-chevron-right fa-2x'></i>
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
                            <div class="day">
                            </div>
                        </div>
                    </div>
                    <!--Submission div -->
                    <div style="float: left">
                        <div class="submission">
                            <div class="title">Submission of Coursework</div>
                            <div class="Submission_box">
                                <ul class="submit">
                                    <li>
                                        <a href="#" class="cta">
                                            <i class='fa fa-calendar-check-o'></i>
                                            <span class="">Software Engineer Group Project Task 1</span>
                                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                                <path d="M1,5 L11,5"></path>
                                                <polyline points="8 1 12 5 8 9"></polyline>
                                            </svg>
                                        </a>
                                    </li>
                                    <br>
                                    <li>
                                        <a href="#" class="cta">
                                            <i class='fa fa-calendar-check-o'></i>
                                            <span class="">Social Psychology Individual Report</span>
                                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                                <path d="M1,5 L11,5"></path>
                                                <polyline points="8 1 12 5 8 9"></polyline>
                                            </svg>
                                        </a>
                                    </li>
                                    <br>
                                    <li>
                                        <a href="#" class="cta">
                                            <i class='fa fa-calendar-check-o'></i>
                                            <span class="">Fundamentals of Neuroscience Quiz</span>
                                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                                <path d="M1,5 L11,5"></path>
                                                <polyline points="8 1 12 5 8 9"></polyline>
                                            </svg>
                                        </a>
                                    </li>
                                    <br>
                                    <li>
                                        <a href="#" class="cta">
                                            <i class='fa fa-calendar-check-o'></i>
                                            <span class="">Fundamentals of Neuroscience Task 1</span>
                                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                                <path d="M1,5 L11,5"></path>
                                                <polyline points="8 1 12 5 8 9"></polyline>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar">
                    <div class="profile">
                        <img src="pictures/profile.png" alt="profile_picture">
                        <h3><?php echo $_SESSION['last_name'], " ", $_SESSION['first_name'] ?></h3>
                        <p>Student</p>
                    </div>
                    <ul>
                        <li>
                            <a href="home.php" class="active">
                                <span class="icon"><i class="fa fa-home"></i></span>
                                <span class="item">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="news.php">
                                <span class="icon"><i class="fa fa-newspaper-o"></i></span>
                                <span class="item">Newsletter</span>
                            </a>
                        </li>
                        <li>
                            <a href="class.php">
                                <span class="icon"><i class="fa fa-book"></i></span>
                                <span class="item">Class</span>
                            </a>
                        </li>
                        <li>
                            <a href="module_details.php">
                                <span class="icon"><i class="fa fa-university"></i></span>
                                <span class="item">Modules</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <span class="icon"><i class="fa fa-calendar"></i></span>
                                <span class="item">Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="search_people.php">
                                <span class="icon"><i class="fa fa-users"></i></span>
                                <span class="item">People</span>
                            </a>
                        </li>
                        <li>
                            <a href="result_page.php">
                                <span class="icon"><i class="fa fa-graduation-cap"></i></span>
                                <span class="item">Result</span>
                            </a>
                        </li>
                        <li>
                            <a href="finance.php">
                                <span class="icon"><i class="fa fa-credit-card"></i></span>
                                <span class="item">Finance</span>
                            </a>
                        </li>
                        <li>
                            <a href="help_page.php">
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
                            <a href="logout.php">
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


                <script>
                    var hamburger = document.querySelector(".hamburger");
                    hamburger.addEventListener("click", function () {
                        document.querySelector("body").classList.toggle("active");
                    })
                </script>
                <script>
                    const prev = document.querySelector('.prev');
                    const next = document.querySelector('.next');

                    const track = document.querySelector('.track');

                    let carouselWidth = document.querySelector('.carousel-container').offsetWidth;

                    window.addEventListener('resize', () => {
                        carouselWidth = document.querySelector('.carousel-container').offsetWidth;
                    })

                    let index = 0;

                    next.addEventListener('click', () => {
                        index++;
                        prev.classList.add('show');
                        track.style.transform = `translateX(-${index * carouselWidth}px)`;

                        if (track.offsetWidth - (index * carouselWidth) < carouselWidth) {
                            next.classList.add('hide');
                        }
                    })

                    prev.addEventListener('click', () => {
                        index--;
                        next.classList.remove('hide');
                        if (index === 0) {
                            prev.classList.remove('show');
                        }
                        track.style.transform = `translateX(-${index * carouselWidth}px)`;
                    })
                </script>

                <script>
                    var month = document.querySelector(".month");
                    var calendarDays = document.querySelector(".calendar_box .day");
                    var today = new Date();
                    var date = new Date();
                    month.textContent = date.toLocaleDateString("en-US", {month: 'long', year: 'numeric'});
                    today.setHours(0, 0, 0, 0);
                    renderCalendar();

                    function renderCalendar() {
                        const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
                        const totalMonthDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
                        const startWeekDay = new Date(date.getFullYear(), date.getMonth(), 1).getDay();
                        calendarDays.innerHTML = "";
                        let totalCalendarDay = 6 * 7;
                        for (let i = 0; i < totalCalendarDay; i++) {
                            let day = i - startWeekDay;
                            if (i <= startWeekDay) {
                                // adding previous month days
                                calendarDays.innerHTML += `<div class='padding-day'>${prevLastDay - i}</div>`;
                            } else if (i <= startWeekDay + totalMonthDay) {
                                // adding this month days
                                date.setDate(day);
                                date.setHours(0, 0, 0, 0);
                                let dayClass = date.getTime() === today.getTime() ? 'current-day' : 'month-day';
                                calendarDays.innerHTML += `<div class='${dayClass}'>${day}</div>`;
                            } else {
                                // adding next month days
                                calendarDays.innerHTML += `<div class='padding-day'>${day - totalMonthDay}</div>`;
                            }
                        }
                    }

                    document.querySelectorAll(".button").forEach(function (element) {
                        element.addEventListener("click", function () {
                            date = new Date(month.textContent);
                            date.setMonth(date.getMonth() + (element.classList.contains("prev") ? -1 : 1));
                            month.textContent = date.toLocaleDateString("en-US", {month: 'long', year: 'numeric'});
                            renderCalendar();
                        });
                    });
                </script>
    </body>
    </html>

    <?php
} else {
    header("Location: index.php");
    exit();
}
?>