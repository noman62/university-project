<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    

    <!-- header section -->
    <div class="header">
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
                <li><a href="cal.php">Calculator</a></li>
                <li><a href="registration.php">Registration</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signUp.php">Sign Up</a></li>

            </div>
        </ul>
    </nav>
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

            <div class="gallery" style="margin-top: 20px;margin-left:100px;">
                <iframe width="380" height="305" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
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

    <table style="width:82%;margin-left:100px;margin-top:3%;">
        <tr>
            <th>Date</th>
            <th>Notice</th>
            <th>Download</th>
        </tr>
        <tr>
            <td>12.09.2021</td>
            <td>Notice page here</td>
            <td>Click Here</td>
        </tr>
        <tr>
            <td>12.09.2021</td>
            <td>Notice page here</td>
            <td>Click Here</td>
        </tr>
        <tr>
            <td>12.09.2021</td>
            <td>Notice page here</td>
            <td>Click Here</td>
        </tr>
    </table>

    <!-- Live news -->
    <div>
        <marquee width="60%" direction="right" height="100px">
            This is a sample scrolling text that has scrolls texts to right.
        </marquee>
    </div>
    <!-- footer  section -->
    <footer style="margin-top: 10%; text-align: center;">
        <h1>Copyright &copy; Noman</h1>
    </footer>

</body>

</html>