<?php
/**
 * Created by PhpStorm.
 * User: J08M
 * Date: 3/12/2015
 * Time: 6:12 AM
 */

    if(!isset($_SESSION['id']))
    {
        header("Location : /index.php");
    }
?>


<ul class="well nav nav-pills nav-stacked col-sm-2" style="border-radius: 0px;">
    <li class="nav-header"><span class="glyphicon glyphicon-th"></span> Ordinateurs <span class="badge"><?php echo GetNbComputers($_SESSION['com_key']);?></span></li>
    <?php
    $computers = GetComputers($_SESSION['com_key']);
    foreach($computers as $e)
    {?>
        <!-- Ordinateur -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"></span><?php echo " " . $e[2] . " " ; ?><span class="badge"><?php echo GetNbUsers($e[0])?></span><span class="caret"></span></a>
            <ul class="dropdown-menu">
                <?php
                $users = GetUsers($e[0]);
                foreach($users as $i)
                {?>
                    <li><a href="log.php?username_id=<?php echo $i[0];?>"><span class="glyphicon glyphicon-user"></span> <?php echo $i[2];?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
    <?php
    }

    ?>
</ul>