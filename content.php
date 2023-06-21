<?php

include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UV-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Content</title>
   <link rel="stylesheet" href="style1.css">
   <link rel="stylesheet" href="css/all.css">
</head>
  <body>
  <div id="header_2">
    <div class="container">
        <div class="menu-bar">
        <img src="images/ted.png" class="logo"> <p style="color:#f5f3fb;"> <br> Bicol University Polangui<br>File Desk:File Department Safety Keeper
        <ul id="sidemenu">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="content.php">Content Folders <i class="fas fa-caret-down"></i></a>

                <div class="dropdown-menu">
                    <ul>
                    <li><a href="memo.php">Memo</a></li>
                    <li><a href="tos.php">Curriculum Guide</a></li>
                    <li><a href="test-question.php">Syllabus</a></li>
                    <li><a href="insert.php">Upload</a></li>
                    </ul>
                </div>

            <li><a href="contact.php">Contact</a>
            </li>
            <li><a href="login_form.php">Logout</a></li>
            <i class="fa-solid fa-square-xmark" onclick="closemenu()"></i>
        </ul>
        <i class="fa-solid fa-bars" onclick="openmenu()"></i>
        </div>
    </div>
        <div class="table">
            <ul>
            <div class="dropdown">
                <li><a href="test-question.php">Syllabus<span>&rsaquo;</span></a></li> 
                    <ul>
                    <li><a href="">S.Y. 2019-2020</a></li>
                    <li><a href="">S.Y. 2020-2021</a></li>
                    <li><a href="">S.Y. 2021-2022</a></li>

                    <div class="dropdown_1">
                    <li><a href="year.php">S.Y. 2022-2023</a></li>
                        <ul>
                            <li><a href="BEED.php">BEED</a></li>

                            <div class="dropdown_2">
                            <li><a href="BSED.php">BSED</a></li>
                                <ul>
                                    <li><a href="BEED.php">Math</a></li>
                                    <li><a href="BEED.php">English</a></li>
                                </ul>
                            </div>

                            <div class="dropdown_2">
                            <li><a href="BTLED.php">BTLED</a></li>
                                <ul>
                                    <li><a href="BEED.php">H.E</a></li>
                                    <li><a href="BEED.php">ICT</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                    </ul>
            </div>

                <li><a href="tos.php">Curriculum Guide</a></li>
                <li><a href="memo.php">Memos</a></li>
            </ul>
        </div>
</div>
  
  <div class="copyright">
        <p>Copyright <i class="fa-solid fa-copyright"></i>valerie palima and mheljan suya</p> 
    </div>
</div>

<script>

    var sidemeu = document.getElementById("sidemenu");

    function openmenu(){
        sidemenu.style.right = "0";
    }
    function closemenu(){
        sidemenu.style.right = "-200px";
    }

</script>
 
</body>
</html>