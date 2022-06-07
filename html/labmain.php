<?php
require_once('../php/db_connect.php'); // Database connection file
require_once('../php/functions.php');  // PHP functions file

$page_id = Get_Page_Id($conn, $page_id);

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
                    <p class="logoName">TEC</p>
                </span></a>
                <a class="loginLink" href="./AdminSite.php">
                    <button class="loginButton">Login</button>
               </a>
        </div>

        <div class="mainSection">
            <div class="topContent">
                <h1>Lab</h1>
            </div>
           
            <div class="mainContent">
            <div class="leftContent">
               <img src="../img/kort1.PNG" alt="">
            </div>
            <div class="rightContent">
                <p class="infoText">Lokale E114</p> 
                <p class="infoText">Lokale E154</p> 
                <p class="infoText">Lokale E214</p> 
                <p class="infoText">Lokale E314</p> 
            </div>
        </div>
    </div>
</body>

</html>