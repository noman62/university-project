<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        /* crusel section */
        #feedback {
            background-color: #0d0442;
            padding: 7% 10%;
        }

        .hr-style {
            border: 5px dotted white;
            border-bottom: none;
            width: 50px;
        }

        .carousel-item {
            padding: 5% 15%;
            text-align: center;
            font-style: italic;
        }

        .feedback-image {
            width: 120px;
            height: auto;
        }
    </style>
</head>

<body>
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
                                NSTU
                                <p>Information and communication engineering</p>
                                <img class="feedback-image rounded-circle" src="./images/noman.jfif" alt="">
                                <h1>Asadullah Al Noman</h1>
                                <h3>ASH1811048M</h3>
                            </div>
                            <div class="carousel-item">
                                NSTU
                                <p>Information and communication engineering</p>
                                <img class="feedback-image rounded-circle" src="./images/noman.jfif" alt="">
                                <h1>Asadullah Al Noman</h1>
                                <h3>ASH1811048M</h3>
                            </div>
                            <div class="carousel-item">
                                NSTU
                                <p>Information and communication engineering</p>
                                <img class="feedback-image rounded-circle" src="./images/noman.jfif" alt="">
                                <h1>Asadullah Al Noman</h1>
                                <h3>ASH1811048M</h3>
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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>