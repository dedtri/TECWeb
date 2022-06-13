<?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/buttonCounter.php');  // PHP functions file

$page_id = 4;

add_view($conn, $page_id);
?>
<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drift</title>
    <link rel="stylesheet" href="../css/style.css">
    <script>
         function lokale1(){
             document.getElementById('myImage')
             .src="../img/ServiceDisk.jpg";
         }
          
         function lokale2(){
             document.getElementById('myImage')
             .src="../img/LonnieVeleder.jpg";
         }
      </script>
</head>

<body>
    <div class="wrapper" id="wrapper">

        <div class="pageHeader">
            <a class="logoLink" href="./index.php"><span class="" id="logo">
                    <p class="logoName">Skoleoplæringscenter</p>
                </span></a>
                <a class="loginLink" href="./LoginSite.php">
                    <button class="loginButton">Login</button>
               </a>
        </div>

        <div class="mainSection">

            <div class="topContent">
                <h1>Lokaler</h1>
            </div>
           
            <div class="mainContent">
            <div class="leftContent">
               <img id="myImage" class="kort" src="../img/Drift.jpg" alt="">
            </div>
            <div class="rightContent">
                <p class="infoText">
                    
                <div class="button">
         <button class="loginButton"
                 onclick=lokale1();>
             Service disk
         </button><br>
         <button class="loginButton"
                  onclick=lokale2();>
             Leder
         </button>
                </p> 
            </div>
        </div>
    </div>
</body>

</html>