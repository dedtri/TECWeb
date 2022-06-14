<?php
require_once "../php/db_connect.php";

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
   <div class="wrapper" id="wrapper">
       <header class="pageHeader">
       <a Class="logoLink" href="./index.php"><p class="logoName">Skoleoplæringscenter</p></a>

       <div>
       <a class="AdminLogin" href="./LoginSite.php"><Button class="loginButton" <?php if((isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Login</Button></a>
       <a class="AdminLogin" href="./AdminSite.php"><Button class="loginButton" <?php if((!isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Admin</Button></a> 
       <a class="AdminLogin" href="../php/logout.php"><Button class="loginButton" <?php if((!isset($_SESSION["loggedin"]))) {?> style="display: none;" <?php } ?> id="btn">Logout</Button></a> 
    </div>

       <script src="scripts.js"></script>
       </header>

       <div class="ButtonPlaceMent">
        <div class="StyleButton">
            <a href="./ITSupport.php"><button type="button">IT-Support</button></a>
            <a href="./Programmering.php"><button type="button">Programmering</button></a>
            <a href="./Infrastruktur.php"><button type="button">Infrastruktur</button></a>
        </div>
        <div class="StyleButton">
            <a href="./Drift.php"><button type="button">Drift/Lab</button></a>
            <a href="./labmain.php"><button type="button">IT-Linje lokaler</button></a>
            <a href="./informain.php"><button type="button">Info</button></a>
        </div>
        <div class="StyleButton">
            <a href="servicesmain.php"><button type="button">Services</button></a>
            <a href="supportmain.php"><button type="button">Support</button></a>
            <a href="personalemain.php"><button type="button">Personale</button></a>
        </div>
    </div>
</body>
</html>