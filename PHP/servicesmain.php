<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/buttonCounter.php');  // PHP functions file

$page_id = 6;

session_start();

add_view($conn, $page_id);
?>

    
    <div class="wrapper" id="wrapper">

        <div class="pageHeader">
            <a class="logoLink" href="./index.php"><span class="" id="logo">
                    <p class="logoName">Skoleoplæringscenter</p>
                </span></a>
                <div><a><button class="backAndForward" onclick="history.back()">Back</button></a>
       <a class="AdminLogin" href="./LoginSite.php"><Button class="loginButton" <?php if((isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Login</Button></a>
       <a class="AdminLogin" href="./AdminSite.php"><Button class="loginButton" <?php if((!isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Admin</Button></a> 
       <a class="AdminLogin" href="../php/logout.php"><Button class="loginButton" <?php if((!isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Logout</Button></a> 
    </div>
        </div>

        <div class="mainSection">

            <div class="topContent">
                <h1>Uddannelseslinjer som TEC tilbyder</h1>
            </div>
              
            <div class="mainContent">
               
                <div class="imageDescription">
                    <img src="../img/motorcykelmekaniker.jpg" alt=""/>
                    <a href="./service-motor.php"><p>Motorcykelmekaniker</p></a>
                </div>
                <div class="imageDescription">
                    <img src="../img/itkurser.jpg" alt="" />
                    <a href="./service-data.php"><p>Data og Kommunikation</p></a>
                </div>
                <div class="imageDescription">
                    <img src="../img/maler.jpg" alt="" />
                    <a href="./service-byg.php"><p>Bygningsmaler</p></a>
                </div>
                <div class="imageDescription">
                    <img src="../img/vvs.jpg" alt="" />
                    <a href="./service-vvs.php"><p>VVS</p></a>
                </div>
                <div class="imageDescription" ></a>
                    <img src="../img/Lastvognsmekaniker.jpg" alt="" />
                    <a href="./service-last.php"><p>Lastvognsmekaniker</p></a>
                </div>
                <div class="imageDescription">
                    <img src="../img/automatiktekniker.png" alt="" />
                    <a href="./service-auto.php"><p>Automatiktekniker</p></a>
                </div>
            </div>
        </div>

        </div>
    </div>

</body>

</html>