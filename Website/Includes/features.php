<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 5:20 AM
 */

?>

<style>

/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
    padding-bottom: 40px;
    color: #5a5a5a;
}

/* Featurettes
------------------------- */

.featurette-divider {
margin: 80px 0; /* Space out the Bootstrap <hr> more */
}
.featurette {
padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
overflow: hidden; /* Vertically center images part 2: clear their floats. */
}
.featurette-image {
margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
}

/* Give some space on the sides of the floated elements so text doesn't run right into it. */
.featurette-image.pull-left {
margin-right: 40px;
}
.featurette-image.pull-right {
margin-left: 40px;
}

/* Thin out the marketing headings */
.featurette-heading {
font-size: 50px;
font-weight: 300;
line-height: 1;
letter-spacing: -1px;
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


<!-- START THE FEATURETTES -->
<div class="container">
    <hr class="featurette-divider">

    <div class="featurette">
        <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png">
        <h2 class="featurette-heading">À propos <span class="muted">de Virtualgaze.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>

    <hr class="featurette-divider">

    <div class="featurette">
        <img class="featurette-image pull-left" src="../assets/img/examples/browser-icon-firefox.png">
        <h2 class="featurette-heading">Nous <span class="muted">contacter.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>

    <hr class="featurette-divider">
</div>