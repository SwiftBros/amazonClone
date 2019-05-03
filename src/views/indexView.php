<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap stylesheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Note: External stylesheets must come after Bootstrap stylesheet -->
        <link href="CSS/indexView-styles.css" rel="stylesheet" type="text/css" />

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>AmazonClone: Online Shopping for Electronics, Apparel, Computers, Books, DVDs & more</title>
    </head>

    <body>
        <!-- Carousel slider -->
        <div class="carousel-slideshow">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 fluid" src="images/carousel-01.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 fluid" src="images/carousel-02.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 fluid" src="images/carousel-03.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 fluid" src="images/carousel-04.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 fluid" src="images/carousel-05.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 fluid" src="images/carousel-06.jpg" alt="Sixth slide">
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


        <!-- Container for 4 cards -->
        <div class="container-fluid">
            <div class="row home-cards">
                <div class="col-md-3 col-sm-3 col-xs-12 rounded-0 card">
                    <div class="row">
                        <div class="col-4">
                            <img src="images/profile.png" alt="profile_pic" class="img-fluid profile" />
                        </div>
                        <div class="col-8 pl-0">
                            <span class="card-title">Hi, Matthew</span>
                            <div class="card-text"><span style="color:#C35629">AmazonSmile</span> <span>donations</span></div>
                            <div class="card-text">generated: $0.00</div>
                        </div>
                    </div>

                    <div class="recommendations">Recommendations for you</div>
                    <img src="images/placeholder.png" alt="recommendations" class="img-fluid" />
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 rounded-0 card">
                    <label class="card-title">Watch the final season</label>
                    <img src="images/tyrion-fake.jpg" alt="Game of Thrones image" class="img-fluid" />
                    <div class="card-text">New episodes available every Sunday on HBO with Prime Video Channels</div>

                    <div class="card-text" style="padding-top: 20px; color:#0645AD">Watch with a subscription</div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 rounded-0 card">
                    <label class="card-title">Prime member deals</label>
                    <img src="images/prime-deals.jpg" alt="Prime member deals image" class="img-fluid" />
                    <div class="card-text">Deals and products just for Prime members</div>

                    <div class="card-text" style="padding-top: 20px; color:#0645AD">Learn more</div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 rounded-0 card">
                    <label class="card-title">Deal of the day</label>
                    <img src="images/headphones-01.jpeg" alt="Daily deal" class="img-fluid" />
                    <div class="card-text">Save up to 25% on Headphones</div>
                    <div class="card-text"><span class="daily-price">$25</span><div>
                    <div class="card-text" style="padding-top: 20px; color:#0645AD">See all deals</div>
                </div>
            </div>
        </div>

    </body>
</html>
