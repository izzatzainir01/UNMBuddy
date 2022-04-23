<?php
session_start();

if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/submission_page.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission</title>
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

        <! contain >
        <div class="module">
            <div class="box1">
                <div class="module_name">
                    <div class="code">COMP_2093_Database Management System</div>
                    <br>
                    <div class="direction"><a href="home.php">Dashboard</a> 🡆 <a href="module_details.php">COMP_2093_Database
                        Management</a> 🡆 <a href="submission.php">Coursework(Spring)</a></div>
                </div>
            </div>

            <div class="details">

                <div class="box2">
                    <div class="name">Coursework(Spring)</div>
                    <br>
                    <div class="decription">Submission : Consult the coursework sheet. ONLY the group leader submits,
                        e.g.,
                        Group01.pdf for Group 1.
                    </div>
                </div>

                <div class="box3">
                    <div class="title1">Attempt Number:</div>
                    <div class="number">This is attempt 1</div>
                </div>

                <div class="box4">
                    <div class="title2">Submission Status:</div>
                    <div class="status">No attempt</div>
                </div>

                <div class="box5">
                    <div class="title3">Grading Status:</div>
                    <div class="grade">No marked</div>
                </div>

                <div class="box6">
                    <div class="title4">Due Date:</div>
                    <div class="grade">Friday, 18 March 2022, 5:00 PM</div>
                </div>

                <div class="box7">
                    <form>
                        <div>
                            <label for="file_uploads">Choose file to upload (docx)</label>
                        </div>
                        <input type="file" id="file_uploads" name="file_uploads" accept=" .docx" multiple>
                        <div class="preview">
                            <p>No files currently selected for upload</p>
                        </div>
                        <div>
                            <button>Submit</button>
                        </div>
                    </form>

                    <script>
                        const input = document.querySelector('.box7 input');
                        const preview = document.querySelector('.box7 .preview');


                        input.addEventListener('change', updateImageDisplay);

                        function updateImageDisplay() {
                            while (preview.firstChild) {
                                preview.removeChild(preview.firstChild);
                            }

                            const curFiles = input.files;
                            if (curFiles.length === 0) {
                                const para = document.createElement('p');
                                para.textContent = 'No files currently selected for upload';
                                preview.appendChild(para);
                            } else {
                                const list = document.createElement('ol');
                                preview.appendChild(list);

                                for (const file of curFiles) {
                                    const listItem = document.createElement('li');
                                    const para = document.createElement('p');

                                    if (validFileType(file)) {
                                        para.textContent = `File name ${file.name}, file size ${returnFileSize(file.size)}.`;
                                        listItem.appendChild(para);
                                    } else {
                                        para.textContent = `File name ${file.name}: Not a valid file type. Update your selection.`;
                                        listItem.appendChild(para);
                                    }

                                    list.appendChild(listItem);
                                }
                            }
                        }

                        const fileTypes = [
                            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
                        ];

                        function validFileType(file) {
                            return fileTypes.includes(file.type);
                        }

                        function returnFileSize(number) {
                            if (number < 1024) {
                                return number + 'bytes';
                            } else if (number > 1024 && number < 1048576) {
                                return (number / 1024).toFixed(1) + 'KB';
                            } else if (number > 1048576) {
                                return (number / 1048576).toFixed(1) + 'MB';
                            }
                        }
                    </script>
                </div>

                <div class="box8">
                    <div class="title5">Feedback:</div>
                    <div class="feedback">Comment(0)</div>
                </div>

            </div>
        </div>

        <div class="sidebar">
            <div class="profile">
                <img src="pictures/profile.png" alt="profile_picture">
                <h3><?php echo $_SESSION['last_name']," ", $_SESSION['first_name'] ?></h3>
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

    </div>
</div>

</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>