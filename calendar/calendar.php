<?php

// include("../connection.php");
require_once "../connection.php";
if(!isset($_SESSION["username"])){

    header("Location:../LoginPage/login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calendar</title>

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
                    <p class="section-title --shrt">Book your room!</p>
                    <div class="console-log">
                        <div class="log-content">
                            <div class="--noshadow" id="demoEvoCalendar"></div>
                            
                        </div>
                    </div>
                    <main>
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="prices">
                                <ul>
                                    <br><br><br>
                                    <li><h4>15$ per night</h4></li>
                                    <br>
                                    <li><h4>37$ per 3 nights</h4></li>
                                    <br>
                                    <li><h4>90$ per week</h4></li>
                                    <br>
                                    <li><h4>130$ per 10 nights</h4></li>
                                    <br>
                                    <li><h4>200$ per 15 nights</h4></li>
                                    <br>
                                    <li><h4>280$ per 20 nights</h4></li>
                                    <br>
                                    <li><h4>350$ per 25 nights</h4></li>
                                    <br>
                                    <li><h4>410$ per month</h4></li>
                                    <br><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Book a room for your lovely pet</h3>
                                </div>
                                <div class="card-body">
                                    <form action="calendarmethod.php" method="post">
                                        
                                        <label for="inputBoarding">Which room do you prefer for your pet?</label>

                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="type" id="type">
                                            <option selected>Choose here</option>
                                            <option value="multi">Multiple Room</option>
                                            <option value="single">Single Room</option>
                                        </select>

                                        <label for="inputBoarding">From Date:</label> 
                                        <input class="form-select form-select-lg mb-3" aria-label=".form-select-lg" id="startdate" type="date" name="dateFrom" />
                           
                                        
                                        <div class="form-group">
                                            <label for="pwd"> Till Date:</label>
                                            <input class="form-select form-select-lg mb-3" aria-label=".form-select-lg" id="enddate" type="date" name="dateTo"  />
                                            
                                        </div>

                                        <label for="inputComments">Any comments:</label>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputComments" type="text" name="inputComments" placeholder="Elaborate about your pet" />
                                        </div>
                                

                                        <div class="mt-4 mb-0">
                                            <!-- <input style="margin-left:9cm;" type="submit" name="submit" id="submit" class="button"> -->
                                            <button style="margin-left:8cm;" type="submit" name="submit" id="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                        
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        <p>Thank you for your time!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>
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
    <script>
        $("#startdate").on("change", function(){
        $("#enddate").attr("min", $(this).val());
        });

        $("#startdate").attr("min", new Date().toISOString().split("T")[0])

    </script>
</body>
</html>