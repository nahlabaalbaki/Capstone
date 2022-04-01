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
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary" >
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="loginmethod.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> 
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <a class="btn btn-primary" href="index.html" type="submit" name="submit" >Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light">
                    <div class="container2 container-fluid px-4">
                       
                        <div class="social">
                            <a class="insta" href="https://www.instagram.com/_reiinaaa_/" target="_blank">
                                <i class="fab fa-instagram"></i></a>
                            <a class="twitter" href="https://twitter.com/_reinaaaa_" target="_blank">
                                    <i class="fab fa-twitter"></i></a>
                            <a class="facebook" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            
                
                        </div>
                    
                
                    
                    <div class="info">
                        <p class="us">About us</p>
                        <div class="info1 infoAll">
                            <i class="fas fa-phone telephone"></i>
                            <p class="num">+961 03 666 666</p>
                        </div>
                        <div class="info2 infoAll">
                            <i class="far fa-clock time"></i>
                            <p class="sched">Mon-Sat: 8AM TILL 9PM</p>
                        </div>
                        <div class="info3 infoAll">
                            <i class="fa fa-map-marker-alt loc"></i>
                            <p class="spot">Beirut-Hamra Street</p>
                        </div>
                    </div>
                    <div class="em">
                        <a class="email" href="mailto: reina.bitar@lau.edu" target="_blank"><i
                            class="far fa-envelope"></i></a>
                            <p class="mymail">reina.bitar@lau.edu</p>
                    </div>
                    </div>
                
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
