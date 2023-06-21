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
   <title>Test Question</title>
   <link rel="stylesheet" href="style1.css">
   <link rel="stylesheet" href="css/all.css">
</head>
  <body>
  <div id="header5">
    <div class="container">
        <div class="menu-bar">
        <img src="images/ted.png" class="logo"> <br> Bicol University Polangui<br>File Desk:File Department Safety Keeper
        <ul id="sidemenu">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="content.php">Content Folders <i class="fas fa-caret-down"></i></a>

                <div class="dropdown-menu">
                    <ul>
                    <li><a href="memo.php">Memo</a></li>
                    <li><a href="tos.php">Curriculum Guide</a></li>
                    <li><a href="test-question.php">Syllabus</a></li>
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
    <h1>Syllabus from <br> First Semester <br> 2022-2023</h1>
  </div>
  <h3  style="color: black; background-color: #E6D1F2; align=left; text-indent: 2cm; font-size: 20px; color: blue;"><br> Click here to download<img src="images/arr.png" width="25px" height="15px" class="arr"> <br> <br></h3>
  <div style="color: black; background-color: #E6D1F2;">
  <li>
  <a href="BEED.php">BEED</a>
</li>
<li>
  <a href="BSED.php">BSED</a>
</li>
<li>
  <a href="BTLED.php">BTLED</a>
</li>


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