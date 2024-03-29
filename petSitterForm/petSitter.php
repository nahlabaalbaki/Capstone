<?php

// include("../connection.php");
require_once "../connection.php";
if(!isset($_SESSION["username"])){

    header("Location:../LoginPage/login.php");
  }
  $query = "SELECT * FROM petsitters";
  $result = $connection->query($query);

  $query1 = "SELECT * FROM petsitters";
  $result1 = $connection->query($query1);
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pet Sitters</title>
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
          <li><a class="nav-link scrollto active" href="../LandingPage/index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="../LandingPage/index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="../LandingPage/index.php#services">Services</a></li>
          <li><a class="nav-link scrollto " href="../LandingPage/index.php#portfolio">Adoption</a></li>
          <li><a class="nav-link scrollto" href="../LandingPage/index.php#team">Team</a></li>
          <li><a class="nav-link scrollto" href="../LandingPage/index.php#contact">Contact</a></li>
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
                    <section id="team" class="team section-bg">
      <div class="container">
        <br>
        <div class="section-title">
          <h2>Team</h2>
          <p style="font-size:20px;">Our Team is very well experienced in dealing with pets! Scroll to know more about our team members.</p>
        </div>

        <div class="row">
        <?php while($row = $result->fetch_assoc()){ ?>
          <div class="col-lg-10 col-md-6 d-flex align-items-stretch">
            <div class="member">
                <br><br>
              <h4><?php echo $row["name"];  ?></h4>
              <span>Availability:<?php  echo $row["availability"];  ?></span>
              <br>
              <span>Phone Number:<?php  echo $row["phone_number"];  ?></span>
              <p>
              <?php echo $row["experience"];  ?>
              </p>
              <img src="../Images/<?php echo $row["image"];  ?>">
            </div>
          </div>
          <br>
          <?php } ?>

        </div>
        
    </section><!-- End Team Section -->
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Choose your pet sitter for today!</h3>
                                </div>
                                <div class="card-body">
                                    <form action="petSitterMethod.php" method="POST" enctype="multipart/form-data">
                                        <h2>10$ per hour</h2>
                                        <br>
                                    <label for="sitter"><h3>Who would you like to pet sit?</h3></label>
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="name" id="name" required>
                                        <option selected>Choose here</option>
                                        <?php
                                            if ($result1->num_rows > 0) {
                                                while ($row1 = $result1->fetch_assoc()) {
                                                echo '<option value=' . $row1['name'] . '>' . $row1['name'] . '</option>';
                                                
                                                }
                                            }
                                            ?>
                                        
                                    </select>
                                    <label for="date"><h3>Which day would you like to bring your pet?</h3></label>
                                    <input class="form-select form-select-lg mb-3" aria-label=".form-select-lg" type="date" name="date" Required>
                                    <label for="duration"><h3>How long would you like to leave your pet?</h3></label>
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="duration" id="duration" Required>
                                        <option selected>Choose here</option>
                                        <option value="1">1 hour</option>
                                        <option value="2">2 hours</option>
                                        <option value="3">3 hours</option>
                                    </select>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn bot btn-block" name='submit'
                                                    type='submit' value="Upload" >Submit</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><p>Thank you for your time!</p></div>
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