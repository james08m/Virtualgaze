<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/11/2015
 * Time: 10:37 PM
 */

?>
<nav class="navbar navbar-inverse" style="border-radius: 0px">
    <div class="container-fluid">

        <!-- Nav bar title -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Virtualgaze</a>
        </div>

        <!-- Navbar  main menu -->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

                <!-- Menu element 1-->
                <li class="active"><a href="#">Accueil</a></li>

                <!-- Dropdown menu element 2 -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>

                <!-- Menu element 1-->
                <li><a href="#">À propos</a></li>
            </ul>

            <!-- Navbar  user menu -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>