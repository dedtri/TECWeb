<?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/buttonCounter.php');  // PHP functions file

$page_id = 5;

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
    <script src="../js/scripts.js"></script>
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



            <div class="topContent2">

            <button class="loginButton"
                 onclick=lokale6();>
             Infrastruktur
         </button>

         <button class="loginButton"
                 onclick=lokale7();>
             Infrastruktur og IT-support
         </button>

         <button class="loginButton"
                 onclick=lokale8();>
             Programmering
         </button>

    

            </div>  
           
            <div class="mainContent">

               <img id="myImage" class="kort" src="../img/BilledeAfSkole.jpg" alt="">


        </div>
                    

         
         
        </div>
    </div>
</body>

</html>