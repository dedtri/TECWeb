<?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/buttonCounter.php');  // PHP functions file

$page_id = 1;

add_view($conn, $page_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITSupport</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="wrapper" id="wrapper">
        <header class="pageHeader">
            <a Class="logoLink" href="./index.php"><p class="logoName">Skoleoplæringscenter</p></a>
            <a class="AdminLogin" href="./LoginSite.php"><Button class="loginButton">Login</Button></a>
        </header>
        <p class="ITFagTitle">IT-Supporter</p>
        <div class="ITFagSite">
            <div class="LeftSide">
                <div style="display:inline-block;vertical-align:top;">
                    <img class="ImgSupport" src="../img/Support.jpg" alt="">
                </div>
            </div>
            <div class="RightSide">
                <div style="display:inline-block;" >
                    <p>Varighed: 3 år (inkl. grundforløb 1)</p><br>
                    <br>
                    <p>Som it-supporter står du altid klar med bred og opdateret it-viden, for det er dig, der bliver ringet efter, når uheldet er ude.</p>
                    <p>Du supporterer brugere, hvis fx computere eller netværk driller, og du har også kendskab til sikkerhedsløsninger.</p>     
                    <p>Du er med andre ord en it-ambulance, der rykker ud og redder dagen, når der er tekniske problemer.</p>
                </div>
            </div>

        </div>
    </div>      
</body>