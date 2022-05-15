<?php

include("../connection.php");

if(!isset($_SESSION["username"])){

    header("Location:../LoginPage/login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Evo Calendar</title>

    <meta charset="utf-8">
    <meta name="description" content="Simple Modern-looking Event Calendar Plugin">
    <meta name="keywords" content="jQuery, Plugin, Event, Calendar, EvoCalendar">
    <meta name="author" content="Edlyn Villegas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" href="favicon.png">

    <!-- CSS -->
    
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./evo-calendar/css/evo-calendar.min.css">
    <link rel="stylesheet" type="text/css" href="./evo-calendar/css/evo-calendar.css">

    <link rel="stylesheet" type="text/css" href="./demo/demo.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container clearfix">
            <h1 class="title" data-go="#top" title="Oh, hi! :)"><span>Purr-fect</span>Pets</h1>
            <ul>
                <li>
                    <a href="../LandingPage/index.php">Home</a>
                </li>
                <li>
                    <a href="../LandingPage/index.php#about">About</a>
                </li>
                <li>
                    <a href="../LandingPage/index.php#services">Services</a>
                </li>
                <li>
                    <a href="../LandingPage/index.php#portfolio">Adoption</a>
                </li>
                <li>
                    <a href="../LandingPage/index.php#team">Team</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="main-container">
            <section id="demos">
                <div class="section-content">
                    <p class="section-title --shrt">Book your appointment!</p>
                    <div class="console-log">
                        <div class="log-content">
                            <div class="--noshadow" id="demoEvoCalendar"></div>
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-action" id="addBtn">ADD EVENT</button>
                        <button class="btn-action" id="removeBtn" disabled>REMOVE EVENT</button>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer id="footer">
        <div class="container">
          <h3>Purr-fect pets</h3>
          <p>People trust us, pets love us.</p>
          <div class="social-links">
            <a href="https://twitter.com/_reinaaaa_" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/_reiinaaa_/" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
          <div class="copyright">
            &copy; Copyright <strong><span>Purr-fect pets</span></strong>. All Rights Reserved
          </div>
          
        </div>
      </footer>

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="./evo-calendar/js/evo-calendar.min.js"></script>
    <script src="./demo/demo.js"></script>
</body>
</html>