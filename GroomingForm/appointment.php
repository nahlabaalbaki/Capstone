<?php

include("../connection.php");


if(!isset($_SESSION["username"])){

    header("Location:../LoginPage/login.php");
  }
$query = "SELECT DISTINCT date FROM appointment WHERE date>CURRENT_DATE and date<=CURRENT_DATE+7";

$result = $connection->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Booking Appoitments</title>
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="css/styles.css" />
</head>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a class="logo" href="index.html">Purr-fect Pets</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="../LandingPage/index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="../LandingPage/index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="../LandingPage/index.php#services">Services</a></li>
          <li><a class="nav-link scrollto " href="../LandingPage/index.php#portfolio">Adoption</a></li>
          <li><a class="nav-link scrollto" href="../LandingPage/index.php#team">Team</a></li>
          <li><a class="nav-link scrollto" href="../FeedbackPage/feedback.php">Feedback</a></li>
          <li><a class="getstarted scrollto" href="../Logout/logout.php">Logout</a></li>
        </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                            <div class="prices">
                                <ul>
                                    <br><br><br><br>
                                    <li><h4>10$ for Hair Cut</h4></li>
                                    <br><br><br><br>
                                    <li><h4>5$ for Nail Trim</h4></li>
                                    <br><br><br><br>
                                    <li><h4>15$ for Bath</h4></li>
                                    <br><br><br><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Book an appointment</h3>
                                </div>
                                <div class="card-body">
                                    <form action="appointmentFormmethod1.php" method="post">
                                        <label for="inputGrooming">How would you like to pamper your pet?</label>

                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="type" id="type">
                                            <option selected>Choose here</option>
                                            <option value="nails">Trim their nails</option>
                                            <option value="hair">Get a hair cut</option>
                                            <option value="bath">Take a bath</option>
                                        </select>

                                        <label for="inputGrooming">Select Day:</label>
                                        <select name="date" class="form-control" onchange="FetchState(this.value)" required>
                                            <option value="">Select Date</option>
                                            <?php
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value=' . $row['date'] . '>' . $row['date'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                
                                        <div class="form-group">
                                            <label for="pwd">Time</label>
                                            <select name="time" id="time" class="form-control">
                                                <option>Select time</option>
                                            </select>
                                        </div>

                                        <label for="inputComments">Details</label>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputComments" type="text" name="inputComments" placeholder="Elaborate about your pet" />
                                        </div>
                                

                                        <div class="mt-4 mb-0">
                                            <!-- <input style="margin-left:9cm;" type="submit" name="submit" id="submit" class="button"> -->
                                            <button style="margin-left:8cm;" type="submit" name="submit" id="submit">Submit</a></button>
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
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light" id="footer">
            <div class="container px-4">

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
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript">
        function FetchState(id) {
            $('#time').html('');
            $.ajax({
                type: 'post',
                url: 'appointment.php',
                data: {
                    date_id: id
                },
                success: function(data) {
                    $('#time').html(data);
                }

            })
        }
    </script>
</body>
<link href="css/styles.css" rel="stylesheet" />

</html>

<!-- The function below is responsibile for cascading the comboboxes using AJAX -->

<?php
include_once '../connection.php';

if (isset($_POST['date_id'])) {
    $query = "SELECT * FROM appointment where available=1 and date='" . $_POST['date_id'] . "'";
    $result = $connection->query($query);
    if ($result->num_rows > 0) {
        echo '<option value="">Select Time</option>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value=' . $row['time'] . '>' . $row['time'] . '</option>';
        }
    } else {

        echo '<option>No Time Found!</option>';
    }
}


?>