<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
        .carousel-caption {
            top: 35%;
            transform: translateY(-100%);
            bottom: initial;

        }

        #img1 {
            filter: blur(8px);
            -webkit-filter: blur(8px);

        }

        #img2 {
            filter: blur(8px);
            -webkit-filter: blur(8px);

        }

        #img3 {
            filter: blur(8px);
            -webkit-filter: blur(8px);

        }

        .tales {
            width: 100%;
        }

        .carousel-inner {
            width: 100%;
            max-height: 720px !important;
        }

        .card-group{
            padding: 16px;
        }
    
        .login-img{
           
            height: 300px;
            width: 300px;
            display: inline-block;
        }
        .form-group{
            padding: 16px;
            display: inline-block;
        }

        .login{
            width: 100%;
            text-align: center;
        }
    
    </style>


</head>

<body>

    <nav class="navbar navbar-expand-lg p-4 navbar sticky-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Course
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Web Development</a>
                        <a class="dropdown-item" href="#">Mobile Development</a>
                        <a class="dropdown-item" href="#">Data Science</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Eligibility Criteria </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
            <button type="button" class="btn btn-light">Sign In</button>
        </div>
    </nav>

    <div class="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/img1.jpg" alt="First slide" id="img1">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Web Development</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, pariatur consequuntur.
                            Dolorem non, impedit laborum tenetur quibusdam nesciunt accusamus animi ullam, nostrum
                            voluptas, sint odit exercitationem ipsa veritatis excepturi! Placeat.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/img2.jpg" alt="Second slide" id="img2">

                    <div class="carousel-caption d-none d-md-block">
                        <h1>Mobile Development</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, pariatur consequuntur.
                            Dolorem non, impedit laborum tenetur quibusdam nesciunt accusamus animi ullam, nostrum
                            voluptas, sint odit exercitationem ipsa veritatis excepturi! Placeat.</p>
                    </div>


                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/img3.jpg" alt="Third slide" id="img3">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Data Science</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi, pariatur consequuntur.
                            Dolorem non, impedit laborum tenetur quibusdam nesciunt accusamus animi ullam, nostrum
                            voluptas, sint odit exercitationem ipsa veritatis excepturi! Placeat.</p>
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <p class="text-center h1 bg-dark text-light p-2">Our Courses</p>


    <div class="card-group p-5">

        <div class="card p-3" style="width: 18rem;">
            <img class="card-img-top" src="images/img1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Web Development</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="enroll.php" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>
    
          <div class="card p-3" style="width: 18rem;">
            <img class="card-img-top" src="images/img2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Mobile Development</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="enroll.php" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>
    
          <div class="card p-3" style="width: 18rem;">
            <img class="card-img-top" src="images/img3.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Data Science</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="enroll.php" class="btn btn-primary">Enroll Now</a>
            </div>
          </div>

    </div>

    <p class="text-center h1 bg-dark text-light p-2">Sign In</p>

    <div class="login">

        <img class="login-img" src="images/login.png" alt="">

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input name="" class="form-control" placeholder="Email" type="email">
            </div> <!-- input-group.// -->
            </div> <!-- form-group// -->
            <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                 </div>
                <input class="form-control" placeholder="******" type="password">
            </div> <!-- input-group.// -->
            </div> <!-- form-group// -->
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div> <!-- form-group// -->
            <a href="#" class="btn">Forgot password?</a>
        

    </div>

    <section class="">
        <!-- Footer -->
        <footer class="bg-secondary text-white">
          <!-- Grid container -->
          <div class="container p-4">
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">About Us</h5>
      
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                  molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                  aliquam voluptatem veniam, est atque cumque eum delectus sint!
                </p>
              </div>
              <!--Grid column-->
      
              <!--Grid column-->
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
      
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-white">Web Development</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white">Mobile Development</a>
                  </li>
                  <li>
                    <a href="#!" class="text-white"><Datag>Data Science</Datag></a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
      

      
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="#">Debasish Halder</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </section>

   

   






    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>