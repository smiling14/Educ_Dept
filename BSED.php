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
        <img src="images/ted.png" class="logo"><br>Bicol University Polangui<br> File Desk:File Department Safety keeper
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
    <br> <br> <br> <br> <br>
    <h2 align="left" style="text-indent: 1cm; font-size: 70px; color: #5526c9;">BSED </h2>
    <h2 align="left" style="text-indent: 1cm; color: #5526c9;"> 2022-2023 <h2>
    <h2 align="left" style="text-indent: 1cm; color: #5526c9;"> First semester </h2>
    <h2 align="left" style="text-indent: 1cm; color: #5526c9;">  Syllabus</h2>
  </div>
  <h3  style="color: black; background-color: #E6D1F2; align=left; text-indent: 2cm; font-size: 20px; color: blue;"><br> Click here to download<img src="images/arr.png" width="25px" height="15px" class="arr"> <br> <br></h3>
  <div style="color: black; background-color: #E6D1F2;">
    <li><a href="Educ 1- Child and Adolescent learning and learners principles.pdf">Educ 1- Child and Adolescent learning and learners principles</a></li>
    <li><a href="Educ 1-Field Study 1.pdf">Educ 1-Field Study 1</a></li>
    <li><a href="Educ 2-teaching profession_pescuela.pdf">Educ 2-teaching profession_pescuela</a></li>
    <li><a href="Educ 10- Technology For Teaching and Learning 1.pdf">Educ 10- Technology For Teaching and Learning 1</a></li>
    <li><a href="Educ 13- Field Study 2 Participation and Teaching Assistanship.pdf">Educ 13- Field Study 2 Participation and Teaching Assistanship</a></li>
    <li><a href="Educ10- Technology for Teaching And Learning 1.pdf">Educ10- Technology for Teaching And Learning 1</a></li>
    <li><a href="Educ12- Field study 1.pdf">Educ12- Field study 1</a></li>
    <li><a href="Education 6- Building and Enhancing New Literacies across the Curriculum.pdf">Education 6- Building and Enhancing New Literacies across the Curriculum</a></li>
    <li><a href="Eng Ed 6-Mythology and Folklore.pdf">Eng Ed 6-Mythology and Folklore</a></li>
    <li><a href="Eng Ed 20-Language Education Research.pdf">Eng Ed 20-Language Education Research</a></li>
    <li><a href="Fil 21- KOMFIL.pdf">Fil 21- KOMFIL</a></li>
    <li><a href="FIL 21-KOMFIL.pdf">FIL 21-KOMFIL</a></li>
    <li><a href="GEC 11-Understanding the self.pdf">GEC 11-Understanding the self</a></li>
    <li><a href="GEC 13- The Contemporary World( BSED Eng ).pdf">GEC 13- The Contemporary World( BSED Eng )</a></li>
    <li><a href="GEC 13- The Contemporary World.pdf">GEC 13- The Contemporary World</a></li>
    <li><a href="GEC11- Understanding the self.pdf">GEC11- Understanding the self</a></li>
    <li><a href="Math Ed 6-Elementary Mathematics and Probability.pdf">Math Ed 6-Elementary Mathematics and Probability</a></li>
    <li><a href="Math Ed 20-research in math.pdf">Math Ed 20-research in math</a></li>
    <li><a href="PE 21- Fundamentals of Games and Sports.pdf">PE 21- Fundamentals of Games and Sports</a></li>
</div>
</div>

</div>
<li style="color: black; background-color: #D1D1F2;"><a href="content.php">Back</a>
<div>

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