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
   <title>Home</title>
   <link rel="stylesheet" href="style1.css">
   <link rel="stylesheet" href="css/all.css">

   <style> 
  
    </style>
</head>
  <body>
  <div id="header">
  
 
    <div class="container">
        <div class="menu-bar">
        <img src="images/ted.png" class="logo"> <p><br> Bicol University Polangui<br>File Desk:File Department Safety Keeper</p>

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

            <li><a href="contact.php">Contact</a></li>
            <li><a href="login_form.php">Logout</a></li>
            <i class="fa-solid fa-square-xmark" onclick="closemenu()"></i>
        </ul>
        <i class="fa-solid fa-bars" onclick="openmenu()"></i>
        </div>
           
    </div>
    <h1 style="font-family: Avenir; text-indent: 2cm ">Conversion </h1>
    <h3  align="left">of Document Files
        into Digital</h3>
  </div>
  
    <div class="back">
    <div class="slide-text">
    <h3 align="left">BU QUALITY POLICY</h3> </br>
        <p style="font-family: Arial; text-indent: 2cm;">Bicol University commits to continually strive for excellence in instruction, research and extension by meeting the highest level of clientele satisfaction and adhering to quality </p>
        <p style="font-family: Arial; text-indent: 2cm;"> standards and applicable statutory and regulatory requirements. </p> </br>
    <h3 align="left">VISSION</h3> </br>
        <p style="font-family: Arial; text-indent: 2cm;"> A University for humanity characterized by productive scholarship, transformative, leadership, collaborative character for sustainable socities.</p>	
</div>
<br> 
<br>
<div class="back">
  <h2 style="font-family: Georgia; color: black;">What is File Department Safety Keeper?</h2>
</div> </br>
  <div class="a">
    <p style="font-family: Tahoma; color: black; padding-left: 20px; padding-right: 10px; text-spacing: 2px;">This File Safety Keeper provides secure and organized folders that can help mostly the faculty staff in Teacher Education Department. File storage essentially means that files and documents are recorded digitally and saved in a storage system for future use. File storage makes it easy to back up files for safekeeping and quick recovery in the event of an unexpected computing crash or cyber-attack. File safe keeper will be used to organize and store data on a computer hard drive or on network-attached storage device.Storing information digitally lets you track data more easily and can find specific record with search tools build into the document management system. These systems also let you sort data to secure and find it easily.</p>
</br>
    <p style="font-family: Tahoma; color: black; padding-left: 20px; padding-right: 10px; text-spacing: 2px;">File Safety Keeper is storage for documented files in the Teacher Education Department that turns into digitalize files and organized in a file that the TED faculty staff can only access. The Digitalized files rely only on the files located on the office of the department head.</p>
<br><br>
    <p style="font-family: Tahoma; color: black; padding-left: 20px; padding-right: 10px; text-spacing: 2px;">File safe keepers typically use advanced encryption techniques to protect the files they contain. Encryption is a process of converting information into an unreadable format, which can only be accessed by those who have the appropriate decryption key or password. Some file safe keepers also offer additional security features such as two-factor authentication and biometric authentication to further enhance the protection of your data.</p>
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