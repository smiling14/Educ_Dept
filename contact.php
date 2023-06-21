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
   <title>Contact</title>
   <link rel="stylesheet" href="style1.css">
   <link rel="stylesheet" href="css/all.css">
</head>
  <body>
  <div id="header_3">
    <div class="container">
        <div class="menu-bar">
        <img src="images/ted.png" class="logo"><br> Bicol University Polangui<br>File Desk:Department Safety Keeper
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
    </div> <br> <br> <br> <br> <br>
        <h4>For more Inquiries and Queries</h4>
        <h1 style="font-family:">PLEASE CONTACT <br> US ON!</h1>
  </div>

    <div id="contact">
        <div class="container" style="background-color: white;">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact us</h1>
                    <p><i class="fas fa-paper-plane"></i>valeriepalima14@gmail.com</p>
                    <p><i class="fas fa-paper-plane"></i>suyamheljan04@gmail.com</p>
                    <p><i class="fas fa-phone-square-alt"></i>091583831095</p>
                    <div class="social-icons">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="contact-right">
                    <form>
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <p>Copyright <i class="fa-solid fa-copyright"></i>valerie palima and mheljan suya</p> 
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