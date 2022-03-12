<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
   <!-- CSS only -->
   <link rel="stylesheet" href="./style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo">Noman</div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="services">
                    <a href="/">Course</a>
                    <!-- DROPDOWN MENU -->
                    <ul class="dropdown">
                        <li><a href="/">HTML</a></li>
                        <li><a href="/">CSS</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="display.php">Dashboard</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signUp.php">Sign Up</a></li>

            </div>
        </ul>
    </nav>

    <!-- header section -->
    <div class="container text-white">
        <section id="feedback">
            <div class="section-title">
                <h3 class="text-center">Feedback</h3>
                <hr class="hr-style">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                item1
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, laboriosam!</p>
                                <img class="feedback-image rounded-circle" src="./images/noman.jfif" alt="">
                            </div>
                            <div class="carousel-item">
                               item2
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, laboriosam!</p>
                                <img class="feedback-image rounded-circle" src="./images/noman.jfif" alt="">
                            </div>
                            <div class="carousel-item">
                                item3
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, laboriosam!</p>
                                <img class="feedback-image rounded-circle" src="./images/noman.jfif" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Gallery section -->
    <div>
        <h1 style="margin: 2%; text-align: center;">Gallery</h1>
        <div class="grid-gallery">
            <div class="gallery" style="margin-left:100px">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="./images/image1.jfif" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                <a target="_blank" href="img_forest.jpg">
                    <img src="./images/image2.jfif" alt="Forest" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery">
                <a target="_blank" href="img_lights.jpg">
                    <img src="./images/image3.jfif" alt="Northern Lights" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>

            <div class="gallery" style="margin-left:100px ;margin-top: 20px;">
                <a target="_blank" href="img_mountains.jpg">
                    <img src="./images/image4.jfif" alt="Mountains" width="600" height="400">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="gallery" style="margin-top: 20px;">
                <iframe width="380" height="305" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
            <div class="gallery" style="margin-top: 20px;">
                <iframe width="380" height="305" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>

        </div>
    </div>

    <!-- notice  section -->
    <table style="margin-top:5%">
        <tr>
            <th style="padding-left: 100px;">Date</th>
            <th style="padding-left: 400px;">Notice</th>
            <th style="padding-left: 400px;">Download</th>
        </tr>
        <tr>
            <td style="padding-left: 100px;">12.09.2021</td>
            <td style="padding-left: 400px;">Notice page here</td>
            <td style="padding-left: 400px; color: red">Click Here</td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">12.09.2021</td>
            <td style="padding-left: 400px;">Notice page here</td>
            <td style="padding-left: 400px; color: red">Click Here</td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">12.09.2021</td>
            <td style="padding-left: 400px;">Notice page here</td>
            <td style="padding-left: 400px; color: red">Click Here</td>
        </tr>
        <tr>
            <td style="padding-left: 100px;">12.09.2021</td>
            <td style="padding-left: 400px;">Notice page here</td>
            <td style="padding-left: 400px; color: red">Click Here</td>
        </tr>
    </table>

    <!-- footer  section -->
    <footer style="margin-top: 10%; text-align: center;">
        <h1>Copyright &copy; Noman</h1>
    </footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>