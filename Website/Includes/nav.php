<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/11/2015
 * Time: 10:37 PM
 */

?>
<nav class="navbar navbar-inverse" style="border-radius: 0px; margin-bottom: 0px;">
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
                <?php // If user connected
                if(isset($_SESSION['id']))
                {?>

                <?php
                }
                else // If no user connected
                {?>
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

                    <!-- Menu element 3-->
                    <li><a href="#">À propos</a></li>

                <?php
                }
                ?>
            </ul>

            <!-- Navbar  user menu -->
            <ul class="nav navbar-nav navbar-right">
                <?php // If user connected
                    if(isset($_SESSION['id']))
                    {?>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> <?php echo $_SESSION['username']?></a></li>
                        <li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
                    <?php
                    }
                    else // If no user connected
                    {?>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Incription</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                    <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>