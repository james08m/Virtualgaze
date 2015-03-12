<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/11/2015
 * Time: 10:45 PM
 */
?>
<style>
    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
margin-bottom: 60px;
}

.carousel .container {
position: relative;
z-index: 9;
}

.carousel-control {
height: 80px;
margin-top: 0;
font-size: 120px;
text-shadow: 0 1px 1px rgba(0,0,0,.4);
background-color: transparent;
border: 0;
z-index: 10;
}

.carousel .item {
height: 500px;
}
.carousel img {
position: absolute;
top: 0;
left: 0;
min-width: 100%;
height: 500px;
}

.carousel-caption {
background-color: transparent;
position: static;
max-width: 550px;
padding: 0 20px;
margin-top: 200px;
}
.carousel-caption h1,
.carousel-caption .lead {
margin: 0;
line-height: 1.25;
color: #fff;
text-shadow: 0 1px 1px rgba(0,0,0,.4);
}
.carousel-caption .btn {
margin-top: 10px;
}
    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (max-width: 979px) {

        .container.navbar-wrapper {
            margin-bottom: 0;
            width: auto;
        }
        .navbar-inner {
            border-radius: 0;
            margin: -20px 0;
        }

        .carousel .item {
            height: 500px;
        }
        .carousel img {
            width: auto;
            height: 500px;
        }

        .featurette {
            height: auto;
            padding: 0;
        }
        .featurette-image.pull-left,
        .featurette-image.pull-right {
            display: block;
            float: none;
            max-width: 40%;
            margin: 0 auto 20px;
        }
    }


    @media (max-width: 767px) {

        .navbar-inner {
            margin: -20px;
        }

        .carousel {
            margin-left: -20px;
            margin-right: -20px;
        }
        .carousel .container {

        }
        .carousel .item {
            height: 300px;
        }
        .carousel img {
            height: 300px;
        }
        .carousel-caption {
            width: 65%;
            padding: 0 70px;
            margin-top: 100px;
        }
        .carousel-caption h1 {
            font-size: 30px;
        }
        .carousel-caption .lead,
        .carousel-caption .btn {
            font-size: 18px;
        }

        .marketing .span4 + .span4 {
            margin-top: 40px;
        }

        .featurette-heading {
            font-size: 30px;
        }
        .featurette .lead {
            font-size: 18px;
            line-height: 1.5;
        }

    }
</style>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
        <div class="item active">
            <img src="Images/carousel1.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Gardez un oeil</h1>
                    <p class="lead">Restez au courrant en permanance des activitées des utilisitateurs sur vos appareils en installant Virtualgaze sur ceux-ci</p>
                    <a class="btn btn-large btn-primary" href="#">Inscription</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="Images/carousel2.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Plateforme web</h1>
                    <p class="lead">Connectez-vous ici même avec votre compte pour accèder aux informations de vos ordinateurs en tout temps</p>
                    <a class="btn btn-large btn-primary" href="#">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="Images/carousel3.jpg" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->