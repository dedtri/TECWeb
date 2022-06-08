<?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/buttonCounter.php');  // PHP functions file

$page_id = 2;

add_view($conn, $page_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmering</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<script type="text/javascript"></script>

<body>
    <div class="wrapper" id="wrapper">
        <header class="pageHeader">
            <a Class="logoLink" href="./index.php"><p class="logoName">TEC</p></a>
            <a class="AdminLogin" href="./LoginSite.php"><Button class="loginButton">Skoleoplæringscenter</Button></a>
        </header>
        <p class="ITFagTitle">Programmering</p>
        <div class="ITFagSite">
            <div class="LeftSide">
                <div style="display:inline-block;vertical-align:top;">
                    <img class="ImgSupport" src="../img/Programming.jpg" alt="">
                </div>
            </div>
            <div class="RightSide">
                <div style="display:inline-block;" >
                    <p>Varighed: 5 ½ år (inkl. grundforløb 1)</p> <br>
                    <br>
                    <p>Som datatekniker opbygger, vedligeholder og reparerer du it-systemer og dataanlæg.</p>
                    <p>Med specialet i programmering arbejder du med at udvikle og programmere fx computerprogrammer, databasesystemer og apps fra bunden.</p>
                </div>
            </div>
        </div>
    </div>

</body>