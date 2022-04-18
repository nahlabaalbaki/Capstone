<?php

include("../connection.php");

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
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Book an appointment</h3>
                                </div>
                                <div class="card-body">
                                    <form action="appointmentFormmethod.php" method="POST" enctype="multipart/form-data">
                                            <label for="inputGrooming">How would you like to pamper your pet?</label>        
                                        
                                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="type">
                                                    <option selected>Choose here</option>
                                                    <option value="nails">Trim their nails</option>
                                                    <option value="hair">Get a hair cut</option>
                                                    <option value="bath">Take a bath</option>
                                                </select>            
                                            
                                            <label for="inputDate">Which day are you free?(keep in mind that you are booking per week)</label>
                                           
                                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="date">
                                                    <option selected>Choose here</option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="wWednesdayed">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>
                                                    <option value="Saturday">Saturday</option>
                                                </select>
                                            
                                            <label for="inputTime">What time is preferable for you?(first come first serve)</label>
                                            
                                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg" name="time">
                                                    <option selected>Choose here</option>
                                                    <option value="10:00 AM - 12:00 PM">10:00 AM - 12:00 PM</option>
                                                    <option value="12:00 PM - 2:00 PM">12:00 PM - 2:00 PM</option>
                                                    <option value="2:00 PM - 4:00 PM">2:00 PM - 4:00 PM</option>
                                                    <option value="4:00 PM - 6:00 PM">4:00 PM - 6:00 PM</option>
                                                </select>
                                                
                                            
                                            <label for="inputComments">Is there anything you would like to let us know about your pet?</label>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputComments" type="text"
                                                    name="comments" placeholder="Elaborate about your pet"/>   
                                            </div>
                                            </div>
                                                                               
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn bot btn-block" name='submit'
                                                    type='submit' >Submit Form</button></div>
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