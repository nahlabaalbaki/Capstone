<?php

include("../connection.php");

if(!isset($_SESSION["username"])){

    header("Location:../LoginPage/login.php");
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Member</title>
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a class="logo">Purr-fect Pets</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
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
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Add Member Form</h3>
                                </div>
                                <div class="card-body">
                                    <form action="addappmethod.php" method="POST" enctype="multipart/form-data">       

                                            <label>Date</label>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="date" type="date"
                                                    name="date" placeholder="Date"
                                                    Required />            
                                            </div>

                                            <label>Time</label>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="time" type="text"
                                                    name="time" placeholder="Time"
                                                    Required />
                                            </div>

                                            <label>Availability</label>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="available" type="number"
                                                    name="available" placeholder="Available"
                                                    Required />
                                                
                                            </div>
                                            
                                        
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn bot btn-block" name='submit'
                                                    type='submit' value="Upload" >Add Slot</a></button></div>
                                        </div>
                                    </form>
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
                        <a href="https://www.instagram.com/_reiinaaa_/" class="instagram"><i
                                class="bx bxl-instagram"></i></a>
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
</body>

</html>