<?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/buttonCounter.php');  // PHP functions file

$page_id = 6;

add_view($conn, $page_id);
?>
<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    
    <div class="wrapper" id="wrapper">

        <div class="pageHeader">
            <a class="logoLink" href="./index.php"><span class="" id="logo">
                    <p class="logoName">Skoleoplæringscenter</p>
                </span></a>
                <a class="loginLink" href="./AdminSite.php">
                    <button class="loginButton">Login</button>
               </a>
        </div>

        <div class="mainSection">

            <div class="topContent">
                <h1>Uddannelseslinjer som TEC tilbyder</h1>
            </div>
              
            <div class="mainContent">
               
                <div class="imageDescription">
                    <img src="../img/motorcykelmekaniker.jpg" alt=""/>
                    <a href="https://www.tec.dk/erhvervsuddannelser/vaelg-erhvervsuddannelse/motorcykelmekanikeruddannelsen/"><p>Motorcykelmekaniker</p></a>
                </div>
                <div class="imageDescription">
                    <img src="../img/itkurser.jpg" alt="" />
                    <a href="https://www.tec.dk/erhvervsuddannelser/vaelg-erhvervsuddannelse/data-og-kommunikationsuddannelsen/"><p>Data og Kommunikation</p></a>
                </div>
                <div class="imageDescription">
                    <img src="../img/maler.jpg" alt="" />
                    <a href=""><p>Bygningsmaler</p></a>
                </div>
                <div class="imageDescription">
                    <img src="../img/vvs.jpg" alt="" />
                    <a href="https://www.tec.dk/erhvervsuddannelser/vaelg-erhvervsuddannelse/bygningsmaleruddannelsen/"><p>VVS</p></a>
                </div>
                <div class="imageDescription" ></a>
                    <img src="../img/Lastvognsmekaniker.jpg" alt="" />
                    <a href="https://www.tec.dk/erhvervsuddannelser/vaelg-erhvervsuddannelse/lastvognsmekanikeruddannelsen/"><p>Lastvognsmekaniker</p></a>
                </div>
                <div class="imageDescription">
                    <img src="../img/automatiktekniker.png" alt="" />
                    <a href="https://www.tec.dk/erhvervsuddannelser/vaelg-erhvervsuddannelse/automatik-og-procesuddannelsen/"><p>Automatiktekniker</p></a>
                </div>
            </div>
        </div>

        </div>
    </div>


</body>

</html>