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
   <title>Memo</title>
   <link rel="stylesheet" href="style1.css">
   <link rel="stylesheet" href="css/all.css">
</head>
  <body>
  <div id="header">
    <div class="container">
        <div class="menu-bar">
        <img src="images/ted.png" class="logo">
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
  </div>
    <li><a href="syllabus.pdf">01.pdf</a></li>
    <li><a href="syllabus1.pdf">02.pdf</a></li>
    <li><a href="syllabus2.pdf">03.pdf</a></li>
    <li><a href="syllabus3.pdf">04.pdf</a></li>
    <li><a href="syllabus4.pdf">05.pdf</a></li>
    <li><a href="syllabus5.pdf">06.pdf</a></li>
    <li><a href="syllabus6.pdf">07.pdf</a></li>
    <li><a href="syllabus7.pdf">08.pdf</a></li>
    <li><a href="syllabus8.pdf">09.pdf</a></li>
    <li><a href="syllabus9.pdf">010.pdf</a></li>
    <li><a href="syllabus10.pdf">011.pdf</a></li>
    <li><a href="syllabus11.pdf">012.pdf</a></li>
    <li><a href="syllabus12.pdf">013.pdf</a></li>
    <li><a href="syllabus13.pdf">014.pdf</a></li>
    <li><a href="syllabus14.pdf">015.pdf</a></li>
</div>
<a href="test-question.php">Back</a>


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