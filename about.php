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
   <title>About</title>
   <link rel="stylesheet" href="style1.css">
   <link rel="stylesheet" href="css/all.css">
</head>
  <body>
  <div id="header_1">
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
    <h1>Keep Files Secured and Organized!</h1>
    <h3>Learn More!</h3>
  </div>
  <div class="back">
  <h2 style="color: black; font-size: 45px">About Us!</h2>

    <div class="a">
        <p style="color: black;">
        In file keeper, data is stored in files, the files are organized in a website, and the website has a organized folder of syllabus, TOS and Memos of the teaching department. To locate a file all you or your computer system need is the path from the folders.
<br>
            This is only intended to Teacher Education Department faculty staff and professors. All documents and files showed in this File Desk must be kept only in touch by the administrator and the staff also. This File Department Safety Keeper provides security to protect and kept the files privately.
        </p>

    </div>

        <div id="services">
        <div class="container">
            <h1 class="sub-title">Services</h1>
            <div class="services-list">
                <div>
                    <h2>Backing Up Files</h2>
                    <p>This website well contain the Syllabus, Memos and TOS for it to make sure that the files will be restored and can be easily access by the teacher education departement professors.</p>
                </div>
                <div>
                    <h2>Document Management System</h2>
                    <p>This website will manage the documentss from the teacher education department that will be transferred from hard copy into soft copy files to be put in different folders to be organized.</p>
                </div>
                <div>
                    <h2>Web Security Services</h2>
                    <p>This website is not just to back up files and store document files but to secure the files from virusses and other malfunction errors experiencing from the internet. It will contain a sign in and sign up for conforming that your are capable to access the web.</p>
                </div>
            </div>
            <a href="#" class="btn">See more</a>
        </div>
    </div>
</dib>

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